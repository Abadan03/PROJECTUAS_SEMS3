<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>Daftar Booking</h3>



<?php
include '../controllers/config.php';
$per_hal= 10;
$jumlah_record=mysqli_query($conn, "SELECT count(*) booking");
$jum=mysqli_fetch_array($jumlah_record);
$halaman=ceil($jum[0]/$per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class=" col-md-12">
	<table class="col-md-2">

		<tr>
			<td>Jumlah Halaman</td>
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	<a style="margin-bottom:10px" href="/.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>Cetak</a>
</div>
<form action="/.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Jadwal di sini .." aria-describedby="basic-addon1" name="cari">
	</div>
</form>
<br/>
<table class="table table-hover">
	<tr>
		<th>No</th>
		<th>ID Penumpang</th>
		<th>Kode Penerbangan</th>
		<th>Nama Lengkap</th>
		<th>Tanggal Booking</th>

		


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
		$data = mysqli_query($conn, "SELECT * FROM booking WHERE nama_lengkap like '%".$cari."%'");

	}
	// $data = mysqli_query($conn,"SELECT * FROM booking b WHERE EXISTS (SELECT * FROM penumpang k, jadwalpenerbangan l
	// 	WHERE b.jadwalpenerbangan_id = l.id AND b.penumpang_id = k.id)");
	$data = mysqli_query($conn, "SELECT * FROM `booking`");
	


	// var_dump(mysqli_fetch_array($data));
	$no = 1;
	while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $d['penumpang_id'] ?></td>
			<td><?php echo $d['jadwalpenerbangan_id'] ?></td>
			<td><?php echo $d['nama_lengkap'] ?></td>
			<td><?php echo $d['tgl_booking']; ?></td>

			<td>

				<a href="/.php?id=<?php echo $d['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='/.php?id=<?php echo $d['id']; ?>' }" class="btn btn-danger">Hapus</a>

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
	
