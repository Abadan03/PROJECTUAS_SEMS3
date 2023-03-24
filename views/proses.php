<?php
session_start();
include '../controllers/config.php';

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // $query_biaya = "SELECT * FROM `jadwalpenerbangan` WHERE harga_tiket";
    $biaya = $_GET['biaya'];
    $order_id = rand();
    $transaction_status = 1;
    $email = $_POST['email'];
    $image = $_POST['image'];
    

    $query = "INSERT INTO `konfirmasi`(`id`, `nama`, `alamat`, `biaya`, `order_id`, `transaction_status`, `email`, `image`) VALUES ('','$nama','$alamat','$biaya','$order_id','$transaction_status','$email', '$image')";
    // $result = mysqli_query($conn, $query);
    $result = mysqli_query($conn, $query);
    if($result) {
      // echo "<script>alert('error')</script>";
      // mysqli_query($conn, $query);
      if($_FILES['image']['error'] === 4) {
        echo "<script>alert('Image does not exist')</script>";
      }else{
        $filename = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $tmpname = $_FILES['image']['tmp_name'];
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $filename);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)) {
          echo "
          <script>alert('Invalid Image Extension')</script>
          ";
        }else if($filesize > 1000000) {
          echo "
          <script>alert('Image size is too large'); window.location.href = 'konfirmasi_pembayara.php'</script>
          ";
          
        }else {
        $newImageName = uniqid();
        $newImageName .= '.' . $newImageName;
  
        move_uploaded_file($tmpname, 'img_user/' . $newImageName);
        $query_image = "INSERT INTO `tb_image`(`id`, `nama`, `newImageName`) VALUES ('','$nama','$newImageName')";
        mysqli_query($conn, $query_image);
        echo "
          <script>alert('Successfully Added')</script>
          ";
          echo "<script>alert('data berhasil ditambahkan')</script>";
          header("Location: profile.php");
        }
      }
    }else {
      echo("Error description: " . mysqli_error($conn));
    }
    
  }
