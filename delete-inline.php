<?php
$conn=new PDO("mysql:host=localhost;dbname=myblog","root","");
$sr=$_GET['SR_NO'];
$query=$conn->prepare("DELETE FROM blogpost where SR_NO=?");
$query->bindParam(1,$sr);
$query->execute();
if($query){
    header("location:read.php");
    exit();
}
$conn=null;
?>