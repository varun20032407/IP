<?php include 'library.php'; ?>
<a href="index.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="10px">
    <tr>
        <th>bookid</th>
        <th>booktitle</th>
        <th>author</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    $query="SELECT * FROM books";
    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);
    if ($result) {
        while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $row['bookid']; ?></td>
                <td><?php echo $row['booktitle']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><a href="update.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="5">No Records Found</td>
        </tr>
        <?php
    }

    // Close the database connection
    mysqli_close($con);
    ?>
</table>