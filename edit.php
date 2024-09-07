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
                        <textarea style="padding: 10px; resize: none;" class="form-control" id="text" name="article"
                            maxlength="3000" placeholder="Type in your message"
                            rows="8"><?php echo $row["article"] ?></textarea>
                        <span>
                            <caption>Character Limit:</caption>
                            <span class="" id="count_message"></span>
                        </span>
                        <br>
                        <div>
                            <button class="btns">Update</button>
                        </div>
                    </div>
                </form>
                <?php
}

?>
        </section>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var text_max = 3000;
        $('#count_message').html('0 / ' + text_max);

        $('#text').keyup(function () {
            var text_length = $('#text').val().length;
            var text_remaining = text_max - text_length;
            $('#count_message').html(text_length + ' / ' + text_max);
        });
    </script>
</body>

</html>