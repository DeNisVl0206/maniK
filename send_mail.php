<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Получение данных из формы
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $date = htmlspecialchars($_POST['date']);

    // Настройки письма
    $to = "matepold@gmail.com"; // Ваш email
    $subject = "Новая запись на услугу";
    $message = "Имя: $name\nТелефон: $phone\nУслуга: $service\nДата: $date";

    $headers = "From: no-reply@yourwebsite.com\r\n"; // Отправитель (замените на свой домен)
    $headers .= "Reply-To: no-reply@yourwebsite.com\r\n";

    // Отправка письма
    if (mail($to, $subject, $message, $headers)) {
        echo "Спасибо! Ваша запись успешно отправлена.";
    } else {
        echo "Произошла ошибка при отправке. Попробуйте еще раз.";
    }
} else {
    echo "Неверный метод запроса.";
}
?>
