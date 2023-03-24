<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>Konfirmasi</h3>


<?php
include '../controllers/config.php';
$per_hal= 10;
$jumlah_record=mysqli_query($conn, "SELECT COUNT(*) FROM konfirmasi");
$jum=mysqli_fetch_array($jumlah_record);
$halaman=ceil($jum[0]/$per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">

		<tr>
			<td>Jumlah Halaman</td>
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
</div>
<form action="cari_p.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Passenger di sini .." aria-describedby="basic-addon1" name="cari">
	</div>
</form>
<br/>
<table class="table table-hover">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Biaya</th>
		<th>Order_id</th>
		<th>transaction_status</th>
        
		<th>email</th>
		

		<th class="col-md-2">Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>


	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($conn, "SELECT * FROM penumpang WHERE nama_p like '%".$cari."%'");

	}else{
		$data = mysqli_query($conn,"SELECT * FROM `konfirmasi`");
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
        // $d_image = addslashes($d['image']);
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $d['nama'] ?></td>
			<td><?php echo $d['alamat'] ?></td>
			<td><?php echo $d['biaya'] ?></td>
			<td><?php echo $d['order_id'] ?></td>
			<td><?php if($d['transaction_status'] == 1) {
                echo "pending";
            }else {
                echo "sukses";
            } ?></td>
			<td><?php echo $d['email'] ?></td>
			

			<td>

				<a href="edit_passenger.php?id=<?php echo $d['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_konfirmasi.php?id=<?php echo $d['id']; ?>' }" class="btn btn-danger">Hapus</a>
                <a href="konfirmasi_status.php?id=<?php echo $d['id']; ?>" class="btn btn-warning">
                    konfirmasi
                </a>

			</td>


		</tr>
	<?php } ?>

	<ul class="pagination">
		<?php
		for($x=1;$x<=$halaman;$x++){
			?>
			<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
			<?php
		}
		?>
	</ul>
	<!-- form input -->
	
