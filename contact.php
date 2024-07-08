<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loop.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact us</title>
</head>
<body>
    <!-- Cекция с шапкой сайта -->
    <header class="container">
        <span class="logo">GamePortal</span>

        <nav>
            <ul>
                <li><a href="/main.php">Home</a></li>
                <li><a href="/about.php">About Us</a></li>
                <li><a href="/portfolio.php">Portfolio</a></li>
                <li><a href="/news.php">News</a></li>
                <li><a href="/contact.php" class="btn">Contact us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Секция с навигацей по сайта -->
    <div class="location">
        Home  > <span>Contact us</span>
    </div>

    <!-- Секция с картой -->
    <div class="info">
        <h1>Lorem Ipsum is simply dummy text of the printing and.</h1>
        <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h3>

        <img src="images/map.png" alt="Map" class="worldmap">

        <div class="about">
            <div class="block-1">
                <p>Follow us</p>

                <div class="social">
                    <img src="images/facebook_dark.png" alt="Facebook">
                    <img src="images/inst_dark.png" alt="Instagram">
                    <img src="images/x_dark.png" alt="Twiter">
                    <img src="images/linkedin_dark.png" alt="LinkedIn">
                </div>
            </div>

            <div class="block-2">
                <img src="images/phone.png" alt="Phone">
                <span>+94 4444 5555 6</span>
            </div>

            <div class="block-3">
                <img src="images/gps.png" alt="Location">
                <span>but also the leap into electronic typesetting</span>
            </div>
        </div>
    </div>


    <!-- Секция с отправкой сообщения -->
    <div class="send-mes">
        <div class="deco-top">
            <img src="images/deco_top.png">
        </div>

        <h1>Say hello</h1>
        <h2>Lorem Ipsum is simply dummy text of the printing .</h2>

        <?php
            // Подключение сессии
            session_start();
        ?>

        <form action="contact_post.php" method="POST">
            <div class="top">
                <div>
                    <label for="firstname">First Name</label><br>
                    <input type="text" name="firstname" id="firstname">
                </div>

                <div>
                    <label for="lastname">Last Name</label><br>
                    <input type="text" name="lastname" id="lastname"><br>
                </div>
            </div>

            <label for="email">Email Address</label><br>
            <input type="email" name="email" id="email"><br>

            <label for="message">Message</label><br>
            <textarea name="message" id="message"></textarea><br>

            <span class="alert"><?=$_SESSION["alert"]?></span>

            <button type="submit">Get in touch</button>
        </form>

        <div class="deco-bot">
            <img src="images/deco_bot.png">
        </div>
    </div>





    <?php
        // Подключение блока с рассылкой
        require_once("blocks/newsletter.php");
    ?>

    <?php
        // Подключение футера сайта
        require_once("blocks/footer.php");
    ?>
</body>
</html>