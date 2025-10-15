<?php

add_action('wp_ajax_send_phone_email', 'send_phone_email_handler');
add_action('wp_ajax_nopriv_send_phone_email', 'send_phone_email_handler');

function send_phone_email_handler() {
    if (!isset($_POST['phone']) || empty(trim($_POST['phone']))) {
        echo json_encode(array('status' => 0, 'message' => 'Ошибка: номер телефона не указан.'));
        wp_die();
    }

    $phone = sanitize_text_field($_POST['phone']);

     if (!preg_match('/^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/', $phone)) {
        echo json_encode(array('status' => 0, 'message' => 'Ошибка: неверный формат номера телефона.'));
        wp_die();
    }

    $to = 'anastasrassoh@gmail.com';
    $subject = 'Новая заявка от ' . $phone;
    $message = "Номер телефона: " . $phone . "\n";
    $headers = array('Content-type: text/html; charset=utf-8', 'From: lor-kabinet.ru <info@lor-kabinet.ru>');


    if (wp_mail($to, $subject, $message, $headers)) {
        echo json_encode(array('status' => 1, 'message' => 'Заявка успешно отправлена.'));
    } else {
        echo json_encode(array('status' => 0, 'message' => 'Не удалось отправить заявку. Попробуйте позже.'));
    }

    wp_die();
}
?>