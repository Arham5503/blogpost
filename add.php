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
</head>

<body>
    <main>
        <section>
            <h1>Create New Post</h1>
            <form class="post" action="write.php" method="post" enctype="multipart/form-data">
            <input type="date" name="date" hidden value="<?php echo date('Y-m-d'); ?>">
                <label for="title">Title</label>
                <input type="text" name="title" id="" placeholder="Add Title" required>
                <label for="blog"> Post</label>
                <textarea class="form-control" id="text" name="blog" maxlength="3000" placeholder="Type in your message"
                    rows="8"></textarea>
                <span><caption>Character Limit:</caption>    
                <span class="" id="count_message"></span></span>
                <br>
                <label for="image">Image</label>
                <input type="file" name="image">
                <div>
                    <button class="btns" type="submit" name="submit">Post</button>
                </div>
            </form>
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