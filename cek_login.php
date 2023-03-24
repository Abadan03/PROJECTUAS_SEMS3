<?php 
// menghubungkan php dengan koneksi database
include 'controllers/config.php';

// menangkap data yang dikirim dari form login



if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$username' AND password = '$password'");
    // $check = mysqli_query($conn, "SELECT * FROM tb_user WHERE password = '$password'");
    // $checkauthkey= mysqli_query($conn, "SELECT * FROM tb_user WHERE authkey = authkey");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0) {
        // if(mysqli_num_rows($check) > 0) {
			if($row['level'] == "user" && $row['username'] = $username && 
			$rows['password']=$password) {
				$_SESSION['login'] = true;
				$_SESSION['username'] = $username;
				$_SESSION['level'] = $row['level'];
				$_SESSION['authkey'] = $row['authkey'];
				
				header("Location: views/showdata.php");
			}else if($row['level'] == "admin" && $row['username'] = $username && 
			$rows['password']=$password) {
				$_SESSION['login'] = true;
				$_SESSION['username'] = $username;
				$_SESSION['level'] = $row['level'];
				$_SESSION['authkey'] = $row['authkey'];
				
				header("Location: fp_admin/index.php");
			}
        // }else {
        //     "<script>alert('Password Does Not Match')</script>";
        // }
    }else {
        echo
            "<script>
			alert('Username atau password anda salah')
			window.location.href = 'login.php'
			
			</script>";
		
    }
}
 
?>