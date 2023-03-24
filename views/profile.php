<?php
include '../controllers/config.php';
// USER
if(!empty($_SESSION["username"])){
  $id = $_SESSION["username"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$id'");
  $row = mysqli_fetch_assoc($result);
  $_SESSION['username'] = $row['username'];
}
else {
  header("Location: ../index.php");
}

// GET DATA
// $biaya = $_GET['biaya'];

// Pending function



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <a class="nav-link" href="">Cetak</a>
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
      <h1 class="display-4">Profile</h1>
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
          <h3>Daftar isi Pembayaran anda</h3>
          
        </div>
        <h4>
          <?php 
            if(isset($_POST['history'])) {
            echo "history";
          }else {
            echo "pending";
              
            }
          ?>
        </h4>
        <!-- isi Informasi -->
        <div>
          <form method="post" class="d-flex" class="container">
            <div class="table-responsive">
              <button type="submit" id="pending" name="pending" class="btn btn-success mt-3">
                Pending
              </button>
              <button type="submit" id="history" name="history" class="btn btn-success mt-3">
                History
              </button>
            <?php 
            if (isset($_POST['pending'])) {
  
              $nama = $_SESSION['username'];
              $transaction_status = 1;

              // echo "$nama";
              $query = "SELECT * FROM `konfirmasi` WHERE nama = '$nama' AND transaction_status = '$transaction_status'";
              $result = mysqli_query($conn, $query);
              $num = mysqli_num_rows($result);

              ?>
              <div class='mt-5'>
              <table class='table table-bordered'>
              <?php
              echo "<th>id</th>
              <th>Nama</th>
              <th>Biaya</th>
              <th>Order Id</th>
              <th>Status Pembayaran</th>
              <th>Email</th>";
              if($num > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                $status = $data['transaction_status'];
                  echo
                  "<tr>
                    <td>".$data['id']."</td>
                    <td>".$data['nama']."</td>
                    <td>".$data['biaya']."</td>
                    <td>".$data['order_id']."</td>
                    <td>".($status == 1 ? 'Pending' : 'error')."</td>
                    <td>".$data['email']."</td>
                  </tr>
                  ";
                }
                  
                }?>
              </table>
              </div>
              <?php
            } 
            // History
            if (isset($_POST['history'])) {
  
              $nama = $_SESSION['username'];
              $transaction_status = 0;
              // echo "$nama";
              $query = "SELECT * FROM `konfirmasi` WHERE nama = '$nama' AND transaction_status = '$transaction_status'";
              $result = mysqli_query($conn, $query);
              $num = mysqli_num_rows($result);
            
              ?>
              <div class='mt-5'>
              <table class='table table-bordered'>
              <?php
              echo "<th>id</th>
              <th>Nama</th>
              <th>Biaya</th>
              <th>Order Id</th>
              <th>Maskapai</th>
              <th>Status Pembayaran</th>
              <th>Email</th>
              <th>Cetak</th>";
              if($num > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                $status = $data['transaction_status'];

                  echo
                  "<tr>
                    <td>".$data['id']."</td>
                    <td>".$data['nama']."</td>
                    <td>".$data['biaya']."</td>
                    <td>".$data['order_id']."</td>
                    <td>".$data['maskapai']."</td>
                    <td>".($status == 0 ? 'Success' : 'error')."</td>
                    <td>".$data['email']."</td>
                    <td><button class='btn btn-info'>
                    <a href='../fp_admin/cetak_konfirmasi.php?id=".$data['id']."'>
                    Cetak
                    </a>
                    </button></td>
                  </tr>
                  ";
                }
                  
                }
              echo "</table>";
              echo "</div>";
            }
            ?>
            </div>
          </form>
            
            </div>
        </div>
      </div>
    </div>

  

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <!-- <script type="text/javascript" src="../controllers/token.js"></script> -->
    
  </body>
</html>