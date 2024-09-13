<?php

$conn = new PDO("mysql:host=localhost;dbname=myblog", "root", "");
$title = $_GET['title'];
$query = $conn->prepare("SELECT * FROM blogpost WHERE title=?");
$query->bindParam(1, $title);
$query->execute();
$sr;
$urltitle;
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $sr = $row['SR_NO'];
    $urltitle = $row['title']
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
                font-size: 2.1rem;
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
                height: auto;
                padding: 20px 0;
            }

            main h1 {
                margin: 10px 0;
            }

            section {
                width: 80%;
                margin: auto;
                padding: 10px;
            }

            img {
                width: 450px;
                height: 400px;
            }

            span {
                border-radius: 6px;
                width: 75px;
                padding: 3px;
                color: white;
                margin: 5px 0;
                background-color: rgb(23, 155, 174);
            }

            .commentSection {
                display: flex;
                max-height: 50vh;
            }

            .flex {
                overflow-y: auto;
                flex: 1 1 30rem;
            }

            textarea {
                resize: none;
            }

            .cmnt {
                display: flex;
                flex-direction: column;
                padding: 10px;
                row-gap: 5px;
            }

            input,
            textarea {
                width: 300px;
                border: none;
                outline: none;
                padding: 5px;
                border-bottom: 1px solid black;
            }

            .submit {
                float: right;
                border: none;
                width: 90px;
                height: 30px;
                background-color: rgb(23, 155, 174);
                border-radius: 5px;
                color: white;
                cursor: pointer;
            }

            .flex-child {
                width: 70%;
                margin: 10px;
                padding: 5px;
                border-radius: 10px;
                box-shadow: 5px 5px 3px 1px rgba(0, 0, 0, 0.2);
                cursor: pointer;
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
                <article class="content">
                    <?php
                    echo "<div class='child'>";
                    echo "<h1>" . $row['title'] . "</h1>";
                    echo "<span> Post Date:" . $row['date'] . "</span> <br>";
                    if (!empty($row['image'])) {
                        echo "<img src='uploaded-images/" . $row['image'] . "'>";
                    }
                    echo "<p>" . $row['article'] . "</p>";
}
?>
            </article>
            <section>
                <h1>Leave a comment</h1>
                <div class="commentSection" action="">
                    <div class="flex">
                        <?php
                        $query2 = $conn->prepare("SELECT * FROM comment Where postLink=? ORDER BY date DESC");
                        $query2->bindParam(1, $sr);
                        $query2->execute();
                        while ($row = $query2->fetch(PDO::FETCH_ASSOC)) {
                            if (!empty($row)) {
                                echo "<div class='flex-child'> ";
                                echo "<p><b>" . $row['username'] . "</b></p>";
                                echo "<p>" . $row['message'] . "</p> 
                            </div>";
                            } else {
                                echo "No Record Found";
                            }
                        }
                        $conn = null;
                        ?>
                    </div>
                    <div class="flex">
                        <form class="cmnt" action="comment.php" method="post">

                            <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
                            <input type="hidden" name="urltitle" value="<?php echo $urltitle; ?>">
                            <input type="hidden" name="sr" value="<?php echo $sr; ?>">
                            <label for="username">Username:</label>
                            <input type="text" name="username">
                            <label for="email">Email:</label>
                            <input type="text" name="email">
                            <label for="msg">Message:</label>
                            <textarea name="msg" rows="5" id=""></textarea>
                            <input class="submit" type="submit" name="submit" value="submit"></input>
                        </form>
                    </div>
            </section>
        </section>
    </main>
</body>

</html>