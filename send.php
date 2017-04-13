<?php 
$name = $_POST['name']; // Вытаскиваем имя в переменную 
$number = $_POST['number']; // Вытаскиваем почту в переменную 
$special = $_POST['special']; 
$time = $_POST['time']; 
$address = $_POST['address']; 
$message = "Клиент $name (телефонный номер $number) произвел онлайн-запись на прием. Информация: $special. Желает записаться на прием по адресу $address в назначенное время: $time."; 
$to = "e.martinow@yandex.ru"; // Задаем получателя письма 
$from = "noreply-martynow@ulybka.ru"; // Отправитель 
$subject = "Запись на прием"; // Тема 
$headers = "From: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n"; //для формирвоания заголовка 
if (mail($to, $subject, $message, $headers)) { 
echo "<p>Сообщение успешно отправлено! Ожидайте, с вами обязательно свяжутся!</p><br><a href='index.html'><input type='button' value='Вернуться на главную'</a>"; 
} 
else { 
echo "<p>Ошибка отправления</p><br><a href='index.html'><input type='button' value='Вернуться на главную'</a>"; 
} 
?>