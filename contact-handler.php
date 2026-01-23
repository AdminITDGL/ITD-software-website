<?php
// Handles contact form submission: sends to WhatsApp via Pinbot and forwards to Web3Forms.

function sendWhatsappLead($name, $email, $phone, $subject, $message) {
    $apiKey           = '37b1ae3b-72bc-11f0-98fc-02c8a5e042bd';
    $phoneNumberId    = '793109517211110';
    $to               = '918452007810'; // destination WhatsApp (E.164 without +)

    $payload = [
        'messaging_product' => 'whatsapp',
        'to' => $to,
        'type' => 'text',
        'text' => [
            'body' => "New website enquiry:\nName: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message"
        ]
    ];

    $ch = curl_init("https://partnersv1.pinbot.ai/v3/{$phoneNumberId}/messages");
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            "apikey: {$apiKey}"
        ],
        CURLOPT_POSTFIELDS => json_encode($payload)
    ]);
    $resp = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_errno($ch);

    if ($curlError) {
        error_log("WhatsApp CURL Error #{$curlError}: " . curl_error($ch));
    } else {
        error_log("WhatsApp API Response - HTTP {$httpCode}: {$resp}");
        $responseData = json_decode($resp, true);
        if ($httpCode !== 200) {
            error_log("WhatsApp API Error: " . ($responseData['message'] ?? $resp));
        } else {
            error_log("WhatsApp message sent successfully! Message ID: " . ($responseData['messages'][0]['id'] ?? 'N/A'));
        }
    }
    curl_close($ch);
}

function forwardToWeb3Forms($data) {
    $ch = curl_init('https://api.web3forms.com/submit');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $data
    ]);
    $resp = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_errno($ch);

    if ($curlError) {
        error_log("Web3Forms CURL Error #{$curlError}: " . curl_error($ch));
    } else {
        error_log("Web3Forms Response - HTTP {$httpCode}: {$resp}");
    }

    curl_close($ch);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    error_log('Contact form POST received at ' . date('Y-m-d H:i:s'));
    $name           = trim($_POST['name'] ?? '');
    $email          = trim($_POST['email'] ?? '');
    $phone          = trim($_POST['phone'] ?? '');
    $subjectCustom  = trim($_POST['subject_custom'] ?? '');
    $message        = trim($_POST['message'] ?? '');

    error_log("Form data: name=$name, email=$email, phone=$phone, subject=$subjectCustom, message=" . substr($message, 0, 50));

    if ($name && $email && $phone && $subjectCustom && $message) {
        error_log('Calling sendWhatsappLead function...');
        sendWhatsappLead($name, $email, $phone, $subjectCustom, $message);

        // Because Web3Forms free tier blocks server-side submissions, post from the browser.
        $web3Payload = [
            'access_key'    => 'b409ebca-4b48-47dc-bdb3-2dd579ba4d92',
            'subject'       => 'New Contact Form Submission - ITD Services',
            'from_name'     => 'ITD Services Contact Form',
            'to'            => 'support@itdservices.in',
            'cc'            => 'ashish@itdservices.in',
            'name'          => $name,
            'email'         => $email,
            'phone'         => $phone,
            'subject_custom'=> $subjectCustom,
            'message'       => $message,
            'botcheck'      => $_POST['botcheck'] ?? ''
        ];

        // Render a small page that posts to Web3Forms via fetch, then redirects.
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Submitting...</title>
        </head>
        <body>
        <script>
            (function() {
                const payload = <?php echo json_encode($web3Payload, JSON_UNESCAPED_UNICODE); ?>;
                fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                }).catch(function(err) {
                    console.error('Web3Forms client error', err);
                }).finally(function() {
                    window.location.href = 'thank-you.php';
                });
                // Safety timeout in case fetch hangs
                setTimeout(function() { window.location.href = 'thank-you.php'; }, 4000);
            })();
        </script>
        </body>
        </html>
        <?php
        exit;
    } else {
        error_log('Form validation failed: missing required fields.');
    }
}
?>

