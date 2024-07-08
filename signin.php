<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/signin.css">
    <title>Account</title>
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
                <li><a href="/contact.php">Contact us</a></li>
                <li><a href="/signin.php" class="btn">Sign In</a></li>
            </ul>
        </nav>
    </header>


    <?php
        // Подключение футера сайта
        require_once("blocks/footer.php");
    ?>
</body>
</html>