<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = trim($_POST['phone']);

    if (!preg_match('/^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/', $phone)) {
        echo 'invalid_phone';
        exit;
    }

    $to = '';
    $subject = 'New Phone Number';
    $message = 'Phone: ' . $phone;

    if (mail($to, $subject, $message)) {
        echo 'sent';
    } else {
        echo 'failed';
    }
}
?>