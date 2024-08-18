<?php
$conn=new PDO("mysql:host=localhost;dbname=myblog","root","");
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $article=$_POST['blog'];
    $query=$conn->prepare("INSERT INTO blogpost (title,article) values(?,?)");
    $query->execute([$title,$article]);
    if($query)
    {
        header("location:read.php");
        exit();
    }
    
}
$conn=null;
?>