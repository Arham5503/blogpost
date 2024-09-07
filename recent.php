<?php
$conn=new PDO("mysql:host=localhost;dbname=myblog","root","");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./recent-style.css">
</head>

<body>
    <main>
        <section>
        <?php
        $query=$conn->prepare("SELECT * FROM blogpost ORDER BY SR_NO DESC");
        $query->execute();
        while($row=$query->fetch(PDO::FETCH_ASSOC)){
            echo "<div class='child'>";
            if(!empty($row['image'])){
                echo "<img src='uploaded-images/" . $row['image'] . "'>";
            }
            echo "<div class='text'>";
            echo "<h1>" . $row['title'] . "</h1>";
            echo "<span>" .$row['date']."</span>";
            echo "<p>" . substr($row['article'],0,295).'...' . "</p>
            </div>
            </div>
            ";
        }
        $conn=null;
        ?>
        </section>
    </main>
</body>

</html>