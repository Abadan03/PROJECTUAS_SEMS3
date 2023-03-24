<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT </title>
</head>
<body>

	<center>

		<h2>SCHEDULE</h2>
		

	</center>

	<?php 
	include '../controllers/config.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th width="1%">No. Pesawat</th>
			<th>Tipe. Pesawat</th>
			<th>Tanggal Keberangkatan</th>
			<th>Asal Kota</th>
			<th>Kota Tujuan</th>
			<th>Jam Berangkat</th>
			<th>Jam Tiba</th>
			<th>Bandara Tujuan</th>
			<th>Harga Tiket</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($conn,"SELECT * FROM jadwalpenerbangan, pesawat WHERE jadwalpenerbangan.pesawat_id = pesawat.id");
		while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $data['pesawat_id'] ?></td>
				<td><?php echo $data['tipe_pesawat'] ?></td>
				<td><?php echo date($data['tgl_keberangkatan'])?></td>
				<td><?php echo $data['asal_kota'] ?></td>
				<td><?php echo $data['kota_tujuan'] ?></td>
				<td><?php echo date('h:m:s', strtotime($data['jam_berangkat'])); ?></td>
				<td><?php echo date('h:m:s', strtotime($data['jam_tiba'])); ?></td>
				<td><?php echo $data['bandara_tujuan'] ?></td>
				<td><?php echo $data['harga_tiket'] ?>,-</td>
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