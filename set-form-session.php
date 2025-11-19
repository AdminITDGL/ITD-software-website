<?php
/**
 * Set session token for form submission
 * This file is called via AJAX after successful form submission
 */
session_start();

// Set session variables to allow access to thank-you.php
$_SESSION['form_submitted'] = true;
$_SESSION['form_submit_time'] = time();

// Return success response
header('Content-Type: application/json');
echo json_encode(['success' => true, 'message' => 'Session set successfully']);
exit();
?>

