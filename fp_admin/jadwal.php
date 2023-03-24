<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span> Schedule Landing</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Schedule</button>
<br/>


<?php
include '../controllers/config.php';
$per_hal= 10;
$jumlah_record=mysqli_query($conn, "SELECT count(*) FROM jadwalpenerbangan");
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
	<a style="margin-bottom:10px" href="cetak_jadwal.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>Cetak</a>
</div>
<form action="jadwal_cari.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Jadwal di sini .." aria-describedby="basic-addon1" name="cari">
	</div>
</form>
<br/>
<table class="table table-hover">
	<tr>
		<th>No</th>
		<th>No. Pesawat</th>
		<th>Tipe Pesawat</th>
		<th>Tanggal Keberangkatan</th>
		<th>Dari</th>
		<th>Tujuan</th>
		<th>Jam Berangkat</th>
		<th>Jam Tiba</th>
		<th>Bandara Tujuan</th>
		<th>Harga Tiket</th>


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
		$data = mysqli_query($conn,"SELECT * FROM  pesawat INNER JOIN jadwalpenerbangan ON pesawat.id = jadwalpenerbangan.pesawat_id");
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $d['pesawat_id'] ?></td>
			<td><?php echo $d['tipe_pesawat'] ?></td>
			<td><?php echo date($d['tgl_keberangkatan'])?></td>
			<td><?php echo $d['asal_kota'] ?></td>
			<td><?php echo $d['kota_tujuan'] ?></td>
			<td><?php echo date('h:m:s', strtotime($d['jam_berangkat'])); ?></td>
			<td><?php echo date('h:m:s', strtotime($d['jam_tiba'])); ?></td>
			<td><?php echo $d['bandara_tujuan'] ?></td>
			<td><?php echo $d['harga_tiket'] ?>,-</td>
			<td>

				<a href="jadwal_edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='jadwal_hapus.php?id=<?php echo $d['id']; ?>' }" class="btn btn-danger">Hapus</a>

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
					<h4 class="modal-title">Tambah Schedule Baru</h4>
				</div>
				<div class="modal-body">
					<form action="jadwal_baru.php" method="post">
						<!-- ComboBox ambil dari database -->
						<div class="form-group">
							<label>No. Pesawat</label>
							<div>
								<select id="pesawat_id" name="pesawat_id" class="form-control">
									<?php 
									include '../controllers/config.php';
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
						</div>

						<div class="form-group">
							<label>Tanggal Keberangkatan</label>
							<input name="tgl_keberangkatan" type="date" class="form-control" >
						</div>
						<div class="form-group">
							<label>Dari</label>
							<div>
								<select id="asal_kota" name="asal_kota" class="form-control">
									<option value="Denpasar">Denpasar,Bali</option>
									<option value="Juanda">Juanda,Surabaya</option>
									<option value="Lombok">Lombok,NTB</option>
									<option value="LabuanBajo">Labuan Bajo,NTT</option>
									<option value="Solo">Solo,Jawa Tengah</option>	
									<option value="Jakarta">Jakarta,DKI Jakarta</option>					
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>Tujuan</label>
							<div>
								<select id="kota_tujuan" name="kota_tujuan" class="form-control">
									<option value="Denpasar">Denpasar,Bali</option>
									<option value="Juanda">Juanda,Surabaya</option>
									<option value="Lombok">Lombok,NTB</option>
									<option value="LabuanBajo">Labuan Bajo,NTT</option>
									<option value="Solo">Solo,Jawa Tengah</option>	
									<option value="Jakarta">Jakarta,DKI Jakarta</option>					
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>Jam Keberangkatan</label>
							<input name="jam_berangkat" type="datetime-local" class="form-control" >
						</div>
						<div class="form-group">
							<label>Jam Tiba</label>
							<input name="jam_tiba" type="datetime-local" class="form-control" >
						</div>
						<div class="form-group">
							<label>Bandara Tujuan</label>
							<div>
								<select id="bandara_tujuan" name="bandara_tujuan" class="form-control">
									<option value="IGNR">I Gusti Ngurah Rai</option>
									<option value="JUANDA">Juanda</option>
									<option value="ZAM"> Zainuddin Abdul Madjid</option>
									<option value="ETK">El Tari Kupang</option>
									<option value="Soa">Soa Bajawa</option>	
									<option value="AS">Adi Soemarmo</option>
									<option value="ASo">Adi Soecipto</option>					
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>Harga Tiket</label>
							<input name="harga_tiket" type="text" class="form-control" >
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
