<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>NestInn</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="indexNEW.php"><div class="logo" >
                        <img src="img/logos.png" alt="NestInn Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="indexNEW.php">Overview</a></li>

                                    <li><a href="rooms.php">Rooms</a></li>


                                    <li>
                                        <a href="#">About Us</a>
                                        <ul class="sub-menu">
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="reviews.php">Reviews</a></li>
                                        <li><a href="terms.php">Terms</a></li>
                                        </ul>
                                    </li>

                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="indexNEW.php">Sign Out</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner" id="top" style="background-image: url(img/backgrounding.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>The Perfect Stay.</h2>
                        <div class="blue-button">
                            <a href="contact.php">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>

                            <h4>About us</h4>
                            <p> Surrounded by the multicultural energy of Malaysia’s dynamic capital, NestInn takes centre stage with panache. Combining sleek and spacious accommodations, and legendary NestInn service, our Inn is the city’s nexus of success and style..<br>
                            <div class="blue-button">
                                <a href="about-us.php">More</a>
                            </div>
                            <br>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <img src="img/first.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

            <section class="featured-rooms">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                    <div class="section-heading">
                    <span>Featured Rooms</span>
                    </div>
                    </div> 
                    </div> 
                        
                    <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                    <div class="thumb">
                    <div class="thumb-img">
                    <img src="img/biliks1.jpeg" alt="">
                    </div>

                    <div class="overlay-content">
                    <strong title="Available">CLUB PREMIERE PARK-VIEW ROOM</strong>
                    </div>
                    </div>

                    <div class="down-content">
                    <h4>One king or two twin beds, One extra bed or one crib</h4>
                    <p>King bed: 3 adults, or 2 adults and 1 child; Twin beds: 3 adults, or 2 adults and 2 children</p>

                    <p><span><strong>RM1350</strong></span></p>

                    <div class="text-button">
                    <a href="room-details.php">View More</a>
                    </div>
                        </div>
                        </div>
                        </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                    <div class="thumb">
                    <div class="thumb-img">
                    <img src="img/biliks2.jpeg" alt="">
                    </div>
                                            
                    <div class="overlay-content">
                    <strong title="Available">PREMIER PARK-VIEW ROOM</strong>
                    </div>
                    </div>

                    <div class="down-content">
                    <h4>One king bed or two twin beds, One extra bed or one crib</h4>
                    <p>King bed: 3 adults, or 2 adults and 1 child; Twin beds: 3 adults, or 2 adults and 2 children</p>
                    <p><span><strong>RM1400</strong></span></p>

                    <div class="text-button">
                    <a href="room-details.php">View More</a>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                    <div class="thumb">
                    <div class="thumb-img">
                    <img src="img/biliks3.jpeg" alt="">
                    </div>
                                            
                    <div class="overlay-content">
                    <strong title="Available">POOL GARDEN-VIEW ROOM</strong>
                    </div>
                    </div>

                    <div class="down-content">
                    <h4>One king or two twin beds, One extra bed or one crib</h4>
                    <p>King bed: 3 adults, or 2 adults and 1 child; Twin beds: 3 adults, or 2 adults and 2 children</p>
                    <p><span><strong>RM700</strong></span></p>

                    <div class="text-button">
                    <a href="room-details.php">View More</a>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                    <div class="thumb">
                    <div class="thumb-img">
                    <img src="img/biliks4.jpeg" alt="">
                    </div>
                                            
                    <div class="overlay-content">
                    <strong title="Available">PARK-VIEW ROOM</strong>
                    </div>
                    </div>

                    <div class="down-content">
                    <h4>One king bed, One sofabed, rollaway or crib</h4>
                    <p>2 adults </p>
                    <p><span><strong>RM535</strong></span></p>

                    <div class="text-button">
                    <a href="room-details.php">View More</a>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                    <div class="thumb">
                    <div class="thumb-img">
                    <img src="img/biliks5.jpeg" alt="">
                    </div>
                                            
                    <div class="overlay-content">
                    <strong title="Available">CITY-VIEW ROOM</strong>
                    </div>
                    </div>

                    <div class="down-content">
                    <h4>One king or two twin beds, One sofabed, rollaway or crib</h4>
                    <p>3 adults, or 2 adults and 1 child</p>
                    <p><span><strong>RM605</strong></span></p>

                    <div class="text-button">
                    <a href="room-details.php">View More</a>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                    <div class="thumb">
                    <div class="thumb-img">
                    <img src="img/biliks6.jpeg" alt="">
                    </div>
                                            
                    <div class="overlay-content">
                    <strong title="Available">GARDEN ROOM VIEW</strong>
                    </div>
                    </div>

                    <div class="down-content">
                    <h4>One twin bed</h4>
                    <p>2 adults</p>
                    <p><span><strong>RM560</strong> </span></p>

                    <div class="text-button">
                    <a href="room-details.php">View More</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
            </section>

        
            <section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
            <div class="inner">
            

                <div class="section-heading">
                
                <h2>Reach Us Anytime, Anywhere</h2>
                <a href="contact.php">Contact Us</a>
                </div>

                <!-- Modal button -->
                <div class="blue-button">
                <img src="img/contacting.jpg" alt="contact">
            
                </div>
                </div>
            </div>
            </section>

            <section class="review-customers" id="review">
            <div class="container">
            <div class="row">
            <div class="col-md-12">
            <div class="section-heading">
            <span>Reviews</span>
            <h2>Get to know what people think of us!</h2>
            </div>
            </div> 
            </div> 

            <div class="owl-carousel owl-theme">
            <div class="item popular-item">
            <div class="thumb">
            <img src="img/face1.png" alt="">
            <div class="text-content">
            <h4>Leia Rose</h4>
            <span>"The room is spacious and clean. Receptionist is very kind. Breakfast was great."</span>
            </div>

            <div class="plus-button">
            <a href="reviews.php"><i class="fa fa-plus"></i></a>
            </div>
            </div>
            </div>

            <div class="item popular-item">
            <div class="thumb">
            <img src="img/face2.png" alt="">
            <div class="text-content">
            <h4>Khairi Zayn</h4>
            <span>"I thank management and staffs for their attentive, friendly and outstanding service."</span>
            </div>

            <div class="plus-button">
            <a href="reviews.php"><i class="fa fa-plus"></i></a>
            </div>
            </div>
            </div>

            <div class="item popular-item">
            <div class="thumb">
            <img src="img/face3.png" alt="">
            <div class="text-content">
            <h4>Lee Chin</h4>
            <span>"Friendly, accommodating staff, willing to help with a smile. Facilities, swimming pool were renovated and good looking rooms."</span>
            </div>

            <div class="plus-button">
            <a href="reviews.php"><i class="fa fa-plus"></i></a>
            </div>
            </div>
            </div>

            <div class="item popular-item">
            <div class="thumb">
            <img src="img/face4.png" alt="">
            <div class="text-content">
            <h4>Maya Kim</h4>
            <span>"The impeccable service and hospitality of your staff made our retreat most enjoyable."</span>
            </div>

            <div class="plus-button">
            <a href="reviews.php"><i class="fa fa-plus"></i></a>
            </div>
            </div>
            </div>

            <div class="item popular-item">
            <div class="thumb">
            <img src="img/face5.png" alt="">
            <div class="text-content">
            <h4>Danial Tan</h4>
            <span>"Friendly staff, nice design, good food. Staff are friendly, the foods are yummy. Comfortable bed I love it and sure will go again"</span>
            </div>

            <div class="plus-button">
            <a href="reviews.php"><i class="fa fa-plus"></i></a>
            </div>
            </div>
            </div>

            <div class="item popular-item">
            <div class="thumb">
            <img src="img/face6.png" alt="">
            <div class="text-content">
            <h4>Tam Shafiq</h4>
            <span>"The Hotel was conveniently located and is easily found.The Garden Room View makes movement within the room very comfortable."</span>
            </div>

            <div class="plus-button">
            <a href="reviews.php"><i class="fa fa-plus"></i></a>
            </div>
            </div>
            </div>

            <div class="item popular-item">
            <div class="thumb">
            <img src="img/face7.png" alt="">
            <div class="text-content">
            <h4>Sofea Diana</h4>
            <span>"Generally, the hotel was above expectation. Congrats! Food was good fresh and on time."</span>
            </div>

            <div class="plus-button">
            <a href="reviews.php"><i class="fa fa-plus"></i></a>
            </div>
            </div>
            </div>
            </div>
            </div>
        </section>

 
    <footer>
    <div class="container">
    <div class="row">
    <div class="col-md-5">
    <div class="about-veno">
    <div class="logo">
    <img src="img/logos.png" alt="Venue Logo">
    </div>

    <p>Our inn offers stunning cityscape views and unrivalled access to all the excitement of this buzzing capital. Let our concierge team create a customized itinerary for you.</p>
    <ul class="social-icons">
    <li>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    </li>
    </ul>
    </div>
    </div>

    <div class="col-md-4">
    <div class="useful-links">
    <div class="footer-heading">
    <h4>Useful Links</h4>
    </div>

    <div class="row">
    <div class="col-md-6">
    <ul>
    <li><a href="indexNEW.php"><i class="fa fa-stop"></i>Overview</a></li>
    <li><a href="about-us.php"><i class="fa fa-stop"></i>About</a></li>
    <li><a href="contact.php"><i class="fa fa-stop"></i>Contact Us</a></li>
    </ul>
    </div>

    <div class="col-md-6">
    <ul>
    <li><a href="rooms.php"><i class="fa fa-stop"></i>Rooms</a></li>
    <li><a href="reviews.php"><i class="fa fa-stop"></i>Reviews</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>

    <div class="col-md-3">
    <div class="contact-info">
    <div class="footer-heading">
    <h4>Contact Information</h4>
    </div>
    <p><i class="fa fa-map-marker"></i>Kangar, Perlis</p>
    <ul>
    <li><span>Phone:</span><a href="#">+09 2669285</a></li>
    <li><span>Email:</span><a href="#">nestInn@malaysia.com</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright © 2024 NestInn Malaysia </p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>