<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/user.css">
    <title>Profile</title>
</head>
<body>
    <?php
        // Запуск сессии
        session_start();
    ?>

    <!-- Cекция с шапкой сайта -->
    <header class="container">
        <span class="logo">GamePortal</span>

        <nav>
            <ul>
                <li><a href="/main.php">Home</a></li>
                <li><a href="/about.php">About Us</a></li>
                <li><a href="/portfolio.php">Portfolio</a></li>
                <li><a href="/contact.php">Contact us</a></li>
                <li><a href="/signin.php" class="btn">Sign In</a></li>
            </ul>
        </nav>
    </header>

    <!-- Секция с информацией о пользователе -->
    <div class="user">
        <div class="user-container">
            <div class="user-img">
                <img src="/data/avatar_storage/" alt="Avatar">

                <form action="/data/upload_avatar.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file" id="file">
                    <button type="submit">Upload photo</button>
                </form>

                <button><a href="/main.php">Log out</a></button>
            </div>

            <div class="user-info">
                <h3><?=$_SESSION["username"] ?? '' ?></h3>

                <div class="info">
                    <div class="block">
                        <span>Country:</span>
                        <p>none</p>
                    </div>

                    <div class="block">
                        <span>Gender:</span>
                        <p>none</p>
                    </div>

                    <div class="block">
                        <span>Favorite game:</span>
                        <p>none</p>
                    </div>

                    <div class="block">
                        <span>Status:</span>
                        <p>none</p>
                    </div>

                    <div class="block">
                        <span>Language:</span>
                        <p>none</p>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <?php
        // Подключение футера сайта
        require_once("blocks/footer.php");
    ?>