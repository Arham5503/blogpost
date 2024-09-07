<?php

$conn = new PDO("mysql:host=localhost;dbname=myblog", "root", "");
$title = $_GET['title'];
$query = $conn->prepare("SELECT * FROM blogpost WHERE title=?");
$query->bindParam(1, $title);
$query->execute();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        nav {
            height: 60px;
            background-color: rgb(255, 131, 67);
        }

        h1 {
            font-family: Arial, Helvetica, sans-serif;

        }

        nav h1 {
            color: white;
            margin: 0;
            line-height: 60px;
            padding-left: 10px;
        }

        main {
            width: 90%;
            margin: auto;
        }

        main h1 {
            margin: 10px 0;
        }

        section {
            width: 90%;
            margin: auto;
            padding: 10px;
        }
        img {
            width: 450px;
            height: 400px;
        }

        span {
            border-radius: 6px;
            width:75px;
            padding: 3px;
            color: white;
            margin: 5px 0;
            background-color: rgb(23, 155, 174);
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <h1>BlogSpot</h1>
        </nav>
    </header>
    <main>
        <section>
            <form class="content">
                <?php
                    echo "<div class='child'>";
                    echo "<h1>" . $row['title'] . "</h1>";
                    echo "<span> Post Date:" . $row['date'] . "</span> <br>";
                    if (!empty($row['image'])) {
                        echo "<img src='uploaded-images/" . $row['image'] . "'>";
                    }
                    echo "<p>" . $row['article'] . "</p>";
                }
                $conn = null;
                ?>
            </form>
        </section>
    </main>
</body>

</html>