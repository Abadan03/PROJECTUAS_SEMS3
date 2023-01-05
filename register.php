

<?php
include './controllers/config.php';

$randomAuthkey = rand(1000, 3000);
$authkeyint = intval($randomAuthkey);
// echo $authKeyint;
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $authkey = $randomAuthkey;
    $password = md5($_POST['password']);
    $confirm = md5($_POST['confirm']);
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0) {
        echo
            "<h1>Username or Email has already Taken!</h1>";
    }else {
        if($password == $confirm) {
            $query = "INSERT INTO `tb_user`(`id`, `nama`, `username`, `email`, `password`, `authkey`) VALUES ('','$nama','$username','$email','$password', '$authkey')";
            mysqli_query($conn,$query);
            // return Redirect('/index.php');
            echo "<script>alert('Registration Succeed')</script>";
        }else {
            echo "<script>alert('Username does not match!)</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="images/cargo-ship.png" type="image/x-icon">
</head>

<body>
    <div class="center">
        <h1>Register</h1>
        <form id="form-login" name="form-login" method="post" autocomplete="off">
            <div class="txt-field">
                <input type="text" id="name" name="nama" required>
                <label>Name</label>
            </div>
            <div class="txt-field">
                <input type="text" id="username" name="username" required>
                <label>Username</label>
            </div>
            <div class="txt-field">
                <input type="email" id="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="txt-field">
                <input type="password" id="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="txt-field">
                <input type="password" id="confirmPassword" name="confirm" required>
                <label>Confirm Password</label>
            </div>
            <div class="pass">
                <a href="login.php">
                    Already has account? Click here to login.
                </a>    
            </div>
            <button type="submit" name="submit" form="form-login">Register</button>
        </form>
    </div>
</body>

</html>