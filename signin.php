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
    <?php   
        // Подключение сессии
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

    <!-- Секция с навигацией -->
    <div class="location">
        Home  > <span>Sign In</span>
    </div>

    <!-- Секция с регистрацией и входом в аккаунт -->
    <div class="user-form">
        <div class="bg-form">
            <div class="reg">
             <h2>Don't have an account?</h2>
                <button class="btn-reg">Register</button>
            </div>

            <div class="sign">
                <h2>Login to your account?</h2>
                <button class="btn-sign">Sign In</button>
         </div>
    </div>

        <div class="form">
            <div class="main-form form-reg">
                <h2>Registration</h2>

                <form action="/data/reg_post.php" method="POST">
                    <label for="login">Login</label><br>
                    <input type="text" name="username" id="login"><br>

                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email"><br>

                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password"><br>

                    <span class="alert-reg">
                        <?= $_SESSION["alert-reg"] ?? '' ?>
                    </span><br>

                    <button type="submit">Register</button>
                </form>
            </div>

            <div class="main--form form-sign">
                <h2>Sign In</h2>

                <form action="/data/sign_post.php" method="POST">
                    <label for="login">Login</label><br>
                    <input type="text" name="username" id="login"><br>

                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password"><br>

                    <span class="alert-sign">
                        <?= $_SESSION["alert-sign"] ?? '' ?>
                    </span><br>

                    <button type="submit">Sign In</button>
                </form>
            </div>
        </div>
    </div>

    <?php
        // Подключение футера сайта
        require_once("blocks/footer.php");
    ?>
</body>
</html>