<?php 
    // Подключение сессии
    session_start();

    // Подключение базы данных
    $mysql = new mysqli("localhost", "root", "root", "game-portal");

    // Кодировка текса 
    $mysql->query("SET NAMES 'utf8'");

    // Присвоение переменным данных POST
    $username = trim(filter_var($_POST["username"], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));

    // Cессии 
    $_SESSION["alert-sign"] = "";
    $_SESSION["username"] = $username;

    // Функция для переадрессации
    function redirect() {
        header("Location: /signin.php");
    }

    // Выборка записей из базы данных
    $findUser = $mysql->query("SELECT `username`, `password` FROM `users` WHERE `username` = '$username' AND `password` = '$password'");

    // Валидация данных
    if ($username == "" || $email == "") {
        $_SESSION["alert-sign"] = "Fill all the fields!";
        redirect();
    } else if (strlen($username) < 3 || strlen($username) > 12) {
        $_SESSION["alert-sign"] = "Your login must be from 3 to 12 characters!";
        redirect();
    } else if (strlen($password) < 4 || strlen($password) > 12) {
        $_SESSION["alert-sign"] = "Your password must be from 4 to 12 characters!";
        redirect();
    } else if (strpbrk($password, "+_?><!_-=:;@$%&*") === true) {
        $_SESSION["alert-sign"] = "Please, don't use (+_?><!_-=:;@$%&*) in password!";
    } 

    // Проверка на наличие пользователя в базе данных
    if ($findUser->num_rows > 0) {
        $_SESSION["alert-sign"] = "Successful!";
        header("Location: /user.php");

        // Присвоение файлу куки переменных
        setcookie("username", $username, time() +444444);
        setcookie("password", $password, time() +444444);
    } else {
        $_SESSION["alert-sign"] = "Your login or password don't match!";
        redirect();
    }

    // Закрытие БД
    $mysql->close();