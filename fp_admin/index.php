<?php include 'header.php'; ?>
<?php include '../controllers/config.php' ?>

<?php 
	// cek apakah yang mengakses halaman ini sudah login
	
	if(!empty($_SESSION["username"])){
		$username = $_SESSION["username"];
		$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
	  }
	  else {
		header("Location: ../index.php");
	  }
 
?>
	<!-- Dashboard -->
	<div class="col-md-10">
		<div class="col-md-10">
			<h3>Selamat datang di</h3>	
			<h3>Airplane Ticketing</h3>
		</div>
		<?php 
		$tampil=mysqli_query($conn,"SELECT * FROM `tb_user` WHERE level='user' ORDER BY `id` DESC");
		$total=mysqli_num_rows($tampil);
		?>
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3><?php echo $total; ?></h3>
					<p>Passenger</p>
				</div>
				<div class="icon">
					<i class="fa fa-user"></i>
				</div>
				<a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><!-- ./col -->
		<?php 
		$tampil=mysqli_query($conn,"SELECT * FROM `jadwalpenerbangan` ORDER BY `id` DESC");
		$total=mysqli_num_rows($tampil);
		?>
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3><?php echo $total; ?></h3>
					<p>Jadwal Penerbangan Terbaru</p>
				</div>
				<div class="icon">
					<i class="fa fa-user"></i>
				</div>
				<a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><!-- ./col -->
		<?php 
		$tampil=mysqli_query($conn,"SELECT * FROM `konfirmasi` ORDER BY `id` DESC");
		$total=mysqli_num_rows($tampil);
		?>
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3><?php echo $total; ?></h3>
					<p>Daftar Booking</p>
				</div>
				<div class="icon">
					<i class="fa fa-user"></i>
				</div>
				<a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><!-- ./col -->
		<?php 
		$tampil=mysqli_query($conn,"SELECT * FROM `pesawat` ORDER BY `id` DESC");
		$total=mysqli_num_rows($tampil);
		?>
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3><?php echo $total; ?></h3>
					<p>Maskapai</p>
				</div>
				<div class="icon">
					<i class="fa fa-user"></i>
				</div>
				<a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><!-- ./col -->

	</div>
	
	