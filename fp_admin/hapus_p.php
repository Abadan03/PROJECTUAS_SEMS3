<?php 
include '../controllers/config.php';
$id=$_GET['id'];

$query = "DELETE FROM penumpang WHERE id='$id'";
mysqli_query($conn,$query)or die(mysqli_error());
header("location:passenger.php");

?>