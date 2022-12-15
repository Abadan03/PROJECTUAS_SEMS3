
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book now</title>
    
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
        <!-- custom css file link  -->
        <link rel="stylesheet" href="bookcss.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section class="book" id="book">

            <div class="nav-container">
                <header>
                    <label for="hamburger">&#9776;</label>
                    <input type="checkbox" id="hamburger" />
                    <div class="logo">
                        <img src="images/citravel.PNG" alt="Logo">
                    </div>
                    <nav>
                        <ul>
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="packages.html">Packages</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </header>

            <h1 class="heading">
                <span>Book</span>
                <span class="space"></span>
                <span>now</span>
            </h1>
        
            <div class="row">
        
                <div class="image">
                    <img src="images/Komodo National Park, Flores Island, Indonesia.jpg" alt="">
                </div>
        
                <form action="">
                    <div class="inputBox">
                        <h3>where to</h3>
                        <input type="text" placeholder="place name">
                    </div>
                    <div class="inputBox">
                        <h3>how many</h3>
                        <input type="number" placeholder="number of guests">
                    </div>
                    <div class="inputBox">
                        <h3>arrivals</h3>
                        <input type="date">
                    </div>
                    <div class="inputBox">
                        <h3>leaving</h3>
                        <input type="date">
                    </div>
                    <input type="submit" class="btn" value="book now">
                </form>
        
            </div>
        
        </section>
        
        <!-- book section ends -->
    </body>
    </html>