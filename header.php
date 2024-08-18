<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./header.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">New Post</a>
                </li>
                <li>
                    <a href="read.php">View All</a>
                </li>
            </ul>
            <form method="POST" class="btn" action="">
                <button type="submit" class="bto" name="logout">LogOut</button>
            </form>
        </nav>
    </header>
</body>

</html>
<?php
session_start();
$mail = $_SESSION['mail'];
$pass = $_SESSION['pass'];
if (empty($mail) && empty($pass)) {
    header("location:login.html");
}
if (isset($_POST['logout'])) {

    session_unset();
    session_destroy();

    header("Location: login.html");
    exit();
}
?>