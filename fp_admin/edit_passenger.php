<?php
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>Edit Maskapai</h3>
<a class="btn" href="konfirmasi.php"><span class="glyphicon glyphicon-arrow-left"></span>Kembali</a>
<?php
include '../controllers/config.php';
$id=mysqli_real_escape_string($conn,$_GET['id']);
$det=mysqli_query($conn, "SELECT * FROM konfirmasi where id='$id'")or die(mysqli_error());
while($d=mysqli_fetch_array($det)){ 
	?>

	<form action="update_p.php" method="post">
		<table class="table">


			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Penumpang</td>
				<td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Biaya</td>
				<td><input type="text" class="form-control" name="biaya" value="<?php echo $d['biaya'] ?>"></td>
			</tr>
			<tr>
				<td>order_id</td>
				<td><input type="text" class="form-control" name="order_id" value="<?php echo $d['order_id'] ?>"></td>
			</tr>
			<tr>
				<td>transaction_status</td>
				<td><input type="text" class="form-control" name="transaction_status" value="<?php echo $d['transaction_status'] ?>"></td>
			</tr>			

			<tr>
				<td></td>
				<td><input type="submit" name="Submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
<?php } ?>
