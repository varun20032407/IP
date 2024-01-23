<?php include 'library.php'; 
$id=$_GET['id'];
$query="DELETE FROM books WHERE id='$id'";
$data=mysqli_query($con,$query);
if ($data)
{
    ?>
    <script type="text/javascript">
        alert("data deleted successfully");
        window.open("http://localhost/demo/view.php","_self");
        </Script>
        <?php
}
else
{
    ?>
    <script type="text/javascript">
        alert("Please try again");
</script>
<?php
}