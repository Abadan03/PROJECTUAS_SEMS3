
<?php
include '../controllers/config.php';

$pesawat_id = $_POST['pesawat_id'];
$tgl_keberangkatan = $_POST['tgl_keberangkatan'];
$asal_kota = $_POST['asal_kota'];
$kota_tujuan= $_POST['kota_tujuan'];
$jam_berangkat= $_POST['jam_berangkat'];
$jam_tiba= $_POST['jam_tiba'];
$bandara_tujuan= $_POST['bandara_tujuan'];
$harga_tiket= $_POST['harga_tiket'];




mysqli_query($conn,"INSERT INTO jadwalpenerbangan VALUES('','$pesawat_id','$tgl_keberangkatan','$asal_kota','$kota_tujuan','$jam_berangkat','$jam_tiba','$bandara_tujuan','$harga_tiket')")or die(mysqli_error());
header("location:jadwal.php");

?>
