<?php
include '../controllers/config.php';
// USER

	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
// GET DATA
if(isset($_POST['submit'])) {
  $dari = $_POST['dari'];
  $tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
  $jumlah_kursi = $_POST['jumlah_kursi'];
  $tujuan = $_POST['tujuan'];
  $kelas = $_POST['kelas'];

  $query = "SELECT * FROM Customers
  WHERE CustomerName LIKE '%or%';";
  // $result = mysqli_query($conn, $query);
  $test = true;
  if($test) {
    // echo "<script>alert('error')</script>";
    // mysqli_query($conn, $query);
    header('Location: showdata.php');
    echo "<script>alert('data berhasil ditambahkan')</script>";
  }else {
    echo("Error description: " . mysqli_error($con));
  }
  
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- css style kelompok saya -->
    <link rel="stylesheet" href="../css/pemesanan.css">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="../css/jadwal.css">

  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="navbar-brand" href="#"><img src="../image-pemesanan/logo-pw.png" alt="logo-bos"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto"> <!--margin left auto (ml)-->
          <a class="nav-link active" href="#">Pemesanan</a>
          <a class="nav-link" href="#">Pembayaran</a>
          <a class="nav-link" href="showdata.php">Cari Jadwal</a>
          <a class="nav-link" href="#">Cetak</a>
          <a class="nav-link" href="../index.php">home</a>
          <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profile
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="history.php">Pesanan Saya</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../logout.php">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- navbar end -->
  <!-- banner start -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h3 class="display-4">
          <?php
          if(!empty($_SESSION["username"])) {
              $nama = $_SESSION['username'];
              echo "<p>Hello $nama</p>";
          }else {
            echo("Anda belum Melakukan: " . mysqli_error($conn));
          }
          ?> 
        </h3>
      <h1 class="display-4">Selamat Datang di Daftar pesanan Anda</h1>
      <p class="lead">Pembelian tiket pesawat secara online</p>
    </div>
  </div>
  <!-- banner end -->
  <!-- form-pemesanan -->
  <div class="container">
    <!-- panel-content -->
    <div class="row-out">
      <div class="col-lg form-pemesanan">
        <div class="tittle-travel">
          <img src="../image-pemesanan/icon plane.png" alt="">
          <h3>Pilih Tiket Perjalanan Anda</h3>
        </div>
          <form method="post" id="form-pemesanan" name="form-pemesanan">
            <div class="row">
              <div class="col-lg-4"> <!--form start-->
                <div class="travel-select">
                  <h3>Dari</h3>
                  <select class="form-select" name="dari" id="dari">
                    <!-- <option value="default">Pilih Keberangkatan</option> -->
                    <option value="Surabaya">Surabaya</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Makassar">Makassar</option>
                    <option value="Medan">Medan</option>
                  </select>
                </div>
              </div>
              
              <div class="col-lg-4">
                <div class="travel-select">
                  <h3>Tanggal Keberangkatan</h3>
                  <div>
                    <input type="date" name="tanggal_keberangkatan" id="tanggal_keberangkatan" class="form-control" data-toggle="datepicker" required>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="travel-select">
                  <h3>Jumlah Kursi</h3>
                  <select class="form-select" name="jumlah_kursi" id="jumlah_kursi">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-4"> <!--form start-->
                <div class="travel-select">
                  <h3>Ke</h3>
                  <select class="form-select" name="tujuan" id="tujuan">
                    <!-- <option value="defaul">Pilih Tujuan</option> -->
                    <option value="Surabaya">Surabaya</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Makassar">Makassar</option>
                    <option value="Medan">Medan</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="travel-select">
                  <h3>Kelas</h3>
                  <select class="form-select" name="kelas" id="kelas">
                    <!-- <option value="defaul">Pilih Kelas Penerbangan</option> -->
                    <option value="First Class">A</option>
                    <option value="Eksekutif">B</option>
                    <option value="Bussiness">C</option>
                  </select>
                </div>
              </div>

              <!-- search button -->
              <div class="col-lg">
                <div class="travel-select">
                  <button type="submit" name="submit" id="submit" class="button-search" form="form-pemesanan">
                    <img src="../image-pemesanan/search-icon.png" alt="search"> Cari Tiket
                  </button>
                </div>
              </div><!--search button end-->
                <!-- form end -->
          </form>
          <!-- Form data -->
          
        </div>
    </div>
      
  </div>

  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>