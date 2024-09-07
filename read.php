<?php
include 'header.php';
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

        section {
            width: 90%;
            margin: auto;
        }

        .content {
            border: 1px solid black;
            padding: 10px;
        }

        .child {
            border-bottom: 1px solid red;
            padding: 10px;
            display: flex;
            flex-direction: column;
        }

        .scndChild button {
            margin: 0 10px;
        }

        .child h1 {
            margin: 10px 0;
        }

        .child p {
            margin: 10px 0;
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

        .btns a {
            text-decoration: none;
            color: white;
        }

        img {
            width: 500px
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
    <main>
        <section>
            <h1>Recent Blogs</h1>
            <form class="content">
                <?php
                $conn = new PDO("mysql:host=localhost;dbname=myblog", "root", "");
                $query = $conn->prepare("SELECT * FROM blogpost ORDER BY Sr_No DESC");
                $query->execute();
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='child'>";
                    echo "<h1>" . $row['title'] . "</h1>";
                    echo "<span>" . $row['date'] . "</span>";
                    if (!empty($row['image'])) {
                        echo "<img src='uploaded-images/" . $row['image'] . "'>";
                    }
                    echo "<p>" . $row['article'] . "</p>";
                    ?>
                    <div class="scndChild">
                        <button class="btns" onclick="return del()"><a
                                href="delete-inline.php?SR_NO=<?php echo $row['SR_NO'] ?>">Delete</a></button>
                        <button class="btns"><a href="edit.php?title=<?php echo $row['title'] ?>">Edit</a></button>
                    </div>
                    </div>
                    <?php
                }
                $conn = null;
                ?>
            </form>
        </section>
    </main>
    <script>
        function del() {
            return confirm("Are You Sure??");
        }
    </script>
</body>

</html>