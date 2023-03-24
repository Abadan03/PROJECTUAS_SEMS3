<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT </title>
</head>
<body>

	<center>

		<h2>Cetak Tiket</h2>
		

	</center>

	<?php 
	include '../controllers/config.php';
	?>

	<table border="1" style="width: 100%">
		<?php 
		$no = 1;
        $id = $_GET['id']; 
		$sql = mysqli_query($conn,"SELECT * FROM konfirmasi WHERE id='$id'");
		while($data = mysqli_fetch_array($sql)){
			?>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Biaya</th>
            <th>Order_id</th>
            <th>transaction_status</th>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $data['nama'] ?></td>
				<td><?php echo $data['alamat'] ?></td>
				<td><?php echo $data['email'] ?></td>
				<td><?php echo $data['biaya'] ?></td>
				<td><?php echo $data['order_id'] ?></td>
				<td><?php if($data['transaction_status'] == 1) {
                    echo "pending";
                }else {
                    echo "sukses";
                } ?>
                </td>
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