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
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="packages.html">Packages</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </header>
    </div>

<!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Let's Sail Away With Us !</h3>
            <p>
                <a href="booking.html" class="tombol">BOOK NOW</a>
            </p>
        </div>

        <div class="video-container">
            <video src="images/Video No Copyright - Labuan Bajo_Trim.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>
    <!-- home section ends -->

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
                <img src="images/nusa.jpg" alt="">
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
            <div id="loadMore">
                <a href="packages.html" class="btn ">Load More</a>
            </div>
           
</div>

    </section>
    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>services</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <i class="fas fa-ship"></i>
                <h3> Yatch with ocean View</h3>
            </div>
            <div class="box">
                <i class="fas fa-couch"></i>
                <h3>Sundeck and
                    <br> Around Sofa
                </h3>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
            </div>
            <div class="box">
                <i class="fas fa-swimmer"></i>
                <h3>Diving</h3>
            </div>
            <div class="box">
                <i class="fas fa-bed"></i>
                <h3>Luxury room</h3>
            </div>
            <div class="box">
                <i class="fas fa-hot-tub"></i>
                <h3>Jacuzzi on
                    <br> front deck
                </h3>
            </div>
            <div class="box">
                <i class="fas fa-glass-cheers"></i>
                <h3> Mini Bar</h3>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3> Safty Guide</h3>
            </div>
            <div class="box">
                <i class="fas fa-bath"></i>
                <h3> Private Bathroom</h3>
            </div>
        </div>
    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>Gallery</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpeg" alt="">
                <div class="content">
                    <h3>Super Yatch</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>Luxury Room</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpeg" alt="">
                <div class="content">
                    <h3>Private Bathroom</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>Fine Dining</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>Yatch w/ Ocean View</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>Jacuzzi on front deck</h3>
                </div>
            </div>
        </div>

    </section>

    <!-- gallery section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading">
            <span>what</span>
            <br>
            <span>they</span>
            <span class="space"></span>
            <span>say</span>
        </h1>
        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic1.jpg" alt="">
                        <h3>Sabian</h3>
                        <p>The service is very satisfying, the crew is friendly, the ship is very clean</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic2.jpg" alt="">
                        <h3>Jamal</h3>
                        <p>The waiter is friendly, the bathroom is clean and fragrant, everything works well</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic3.jpg" alt="">
                        <h3>Jonata</h3>
                        <p>Everything went smoothly, my vacation became very precious and full of memories</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic4.jpg" alt="">
                        <h3>Erik</h3>
                        <p>What an amazing experience! I love diving, and wanted to go to Labuan Bajo since I can
                            remember.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic5.jpg" alt="">
                        <h3>David</h3>
                        <p>I enjoyed my holiday very much and had a great time. Highly recommended!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
    </section>

    <!-- review section ends -->

    <!-- about us section starts  -->

    <h1 class="heading">
        <span>about</span>
        <span class="space"></span>
        <span>us</span>
    </h1>

    <section class="about" id="aboutus">
        <div class="main">
            <img src="images/kapal.jpg">
            <div class="about-text">
                <h2>citra-vel</h2>
                <p class="text-about">Citra-vel is a luxury vehicle charter provider and cruise management company
                    based in Indonesia. We are providing high-end services and
                    opperational support in relation with luxury tourism industry in Indonesia</p>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">

        <h1 class="heading">
            <span>contact</span>
        </h1>

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

    <!-- footer section  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Find Us At</h3>
                <a href="#">Alamat : jl.jalanku masi panjang no-20</a>
                <a href="#">Email : citra-vel@gmail.com</a>
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
                <a href="#home">home</a>
                <a href="#packages">packages</a>
                <a href="#gallery">gallery</a>
                <a href="#review">review</a>
                <a href="#aboutus">about us</a>
            </div>

    </section>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>