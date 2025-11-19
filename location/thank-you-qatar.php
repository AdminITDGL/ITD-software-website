<?php
session_start();
$allowed = false;
if (isset($_SESSION['form_submitted']) && $_SESSION['form_submitted'] === true) {
    if (isset($_SESSION['form_submit_time']) && (time() - $_SESSION['form_submit_time']) < 300) {
        $allowed = true;
        unset($_SESSION['form_submitted']);
        unset($_SESSION['form_submit_time']);
    }
}
if (!$allowed) {
    header('Location: ../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Thank you for contacting ITD Services Qatar - We'll get back to you soon!">
    <meta name="keywords" content="ITD Services, Courier Management Software, Logistics Software, Qatar">
    <meta name="author" content="ITD Services Pvt Ltd">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You - ITD Services Qatar</title>
    <?php include('header_script.php')?>
    <style>
        .thank-you__area {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
            padding: 100px 0;
        }
        .thank-you__area::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(0, 123, 255, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 70% 80%, rgba(138, 43, 226, 0.05) 0%, transparent 50%);
            pointer-events: none;
        }
        .thank-you__container {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        .thank-you__icon-wrapper {
            margin-bottom: 40px;
            position: relative;
        }
        .thank-you__icon-circle {
            width: 150px;
            height: 150px;
            margin: 0 auto;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #b4cbdf 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 15px 50px rgba(0, 123, 255, 0.3);
            animation: iconPulse 2s ease-in-out infinite;
        }
        .thank-you__icon-circle::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #b4cbdf 100%);
            opacity: 0.3;
            animation: ripple 2s ease-out infinite;
        }
        .thank-you__icon {
            font-size: 70px;
            color: #ffffff;
            position: relative;
            z-index: 1;
            animation: checkmark 0.6s ease-in-out 0.3s both;
        }
        .thank-you__title {
            margin-bottom: 25px;
        }
        .thank-you__title h1 {
            font-size: 56px;
            font-weight: 700;
            color: var(--text-heading-color);
            margin-bottom: 20px;
            line-height: 1.2;
            background: linear-gradient(135deg, #1a1a1a 0%, var(--primary-color-1) 50%, #8a2be2 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientText 3s ease infinite;
        }
        @keyframes gradientText {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        .thank-you__subtitle {
            font-size: 24px;
            color: #666;
            margin-bottom: 30px;
            font-weight: 500;
        }
        .thank-you__message {
            font-size: 18px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 50px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .thank-you__actions {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .btn-thank-you {
            padding: 16px 40px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            text-transform: capitalize;
        }
        .btn-thank-you-primary {
            background: linear-gradient(135deg, var(--primary-color-1) 0%, #b4cbdf 100%);
            color: #ffffff;
            border: none;
            box-shadow: 0 5px 20px rgba(0, 123, 255, 0.3);
        }
        .btn-thank-you-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0, 123, 255, 0.4);
        }
        .btn-thank-you-secondary {
            background: #ffffff;
            color: var(--primary-color-1);
            border: 2px solid var(--primary-color-1);
        }
        .btn-thank-you-secondary:hover {
            background: var(--primary-color-1);
            color: #ffffff;
            transform: translateY(-3px);
        }
        @keyframes iconPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        @keyframes ripple {
            0% { transform: scale(1); opacity: 0.3; }
            100% { transform: scale(1.5); opacity: 0; }
        }
        @keyframes checkmark {
            0% { transform: scale(0) rotate(-45deg); opacity: 0; }
            50% { transform: scale(1.2) rotate(5deg); }
            100% { transform: scale(1) rotate(0deg); opacity: 1; }
        }
        .thank-you__decorative-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 0;
        }
        .shape-decoration {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(0, 123, 255, 0.1) 0%, rgba(138, 43, 226, 0.1) 100%);
            animation: float 6s ease-in-out infinite;
        }
        .shape-decoration-1 {
            width: 200px;
            height: 200px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        .shape-decoration-2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }
        .shape-decoration-3 {
            width: 100px;
            height: 100px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
        }
        @media (max-width: 991px) {
            .thank-you__title h1 { font-size: 42px; }
            .thank-you__subtitle { font-size: 20px; }
            .thank-you__icon-circle { width: 120px; height: 120px; }
            .thank-you__icon { font-size: 55px; }
        }
        @media (max-width: 767px) {
            .thank-you__area { padding: 80px 20px; }
            .thank-you__title h1 { font-size: 36px; }
            .thank-you__subtitle { font-size: 18px; }
            .thank-you__message { font-size: 16px; }
            .thank-you__actions { flex-direction: column; align-items: stretch; }
            .btn-thank-you { width: 100%; justify-content: center; }
            .thank-you__icon-circle { width: 100px; height: 100px; }
            .thank-you__icon { font-size: 45px; }
            .shape-decoration { display: none; }
        }
        .thank-you__container > * {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        .thank-you__icon-wrapper { animation-delay: 0.2s; }
        .thank-you__title { animation-delay: 0.4s; }
        .thank-you__subtitle { animation-delay: 0.6s; }
        .thank-you__message { animation-delay: 0.8s; }
        .thank-you__actions { animation-delay: 1s; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <?php include('header.php')?>
    <div class="thank-you__area">
        <div class="thank-you__decorative-shapes">
            <div class="shape-decoration shape-decoration-1"></div>
            <div class="shape-decoration shape-decoration-2"></div>
            <div class="shape-decoration shape-decoration-3"></div>
        </div>
        <div class="container">
            <div class="thank-you__container">
                <div class="thank-you__icon-wrapper">
                    <div class="thank-you__icon-circle">
                        <i class="fas fa-check thank-you__icon"></i>
                    </div>
                </div>
                <div class="thank-you__title">
                    <h1>Thank You!</h1>
                </div>
                <div class="thank-you__subtitle">
                    We've received your message from Qatar
                </div>
                <div class="thank-you__message">
                    <p>Thank you for contacting ITD Services Qatar. Our team has received your inquiry and will get back to you within 24 hours. We appreciate your interest in our courier and logistics management solutions for Qatar.</p>
                </div>
                <div class="thank-you__actions">
                    <a href="../index.php" class="btn-thank-you btn-thank-you-primary">
                        <i class="fas fa-home"></i>
                        Back to Home
                    </a>
                    <a href="qatar.php" class="btn-thank-you btn-thank-you-secondary">
                        <i class="fas fa-envelope"></i>
                        Contact Us Again
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php')?>
    <?php include('footer_script.php')?>
</body>
</html>

