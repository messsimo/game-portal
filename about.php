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
                <li><a href="/portfolio.php">Portfolio</a></li>
                <li><a href="/contact.php">Contact us</a></li>
                <li><a href="/signin.php" class="btn">Sign In</a></li>
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

    <!-- Секция с работами -->
    <div class="works">
        <h2>Why work with us</h2>

        <div class="container-blocks">
            <div class="blocks">
                <p class="p bg-purple">Lorem ipsum</p>
                <h3>Lorem Ipsum</h3>
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
            </div>

            <div class="blocks">
                <p class="p bg-brown">Lorem ipsum</p>
                <h3>Lorem Ipsum</h3>
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
            </div>

            <div class="blocks">
                <p class="p bg-green">Lorem ipsum</p>
                <h3>Lorem Ipsum</h3>
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
            </div>
        </div>
    </div>

    <!-- Секция с описанием персонажа -->
    <div class="description">
        <img src="images/slider2.png" alt="Elfa">

        <div class="desc-text">
            <p>Lorem ipsum</p>
            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h2>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</span>
        </div>
    </div>

    <!-- Cекция с командой -->
    <div class="team">
        <h1>Our Team</h1>

        <div class="members">
            <div class="person">
                <img src="images/person1.png" alt="Jhon">
                <p>John Peter</p>
                <span>Founder</span>
            </div>

            <div class="person">
                <img src="images/person2.png" alt="Daniel">
                <p>Dana Moreno</p>
                <span>Co-Founder</span>
            </div>

            <div class="person">
                <img src="images/person3.png" alt="Kate">
                <p>Kate Willson</p>
                <span>Co-Founder</span>
            </div>

            <div class="person">
                <img src="images/person4.png" alt="Sum">
                <p>Sum Sulek</p>
                <span>Co-Founder</span>
            </div>
        </div>
    </div>

<?php
    // Подключение блока с рассылкой 
    require_once("blocks/newsletter.php");
?>
</div>
<?php
    // Подключение футера сайта
    require_once("blocks/footer.php");
?>