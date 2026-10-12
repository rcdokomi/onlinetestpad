<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Безопасно принимаем ответ из формы
    $answer = htmlspecialchars(trim($_POST['answer']));
    
    // Куда отправлять результат (Ваш указанный email)
    $to = "wrtyety36@gmail.com";
    
    // Тема и текст письма
    $subject = "Результаты теста с сайта";
    $message = "Пользователь прошел тест.\n\n";
    $message .= "Вопрос: Какого цвета ёлки?\n";
    $message .= "Ответ пользователя: " . $answer . "\n";
    
    // Настройки кодировки (чтобы русский текст отображался корректно)
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
    $headers .= "From: test-robot@example.com" . "\r\n"; // Можно заменить на домен вашего будущего сайта

    // Отправка стандартной почтовой службой сервера
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
