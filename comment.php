<?php
$conn=new PDO("mysql:host=localhost;dbname=myblog","root","");
if(isset($_POST['submit'])){
    $date=$_POST['date'];
    $sr=$_POST['sr'];
    $url=$_POST['urltitle'];
    $user=$_POST['username'];
    $mail=$_POST['email'];
    $msg=$_POST['msg'];
    $query=$conn->prepare("INSERT INTO comment (date,postLink,username,email,message) values (?,?,?,?,?)");
    $query->execute([$date,$sr,$user,$mail,$msg]);
    if($query){
        header("Location: view.php?title=" . urlencode($url));
        exit();
    }    
      
}
$conn=null;
?>