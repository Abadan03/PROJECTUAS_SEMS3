
<?php
include '../controllers/config.php';

$pesawat_id = $_POST['pesawat_id'];
$nama_class = $_POST['nama_class'];
$jumlah_kursi = $_POST['jumlah_kursi'];



mysqli_query($conn,"INSERT INTO class VALUES('','$pesawat_id','$nama_class','$jumlah_kursi')")or die(mysqli_error());
header("location:maskapai.php");

?>

