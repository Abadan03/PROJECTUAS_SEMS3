<?php
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>Edit Maskapai</h3>
<a class="btn" href="maskapai.php"><span class="glyphicon glyphicon-arrow-left"></span>Kembali</a>
<?php
include '../controllers/config.php';
$id=mysqli_real_escape_string($conn,$_GET['id']);
$det=mysqli_query($conn, "SELECT * FROM class where id='$id'")or die(mysqli_error());
while($d=mysqli_fetch_array($det)){ 
	?>

	<form action="maskapai_update.php" method="post">
		<table class="table">


			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>
			<tr>
				<td> No. Pesawat</td>
				<td>
					<select class="form-control" name="pesawat_id" value="<?php echo $d['pesawat_id'] ?>">
						<?php
						include "config.php";
						$query = "SELECT * FROM pesawat";
						$hasil = mysqli_query($conn, $query);
						while ($qtabel = mysqli_fetch_assoc($hasil))
						{
							echo '<option value="'.$qtabel['id'].'">'.$qtabel['tipe_pesawat'].'</option>';				
						}
						?> 
					</select > 
					
				</td>
			</tr>
			<tr>
				<td>Kategori Class</td>
				<td><input type="text" class="form-control" name="nama_class" value="<?php echo $d['nama_class'] ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Kursi</td>
				<td><input type="text" class="form-control" name="jumlah_kursi" value="<?php echo $d['jumlah_kursi'] ?>"></td>
			</tr>			

			<tr>
				<td></td>
				<td><input type="submit" name="Submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
<?php } ?>
