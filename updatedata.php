<?php
$sr = $_POST['sr'];
$title = $_POST['title'];
$article = $_POST['article'];
$conn = new PDO("mysql:host=localhost;dbname=myblog", "root", "");
$query = $conn->prepare("UPDATE blogpost SET title = ?, article = ? WHERE SR_NO = ?");
$query->bindParam(1,$title);
$query->bindParam(2,$article);
$query->bindParam(3,$sr);
$query->execute();
if ($query) {
    header("location:read.php");
    exit();
}
$conn = null;

?>