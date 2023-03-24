<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span> Data Pesawat</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Pesawat</button>
<br/>


<?php
include '../controllers/config.php';
$per_hal= 10;
// $join = "select * from post join user on user.iduser = post.iduser join kategori on kategori.idkategori = post.idkategori";
$jumlah_record=mysqli_query($conn, "SELECT count(*) FROM pesawat INNER JOIN class on pesawat.id =class.pesawat_id");
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
	<a style="margin-bottom:10px" href="maskapai_cetak.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
</div>
<form action="pesawat_cari.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Pesawat di sini .." aria-describedby="basic-addon1" name="cari">
	</div>
</form>
<br/>
<table class="table table-hover">
	<tr>
		<th>ID</th>
		<th>No. Pesawat</th>
		<th>Tipe. Pesawat</th>
		<th>Kategori Class</th>
		<th>Jumlah Kursi</th>


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
		$data = mysqli_query($conn, "SELECT * FROM pesawat WHERE tipe_pesawat like '%".$cari."%'");

	}else{
		$data = mysqli_query($conn,"SELECT * FROM pesawat INNER JOIN class on pesawat.id =class.pesawat_id");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $d['pesawat_id'] ?></td>
			<td><?php echo $d['tipe_pesawat'] ?></td>
			<td><?php echo $d['nama_class'] ?></td>
			<td><?php echo $d['jumlah_kursi'] ?></td>

			<td>

				<a href="maskapai_edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='maskapai_hapus.php?id=<?php echo $d['id']; ?>' }" class="btn btn-danger">Hapus</a>

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
								<h4 class="modal-title">Tambah Maskapai Baru</h4>
							</div>
							<div class="modal-body">
								<form action="maskapai_baru.php" method="post">
									<!-- ComboBox ambil dari database -->
									<div class="form-group">
										<label>No. Pesawat</label>
										<div>
											<select id="pesawat_id" name="pesawat_id" class="form-control">
												<?php 
												include 'config.php';
												$sql="SELECT * FROM pesawat";

												$hasil=mysqli_query($conn,$sql);
												$no=0;
												while ($file = mysqli_fetch_array($hasil)) {
													$no++;	

													?>
													<option value="<?php echo $file['id'];?>"><?php echo $file['tipe_pesawat'];?></option>			
													<?php 
												}
												?>
											</select> 
										</div>


										<div class="form-group">
											<label>Kategori Class</label>
											<input name="nama_class" type="text" class="form-control" placeholder="Tambah Class ..">
										</div>
										<div class="form-group">
											<label>Jumlah Kursi</label>
											<input name="jumlah_kursi" type="text" class="form-control" placeholder="Tambah Kursi ..">
										</div>



									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
										<input type="submit" class="btn btn-primary" value="Simpan">
									</div>
								</form>
							</div>
						</div>
					</div>
