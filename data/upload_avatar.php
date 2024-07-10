<?php

    // Обозначение переменных
    $fileName = $_FILES["file"]["name"];
    $fileSize = $_FILES["file"]["size"];
    $fileType = $_FILES["file"]["type"];
    $fileTemp = $_FILES["file"]["tmp_name"];

    // Функция переадресации пользователя
    function redirect() {
        header("Location: /user.php");
    }

    // Проверка файла на загрузку на сервер
    if (move_uploaded_file($fileTemp, __DIR__.'//avatar_storage/'. basename($fileName))) {
        redirect();
    }


// Надо будет подключить БД и при удачном добавлении добавлять фото в БД и 
// из БД выводить свою аватарку для каждого пользователя




