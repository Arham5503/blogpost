<?php
$conn = new PDO("mysql:host=localhost;dbname=myblog", "root", "");
if (isset($_POST['submit'])) {
    $date=$_POST['date'];
    $title = $_POST['title'];
    $article = $_POST['blog'];
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];

    // Move the uploaded file
    $upload = move_uploaded_file($file_tmp, "uploaded-images/" . $file_name);

    // Insert into the database
    $query = $conn->prepare("INSERT INTO blogpost (date,title, article, image) VALUES (?,?, ?, ?)");
    $query->execute([$date, $title, $article, $file_name]);

    if ($query && $upload) {
        header("location:read.php");
        exit();
    }
}
$conn = null;
?>

