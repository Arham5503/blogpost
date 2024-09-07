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
    <style>
        .child{
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
<header>
        <nav>
            <h1 class="grow">BlogSpot</h1>
        </nav>
    </header>
    <main>
    <h1>
            Welcomt to my blog!
        </h1>
        
        <section>
        <?php
        $query=$conn->prepare("SELECT * FROM blogpost ORDER BY SR_NO DESC");
        $query->execute();
        while($row=$query->fetch(PDO::FETCH_ASSOC)){
            echo " <a class='child' href='view.php?title=" . $row['title'] . "'>";
            if(!empty($row['image'])){
                echo "<img src='uploaded-images/" . $row['image'] . "'>";
            }
            echo "<div class='text'>";
            echo "<h1>" . $row['title'] . "</h1>";
            echo "<span>" .$row['date']."</span>";
            echo "<p>" . substr($row['article'],0,295).'...' . "</p>
            </div>
            </a>
            ";
        }
        $conn=null;
        ?>
        </section>
    </main>
</body>

</html>