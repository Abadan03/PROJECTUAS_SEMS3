
<?php 
include '../controllers.config.php';

$id = $_POST['id'];
$pesawat_id = $_POST['pesawat_id'];
$tgl_keberangkatan = $_POST['tgl_keberangkatan'];
$asal_kota = $_POST['asal_kota'];
$kota_tujuan= $_POST['kota_tujuan'];
$jam_berangkat= $_POST['jam_berangkat'];
$jam_tiba= $_POST['jam_tiba'];
$bandara_tujuan= $_POST['bandara_tujuan'];
$harga_tiket= $_POST['harga_tiket'];


$query ="UPDATE jadwalpenerbangan SET pesawat_id='$pesawat_id',tgl_keberangkatan='$tgl_keberangkatan', asal_kota='$asal_kota', kota_tujuan='$kota_tujuan',jam_berangkat='$jam_berangkat' ,jam_tiba='$jam_tiba', bandara_tujuan='$bandara_tujuan', harga_tiket='$harga_tiket'  WHERE id=$id";
mysqli_query($conn, $query)or die(mysqli_error());
header("location:jadwal.php");

?>
