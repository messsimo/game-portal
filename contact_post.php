<?php 
    // Запуск сессии
    session_start();

    // Подключение базы данных 
    $mysql = new mysqli("localhost", "root", "root", "game-portal");

    // Кодировка текса из input-полей  
    $mysql->query("SET NAMES 'utf8'");

    // Присвоение переменным значений POST
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Создание сессии для оповщения
    $_SESSION["alert"] = "";

    // Функция по переадрессации
    function redirect() {
        header("Location: contact.php");
    }

    // Валидация данных 
    if (trim($firstname) == "" || trim($lastname) == "" || trim($email) == "" || trim($message) == "") {
        $_SESSION["alert"] = "Fill in all the fields!";
        redirect();
    } else if (strlen(trim($firstname)) < 3 || strlen(trim($firstname)) > 12) {
        $_SESSION["alert"] = "Your firstname must be from 3 to 12 characters!";
        redirect();
    } else if (strlen(trim($lastname)) < 3 || strlen(trim($lastname)) > 12) {
        $_SESSION["alert"] = "Your lastname must be from 3 to 12 characters!";
        redirect();
    } else if (strpos($email, "@") === false) {
        $_SESSION["alert"] = "Please enter a valid email! Example: jhon@mail.ru";
        redirect();
    } else if (strlen(trim($email)) > 50) {
        $_SESSION["alert"] = "Your email must be under 50 characters!";
        redirect();
    } else if (strlen(trim($message)) < 10 || strlen(trim($message)) > 270) {
        $_SESSION["alert"] = "Your message must be from 10 to 270 characters";
        redirect();
    } else {
        $_SESSION["alert"]= "Thank you for message! We got it.";
        redirect();

        // Переменные для отправки письма
        $sendTo = "danikmihai23@mail.ru";
        $title = "Message from Contact us";

        // Кодировка темы письма
        $title = "=?utf-8?B?" . base64_encode($title) . "?=";

        // Создание заголовка письма
        $header = "From: $email\r\n Reply-to: $sendTo\r\n Content-Type: text/plain; charset=utf-8";

        // Отправка письма
        mail($sendTo, $title, $message, $header);


        // Внесение данных в базу данных
        // $mysql->prepare("INSERT INTO `messages` (`firstname`, `lastname`, `email`, `message`) VALUES (?, ?, ?, ?)");
        $mysql->query("INSERT INTO `messages` (`firstname`, `lastname`, `email`, `message`) VALUES ('$firstname', '$lastname', '$email', '$message')");



    
    }

    // Закрытие базы данных
    $mysql->close();