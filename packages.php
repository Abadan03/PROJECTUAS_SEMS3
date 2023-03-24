<?php
include './controllers/config.php';
if(!empty($_SESSION["username"])){
    $id = $_SESSION["username"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$id'");
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
 <!-- packages section starts  -->

 <section class="packages" id="packages">

    <h1 class="heading">
        <span>Packages</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/bajo.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Labuan Bajo </h3>
                <p>Labuan Bajo is a fishing town
                    located at the western end of the large island
                    of Flores in the Nusa Tenggara region
                    of east Indonesia.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> Rp.20.000.000 <span>/night</span> </div>
                <a href="booking.html" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/bukit.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Nusa Penida </h3>
                <p>Nusa Penida is an island southeast of Indonesia's island Bali that includes the neighbouring
                    small island of Nusa Lembongan and twelve even smaller islands. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> Rp.17.000.000 <span>/night</span></div>
                <a href="booking.html" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/pulocinta.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Pulo Cinta </h3>
                <p>PuloCinta Ecoresort is a boutique retreat that unlocks a
                    mystical journey into the tranquil realm of boundless horizon and exotic underwater wonders.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">Rp.13.000.000 <span>/night</span> </div>
                <a href="booking.html" class="btn">Book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/pulocinta.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Pulo Cinta </h3>
                <p>PuloCinta Ecoresort is a boutique retreat that unlocks a
                    mystical journey into the tranquil realm of boundless horizon and exotic underwater wonders.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">Rp.13.000.000 <span>/night</span> </div>
                <a href="booking.html" class="btn">Book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Pulo Cinta </h3>
                <p>PuloCinta Ecoresort is a boutique retreat that unlocks a
                    mystical journey into the tranquil realm of boundless horizon and exotic underwater wonders.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">Rp.13.000.000 <span>/night</span> </div>
                <a href="booking.html" class="btn">Book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/bukit.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Pulo Cinta </h3>
                <p>PuloCinta Ecoresort is a boutique retreat that unlocks a
                    mystical journey into the tranquil realm of boundless horizon and exotic underwater wonders.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">Rp.13.000.000 <span>/night</span> </div>
                <a href="booking.html" class="btn">Book now</a>
            </div>
        </div>
       
</div>

</section>
 <!-- footer section  -->

 <section class="footer">

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

</section>
<!-- packages section ends -->
</body>