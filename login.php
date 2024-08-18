<?php
session_start();
$conn = new PDO("mysql:host=localhost;dbname=myblog", "root", "");

if (isset($_POST['submit'])) {
    $mail = $_POST['email'];
    $pass = $_POST['password'];
    $result = $conn->prepare("SELECT * FROM login WHERE email='$mail' AND password='$pass'");
    $result->execute();

    if ($result->rowCount() == 1) {
        $_SESSION['mail'] = $mail;
        $_SESSION['pass'] = $pass;
        header("Location: index.php");
        exit();
    }
    else {
    header("Location: login.html");
        exit();}

    }
    $conn=null;
?>
