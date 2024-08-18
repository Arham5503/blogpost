<?php
include 'header.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./style.css">
    <style>
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
            <h1>Create New Post</h1>
            <form class="post" action="write.php" method="post">
                <label for="title">Title</label>
                <input type="text" name="title" id="" placeholder="Add Title" required>
                <label for="blog"> Post</label>
                <textarea name="blog" rows="15" id="" required></textarea>
                <div>
                    <caption>2000 chracters limit:</caption>
                    <button class="btns" type="submit" name="submit">Post</button>
                </div>
            </form>
        </section>
    </main>
</body>

</html>