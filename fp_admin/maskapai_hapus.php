<?php 
include '../controllers/config.php';
$id=$_GET['id'];

$query = "DELETE FROM class WHERE id='$id'";
mysqli_query($conn,$query)or die(mysqli_error());
header("location:maskapai.php");

?>