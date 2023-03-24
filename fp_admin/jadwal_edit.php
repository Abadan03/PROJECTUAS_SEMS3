<?php
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>Edit Jadwal</h3>
<a class="btn" href="jadwal.php"><span class="glyphicon glyphicon-arrow-left"></span>Kembali</a>
<?php
include '../controllers/config.php';
$id=mysqli_real_escape_string($conn,$_GET['id']);
$det=mysqli_query($conn, "SELECT * FROM jadwalpenerbangan WHERE id='$id'")or die(mysqli_error());
while($d=mysqli_fetch_array($det)){ 
	?>

	<form action="jadwal_update.php" method="post">
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
				<td>Tanggal Keberangkatan</td>
				<td><input type="date" class="form-control" name="tgl_keberangkatan" value="<?php echo $d['tgl_keberangkatan'] ?>"></td>
			</tr>
			<tr>
				<td>Dari</td>
				<td><input type="text" class="form-control" name="asal_kota" value="<?php echo $d['asal_kota'] ?>"></td>
			</tr>	
			<tr>
				<td>Tujuan</td>
				<td><input type="text" class="form-control" name="kota_tujuan" value="<?php echo $d['kota_tujuan'] ?>"></td>
			</tr>			
			<tr>
				<td>Jam Keberangkatan</td>
				<td><input type="datetime-local" class="form-control" name="jam_berangkat" value="<?php echo $d['jam_berangkat'] ?>"></td>
			</tr>	
			<tr>
				<td>Jam Tiba</td>
				<td><input type="datetime-local" class="form-control" name="jam_tiba" value="<?php echo $d['jam_tiba'] ?>"></td>
			</tr>	
			<tr>
				<td>Bandara Tujuan</td>
				<td><input type="text" class="form-control" name="bandara_tujuan" value="<?php echo $d['bandara_tujuan'] ?>"></td>
			</tr>
			<tr>
				<td>Harga Tiket</td>
				<td><input type="text" class="form-control" name="harga_tiket" value="<?php echo $d['harga_tiket'] ?>"></td>
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
<?php } ?>
