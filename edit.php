<?php
include 'header.php';
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
            section {
                width: 90%;
                margin: auto;
            }

            .update {
                border: 1px solid black;
            }

            .srch {
                margin: 20px 0;
                display: flex;
                flex-direction: column;
                align-items: center;

            }

            .srch input {
                width: 200px;
                height: 15px;
                padding: 5px;
                margin-right: 10px;
            }

            .result {
                display: flex;
                flex-direction: column;
                gap: 10px;
                padding: 20px;
            }

            .result input {
                height: 15px;
                padding: 5px;
            }

            .btns {
                float: right;
                border: none;
                width: 70px;
                height: 30px;
                background-color: rgb(23, 155, 174);
                border-radius: 5px;
                color: white;
                cursor: pointer;
            }
        </style>
    </head>

    <body>
        <main>
            <section>
                <h1>Edit Artical</h1>
                <form class="update" action="updatedata.php" method="post">
                    <div class="result">
                        <input type="hidden" name="sr" value="<?php echo $row["SR_NO"] ?>">
                        <label for="">Tittel</label>
                        <input type="text" name="title" id="" value="<?php echo $row["title"] ?>" required>
                        <label for="">Body of Post</label>
                        <textarea name="article" rows="15" id="" required><?php echo $row["article"] ?></textarea>
                        <div>
                            <caption>2000 chracters limit:</caption>
                            <button class="btns">Update</button>
                        </div>
                    </div>
                </form>
                <?php
}

?>
        </section>
    </main>
</body>

</html>