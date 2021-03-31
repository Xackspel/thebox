<?php
// Setup section

// Receiving password
$login = $_POST['login'];
$password = $_POST['password'];


if (!empty($login) && !empty($password)){
    header('location: http://thebox/boxes.php');
}
else{
    $url = 'http://thebox/index.php';
    //Инициализирует сеанс
    $connection = curl_init();
    //Устанавливаем адрес для подключения, по умолчанию методом GET
    curl_setopt($connection, CURLOPT_URL, $url."?Empty_Input=1");
    //Выполняем запрос
    curl_exec($connection);
    //Завершает сеанс
    curl_close($connection);
}