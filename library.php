<?php
$host="localhost";
$user="root";
$pass="";
$db="library";
$con=mysqli_connect($host,$user,$pass,$db);
if($con){
	echo "ok";
}
else{
echo "DB is not connected";
}
?>