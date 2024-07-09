<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php
        // Запуск сессии
        session_start();
    ?>
    <h1>Welcome derar, <?=$_SESSION["username"] ?? '' ?>!</h1>
</body>
</html>