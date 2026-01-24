<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "itk.com.ltd@yandex.com";
    $subject = "Новое сообщение с сайта CorroTech";
    $body = "Имя: $name\nEmail: $email\n\nСообщение:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Спасибо! Ваше сообщение отправлено.</h2>";
    } else {
        echo "<h2>Ошибка отправки. Попробуйте позже.</h2>";
    }
}
?>
