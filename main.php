<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/loop.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header-main.css">
    <title>Game Portal</title>
</head>
<body>
    <!-- Блок для заднего фона сайта -->
    <div class="wrapper">

    <!-- Секция с шапкой сайта -->
    <header class="container">
        <span class="logo">GamePortal</span>

        <nav>
            <ul>
                <li><a href="/main.php" class="active">Home</a></li>
                <li><a href="/about.php">About Us</a></li>
                <li><a href="/portfolio.php">Portfolio</a></li>
                <li><a href="/news.php">News</a></li>
                <li><a href="/contact.php" class="btn">Contact us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Cекция hero -->
    <div class="hero">
        <div class="hero--text">
            <h2>3D game Dev</h2>
            <h1>Work that we produce for our clients</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
            <button class="btn">Get more details</button>
        </div>

        <img src="images/joistik.svg" alt="gamepad">
    </div>

    <!-- Cекция с коллекциями игр -->
    <div class="collection">
        <a href="#" class="btn">SEE ALL</a>
        <h2>Currently Trending Games</h2>

        <div class="games">
            <div class="block">
                <img src="images/vikings.png" alt="Vikings">
                <p><img src="images/fire.png" alt="fair" class="fire">40 Followers</p>
            </div>

            <div class="block">
               <img src="images/cyber.png" alt="Cyber">
               <p><img src="images/fire.png" alt="fair" class="fire">40 Followers</p>
             </div>

            <div class="block">
                <img src="images/battelfield.png" alt="Battelfield">
                <p><img src="images/fire.png" alt="fair" class="fire">40 Followers</p>
            </div>

            <div class="block">
                <img src="images/neo.png" alt="Neo">
                <p><img src="images/fire.png" alt="fair" class="fire">40 Followers</p>
            </div>
        </div>
    </div>

    <!-- Промежуточная секция -->
    <div class="big-text">
            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
        </div>

    <!-- Секция с информацией -->
    <div class="info">
        <h3>Lorem Ipsum</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    
        <img src="images/spidernam.jpg" alt="Spiderman" class="spiderman">
    </div>

    <!-- Секция с информацией 2 -->
    <div class="info-2">
        <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

        <div class="about">
            <div class="block">
                <img src="images/tel.png" alt="phone" class="object">
                <span>Mobile Game Development</span>
                <img src="images/arrow.png" alt="arrow" class="arrow">
            </div>

            <div class="block">
                <img src="images/pc.png" alt="phone" class="object">
                <span>PC Game Development</span>
                <img src="images/arrow.png" alt="arrow" class="arrow">
            </div>

            <div class="block">
                <img src="images/ps4.png" alt="phone" class="object">
                <span>PS4 Game Development</span>
                <img src="images/arrow.png" alt="arrow" class="arrow">
            </div>

            <div class="block">
                <img src="images/vr.png" alt="phone" class="object">
                <span>AR/VR Solutions</span>
                <img src="images/arrow.png" alt="arrow" class="arrow">
            </div>

            <div class="block">
                <img src="images/ar.png" alt="phone" class="object">
                <span>AR/ VR design</span>
                <img src="images/arrow.png" alt="arrow" class="arrow">
            </div>

            <div class="block">
                <img src="images/3d.png" alt="phone" class="object">
                <span>3D Modelings</span>
                <img src="images/arrow.png" alt="arrow" class="arrow">
            </div>
        </div>
    </div>

    <!-- Секция с проектами -->
    <div class="projects">
        <h3>Our Recent Projects</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

        <div class="photo">
            <img src="images/photo1.png" alt="Photo">
            <img src="images/photo2.png" alt="Photo">
            <img src="images/photo3.png" alt="Photo">
            <img src="images/photo4.png" alt="Photo">
            <img src="images/photo5.png" alt="Photo">
            <img src="images/photo6.png" alt="Photo">
        </div>

        <a href="#" class="btn">SEE ALL</a>
    </div>

<?php
    // Подключеие блока с рассылкой
    require_once("blocks/newsletter.php");

    // Подключение футера сайта
    require_once("blocks/footer.php");
?>