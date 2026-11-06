<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>about</title>

        <!-- swiper css link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">

        <!-- custom css file link -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- header section starts -->
        <section class="header">
            <a href="home.php" class="logo">travel.</a>

            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                <a href="package.php">package</a>
                <a href="book.php">book</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>

        <!-- header section ends -->
        <div class="heading" style="background:url(images/header-bg-1.jpg) no-repeat">
            <h1>about us</h1>
        </div>

        <!-- about section starts --> 
        <section class="about">
            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>We are a team of experienced travel professionals dedicated to 
                    providing you with the best travel experiences. With our extensive 
                    knowledge and passion for travel, we ensure that every moment 
                    of your journey is memorable and fulfilling.
                </p>
                <p>Our commitment to customer satisfaction and attention to detail 
                    sets us apart. We strive to create personalized itineraries that 
                    cater to your preferences, ensuring that your travel experience 
                    is seamless and enjoyable.
                </p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-map"></i>
                        <span>top destinations</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>affordable price</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 guide service</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- reviews section starts -->
        <section class="reviews">
            <div class="reviews-slider">
                <div class="w">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>My travel experience was absolutely amazing! The booking process was easy,
                            the destinations were beautiful and the service was excellent. I highly recommended
                            this website to anyone looking for an unforgettable adventure.
                        </p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="images/pic-1.jpg" alt="">
                    </div>

                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>My travel experience was absolutely amazing! 
                        </p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="images/pic-2.jpg" alt="">
                    </div>

                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>My travel experience was absolutely amazing! The booking process was easy,
                            the destinations were beautiful and the service was excellent. I highly recommended
                            this website to anyone looking for an unforgettable adventure.
                        </p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="images/pic-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- footer section starts -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>quick links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
                </div>

                <div class="box">
                    <h3>extra links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                    <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
                    <a href="#"><i class="fas fa-phone"></i> +111-222-3333 </a>
                    <a href="#"><i class="fas fa-envelope"></i> dupa@gmail.com </a>
                    <a href="#"><i class="fas fa-map"></i> tanga, tanzania - 560056 </a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"><i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"><i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
                </div>
            </div>

            <div class="credit">created by <span>mr. web</span> | all rights reserved!</div>
        </section>

        <!-- swiper js link -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

        <!-- custom js file link --> 
        <script src="js/script.js"></script>
    </body>
</html>