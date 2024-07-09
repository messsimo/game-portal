<?php
    // Подключение сессии
    session_start();

    // Подключение базы данных
    $mysql = new mysqli("localhost", "root", "root", "game-portal");

    // Кодировка текса 
    $mysql->query("SET NAMES 'utf8'");

    // Присвоение переменных к данных POST + фильтрование на спец.символы
    $username = trim(filter_var($_POST["username"], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));

    // Cессии 
    $_SESSION["alert-reg"] = "";
    $_SESSION["username"] = $username;

    // Функция для переадрессации
    function redirect() {
        header("Location: /signin.php");
    }

    // Выборка из базы данных для проверки имеющихся записей
    $checkUsername = $mysql->query("SELECT `username` FROM `users` WHERE `username` = '$username'");
    $checkEmail = $mysql->query("SELECT `email` FROM `users` WHERE `email` = '$email'");

    // Валидация данных 
    if ($username == "" || $email == "" || $password == "") {
        $_SESSION["alert-reg"] = "Fill all the fields!";
        redirect();
    } else if (strlen($username) < 3 || strlen($username) > 12) {
        $_SESSION["alert-reg"] = "Your login must be from 3 to 12 characters!";
        redirect();
    } else if ($checkUsername->num_rows > 0) {
        $_SESSION["alert-reg"] = "This login already taken!";
        redirect();
    } else if (strlen($email) > 50) {
        $_SESSION["alert-reg"] = "Your email must be under 50 charactes!";
        redirect();
    } else if ($checkEmail->num_rows > 0) {
        $_SESSION["alert-reg"] = "This Email already taken!";
        redirect();
    } else if (strpos($email, "@") === false) {
        $_SESSION["alert-reg"] = "Fill corect email! Example: jhon@mail.ru";
        redirect();
    } else if (strlen($password) < 4 || strlen($password) > 12) {
        $_SESSION["alert-reg"] = "Your password must be from 4 to 12 characters!";
        redirect();
    } else if (strpbrk($password, "+_?><!_-=:;@$%&*") === true) {
        $_SESSION["alert-reg"] = "Please, don't use (+_?><!_-=:;@$%&*) in password!";
    } else {
        $_SESSION["alert-reg"] = "Succesfull!";
        // Переадрессация на страницу пользователя
        header("Location: /user.php");
        
        // Занесение данных в базу данных
        $mysql->query("INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')");
    }
    
    // Закрытие базы данных
    $mysql->close();