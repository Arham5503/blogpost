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
        .btns a{
            text-decoration: none;
            color: white;
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
                    echo "<p>" . $row['article'] . "</p>";
                    ?>
                    <div class="scndChild">
                        <button class="btns" onclick="return del()"><a href="delete-inline.php?title=<?php echo $row["title"]?>">Delete</a></button>
                        <button class="btns"><a href="edit.php?title=<?php echo $row["title"]?>">Edit</a></button>
                    </div>
                    </div>
                    <?php
                }
                $con = null;
                ?>
            </form>
        </section>
    </main>
    <script>
        function del(){
            return confirm("Are You Sure??");
        }
    </script>
</body>

</html>
