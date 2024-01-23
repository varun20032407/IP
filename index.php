<?php include 'library.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div>
            <form action="" method="POST">
                <input type="number" name="bookid" placeholder="bookid"> <br><br>
                <input type="text" name="booktitle" placeholder="booktitle"> <br><br>
                <input type="text" name="author" placeholder="author"> <br><br>
                <input type="submit" name="save_btn" value="save"> <br><br>
                <button><a href="view.php">Display</a></button>

            </form>
        </div>
        <?php
        if (isset($_POST['save_btn'])) {
            $bookid = $_POST['bookid'];
            $booktitle = $_POST['booktitle'];
            $author = $_POST['author'];
            $query = "INSERT INTO books (bookid,booktitle,author) VALUES ('$bookid','$booktitle','$author')";
            $data = mysqli_query($con, $query);
            if ($data) {
                ?>
                <script type="text/javascript">
                    alert("Data Saved Successfully");
                </script>
                <?php
            }
            else {
                ?>
                <script type="text/javascript">
                    alert("Please try again");
                </script>
                <?php
            }
        }
        ?>
    </body>
</html>