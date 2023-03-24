
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
        <form  action="cek_login.php" id="form-login" method="post" name="form-login">
            <div class="txt-field">
                <input type="text" name="username" id="username" >
                <label>Username or Email</label>
            </div>
            <div class="txt-field">
                <input type="password" name="password" id="password" autocomplete="on">
                <label>Password</label>
            </div>
            <div class="pass">
                <a href="register.php">
                    Doesn't have account yet? Register now.
                </a>    
            </div>
            <label id="check"></label>
            <button type="submit" name="submit" form="form-login">Login</button>
        </form>
    </div>
    <script type="text/javascript">
        let user = document.getElementById('username')
        
    </script>
</body>
</html>