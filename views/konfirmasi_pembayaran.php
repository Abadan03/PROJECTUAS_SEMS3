<?php
include '../controllers/config.php';
// USER
if(!empty($_SESSION["username"])){
	$username = $_SESSION["username"];
	$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($result);
	$_SESSION['username'] = $row['username'];
  }
  else {
	header("Location: ../index.php");
  }
// GET DATA
$biaya = $_GET['biaya'];

// Get Image
// if(isset($_POST['submit'])) {

  
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- css style kelompok saya -->
    <link rel="stylesheet" href="../css/pemesanan.css">
    <title>Pemesanan Tiket</title>
      <!-- <script type="text/javascript" src="../controllers/token.js"></script> -->
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
              <a class="dropdown-item" href="profile.php">Pesanan Saya</a>
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
            echo("Error description: " . mysqli_error($conn));
          }
          ?> 
        </h3>
      <h1 class="display-4">Silahkan isi form untuk memenuhi syarat pembayaran</h1>
      <!-- <p class="lead">Pembelian tiket pesawat secara online</p> -->
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
          <h3>Konfirmasi Pembayaran</h3>
        </div>
        <!-- isi Informasi -->
        <form action="proses.php?biaya=<?= $biaya ?>" id="form_konfirmasi" name="form_konfirmasi" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <label for="floatingInput">Nama anda</label>
                <input type="text" class="form-control" value=<?php 
                    if(!empty($_SESSION["username"])) {
                        $nama = $_SESSION['username'];
                        echo "$nama";
                    }else {
                      echo("Error description: " . mysqli_error($conn));
                    }
                ?> id="nama" name="nama" placeholder="name@example.com" required>
            </div>
            <div class="form-floating">
                <label for="floatingPassword">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
            </div>
            <div class="form-floating">
                <label for="floatingPassword">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-floating">
                <label for="floatingPassword">Image</label>
                <input type="file" class="form-control image" id="image" name="image" accept=".jpg, .jpeg, .png" placeholder="image" required>
            </div>
            <div class="form-floating">
                <label for="floatingPassword">Biaya</label>
                <label for="floatingPassword" class="mt-5"><?php 
                  if(!empty($_SESSION["username"])) {
                  $biaya = $_GET['biaya'];
                  echo "$biaya";
                }else {
                  echo("Error description: " . mysqli_error($conn));
                }
                ?></label>
            </div>
            <button type="submit" id="submit" name="submit" form="form_konfirmasi" class="btn btn-success mt-5">
                Selesai
            </button>
        </form>
        </div>
      </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="../controllers/token.js"></script> -->
    
  </body>
</html>