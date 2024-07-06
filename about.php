<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loop.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/about.css">
    <title>About us</title>
</head>
<body>
    <!-- Блок с задним фоном страницы -->
    <div class="wrapper">

    <!-- Cекция с шапкой сайта -->
    <header class="container">
        <span class="logo">GamePortal</span>

        <nav>
            <ul>
                <li><a href="/main.php">Home</a></li>
                <li><a href="/about.php" class="active">About Us</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#" class="btn">Contact us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Cекция hero -->
    <div class="hero">
        <div class="slider" id="slider">
            <img src="images/slider1.png" alt="Street" class="sl-photo" id="img">

            <div class="button">
                <img src="images/slider-arrow-left.png" alt="Slide-left" id="arrow" class="ar-lf">
                <img src="images/slider-arrow-right.png" alt="Slide-right" id="arrow" class="ar-rt">
            </div>
        </div>

        <div class="location">
            <span>Home > <b>About us</b></span>
        </div>

        <div class="main-text">
            <h1>Lorem Ipsum is simply dummy text of the printing and.</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

            <button class="btn">Get in touch</button>
        </div>
    </div>


<?php
    // Подключение блока с рассылкой 
    require_once("blocks/loop.php");
?>
</div>
<?php
    // Подключение футера сайта
    require_once("blocks/footer.php");
?>