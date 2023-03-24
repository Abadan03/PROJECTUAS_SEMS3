<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT </title>
</head>
<body>

	<center>

		<h2>DATA LAPORAN</h2>
		

	</center>

	<?php 
	include '../controllers/config.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th width="1%">No. Pesawat</th>
			<th>Tipe. Pesawat</th>
			<th>Kategori Class</th>
			<th width="2%">Jumlah Kursi</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($conn,"SELECT * FROM class, pesawat WHERE class.pesawat_id = pesawat.id");
		while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['pesawat_id'] ?></td>
				<td><?php echo $data['tipe_pesawat'] ?></td>
				<td><?php echo $data['nama_class'] ?></td>
				<td><?php echo $data['jumlah_kursi'] ?></td>
			</tr>
			<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>