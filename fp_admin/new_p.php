
<?php
include '../controllers/config.php';

$nama_p = $_POST['nama_p'];
$username_p = $_POST['username_p'];
$password_p = $_POST['password_p'];
$email_p = $_POST['email_p'];



mysqli_query($conn,"INSERT INTO penumpang VALUES('','$nama_p','$username_p','$password_p', '$email_p')")or die(mysqli_error());
header("location:passenger.php");

?>

