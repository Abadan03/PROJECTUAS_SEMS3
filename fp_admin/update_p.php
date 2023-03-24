
<?php 
include '../controllers/config.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$biaya = $_POST['biaya'];
$order_id = $_POST['order_id'];
$transaction_status = $_POST['transaction_status'];


$query ="UPDATE konfirmasi SET nama='$nama',biaya='$biaya', order_id='$order_id', transaction_status='$transaction_status' WHERE id='$id'";
mysqli_query($conn, $query)or die(mysqli_error());
header("location:konfirmasi.php");

?>
