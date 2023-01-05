<?php
include './controllers/config.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$username' AND password = '$password'");
    // $check = mysqli_query($conn, "SELECT * FROM tb_user WHERE password = '$password'");
    // $checkauthkey= mysqli_query($conn, "SELECT * FROM tb_user WHERE authkey = authkey");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0) {
        // if(mysqli_num_rows($check) > 0) {
            // if();
        $_SESSION['login'] = true;
        $_SESSION['id'] = $row["id"];
        $_SESSION['authkey'] = $row['authkey'];
        header("Location: index.php");
        // }else {
        //     "<script>alert('Password Does Not Match')</script>";
        // }
    }else {
        echo
            "<script>alert('User Not Registered')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form id="form-login" method="post" name="form-login">
            <div class="txt-field">
                <input type="text" name="username" id="username" required>
                <label>Username or Email</label>
            </div>
            <div class="txt-field">
                <input type="password" name="password" id="password" autocomplete="on" required>
                <label>Password</label>
            </div>
            <div class="pass">
                <a href="register.php">
                    Doesn't have account yet? Register now.
                </a>    
            </div>
            <div class="pass">
                <a href="admin.php">
                    Login sebagai admin.
                </a>    
            </div>
            <button type="submit" name="submit" form="form-login">Login</button>
        </form>
    </div>
</body>

</html>