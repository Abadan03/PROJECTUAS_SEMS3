<?php
include '../controllers/config.php';

if(!empty($_SESSION["username"])){
	$username = $_SESSION["username"];
	$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($result);
	$_SESSION['username'] = $row['username'];
  }
  else {
	header("Location: ../logout.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>

</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="/" class="navbar-brand">ADMIN MODE</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class='glyphicon glyphicon-comment'></span>  Pesan</a></li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Admin<span class="glyphicon glyphicon-user"></span></a></li>
					
				</ul>
			</div>
		</div>
	</div>

	<!-- modal input -->
	<div id="modalpesan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Pesan Notification</h4>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</div>

			</div>
		</div>
	</div>

	<div class="col-md-2">
		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>
			<li><a href="maskapai.php"><span class="glyphicon glyphicon-plane"></span>  Maskapai </a></li>
			<li><a href="jadwal.php"><span class="glyphicon glyphicon-plane"></span>  Jadwal Penerbangan </a></li>
			<li><a href="passenger.php"><span class="glyphicon glyphicon-plane"></span>  Passenger </a></li>
			<li><a href="konfirmasi.php"><span class="glyphicon glyphicon-plane"></span>  Konfirmasi </a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
		</ul>
	</div>	
	
	<div class="col-md-10">	
		
</body>
</html>
	