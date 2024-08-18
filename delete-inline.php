<?php
$conn=new PDO("mysql:host=localhost;dbname=myblog","root","");
$title=$_GET['title'];
$query=$conn->prepare("DELETE FROM blogpost where title=?");
$query->bindParam(1,$title);
$query->execute();
if($query){
    header("location:read.php");
    exit();
}
$conn=null;
?>