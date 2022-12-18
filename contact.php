<?php
include './controllers/config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
}
else {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>citravel.com</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header section starts  -->
    <div class="nav-container">
        <header>
            <label for="hamburger">&#9776;</label>
            <input type="checkbox" id="hamburger" />
            <div class="logo">
                <img src="images/citravel.PNG" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="packages.php">Packages</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="video-container">
            <video src="/UTS/images/video karimunjawa.mp4" id="video-slider" loop autoplay muted></video>
        </div>


        <section class="contact" id="contact">
            <div class="row">

                <div class="image">
                    <img src="images/contact-img.jpg" alt="">
                </div>

                <form action="">
                    <div class="inputBox">
                        <input type="text" placeholder="name">
                        <input type="email" placeholder="email">
                    </div>
                    <div class="inputBox">
                        <input type="number" placeholder="number">
                        <input type="text" placeholder="subject">
                    </div>
                    <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                    <input type="submit" class="btn" value="send message">
                </form>

            </div>

        </section>

        <!-- contact section ends -->

        <!-- footer section  -->

        <!-- <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>Find Us At</h3>
                    <a href="#">Alamat : jl.jalanku masi panjang no-20</a>
                    <a href="#">Email : Oceantravel@gmail.com</a>
                    <a href="#">No.Telp : 031xxxxxxx</a>
                </div>

                <div class="box">
                    <h3>Contact Us</h3>

                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>

                <div class="box">
                    <h3>Our Page</h3>
                    <a href="tampilanawal.html">home</a>
                    <a href="tampilanawal.html">packages</a>
                    <a href="tampilanawal.html">services</a>
                    <a href="tampilanawal.html">gallery</a>
                    <a href="tampilanawal.html">review</a>
                    <a href="tampilanawal.html">about us</a>
                </div>

        </section> -->
</body>

</html>