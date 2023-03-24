<?php
include '../controllers/config.php';


$id = $_GET['id'];
$status = 'Selesai';
$status_change = 0;

// $sql = "UPDATE konfirmasi WHERE id = '$id', set transaction_status='$status_change'";
$sql = "UPDATE konfirmasi SET transaction_status='$status_change' where id='$id'";
$result = mysqli_query($conn, $sql);
$test = true;
if($test==true) {
    echo "<script>alert('apakah anda yakin user sudah membayarnya?');</script>";
    if($result) {
        echo "<script>window.alert('Transaksi telah Selesai');window.location.href='konfirmasi.php';</script>";
    }
} else {
    echo "<script>window.alert('Terjadi ERROR!!');window.location.href='konfirmasi.php';</script>";
}
?>
