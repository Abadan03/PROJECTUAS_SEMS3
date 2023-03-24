
<?php 
include '../controllers/config.php';

$id = $_POST['id'];
$pesawat_id = $_POST['pesawat_id'];
$nama_class = $_POST['nama_class'];
$jumlah_kursi = $_POST['jumlah_kursi'];


$query ="UPDATE class SET pesawat_id='$pesawat_id',nama_class='$nama_class', jumlah_kursi='$jumlah_kursi' WHERE id=$id";
mysqli_query($conn, $query)or die(mysqli_error());
header("location:maskapai.php");

?>
