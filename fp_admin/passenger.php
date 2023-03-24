<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span> Passenger View</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Add Pasengger</button>
<br/>


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
		<th>Nama Penumpang</th>
		<th>Biaya</th>
		<th>Order Id</th>
		<th>Status</th>
		<th>Cetak</th>

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
		$data = mysqli_query($conn, "SELECT * FROM konfirmasi WHERE nama like '%".$cari."%'");

	}else{
		$num = 0;
		$data = mysqli_query($conn,"SELECT * FROM konfirmasi WHERE transaction_status='$num'");
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
		$status = $d['transaction_status'];
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $d['nama'] ?></td>
			<td><?php echo $d['biaya'] ?></td>
			<td><?php echo $d['order_id'] ?></td>
			<td><?= $status == 0 ? 'Success' : 'error'?></td>
			<td>
				<button class='btn btn-secondary'>
					<a href='../fp_admin/cetak_konfirmasi.php?id=<?php echo $d['id'] ?>'>
                    Cetak
                    </a>
				</button>
			</td>
			<td>

				<a href="edit_passenger.php?id=<?php echo $d['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_p.php?id=<?php echo $d['id']; ?>' }" class="btn btn-danger">Hapus</a>

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
	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Tambah Penumpang Baru</h4>
				</div>
				<div class="modal-body">
					<form action="new_p.php" method="post">
						<div class="form-group">
							<label>Nama Penumpang</label>
							<input name="nama_p" type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label>Username</label>
							<input name="username_p" type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password_p" type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label>Email</label>
							<input name="email_p" type="text" class="form-control" >
						</div>
						


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
