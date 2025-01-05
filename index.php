<?php
session_start(); // Start the session at the beginning of the file
include 'header.php'; // Include the header file
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Gallery Café</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="styles.css">
    <style>
        .site-name {
            font-family: 'Lora', serif; /* Change this to your desired font-family */
            font-size: 36px; /* Adjust the font size as needed */
            font-weight: bold; /* Optional: makes the font bold */
            color:#EEEEEE; /* Optional: change the font color */
        }

        /* Custom CSS to change the color of the site name */
        .navbar-brand .site-name {
            color:#EEEEEE; /* Your desired color */
        }
    </style>
    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Experience the perfect blend of culinary excellence and exceptional service right here in Colombo. </p>
                    <a href="booking.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft" style="background-color: #000000 ; border-color: #000000;">Book A Table</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="img/homepage.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/interior-1.png">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/interior-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/interior-4.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/interior-3.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-4">Welcome to <i class="fas fa-hamburger me-3"></i>The Gallery Café</h1>
                        <p class="mb-4">Welcome to The Gallery Café, a culinary gem located in the vibrant city of Colombo. Established with a passion for exceptional cuisine and impeccable service, we strive to provide our guests with an unforgettable dining experience.</p>
                        
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-display-5" style="background-color: #000000; color: #ffffff; padding: 10px 20px; border-radius: 5px;">15</h1>
                                    <div class="ps-4">
                                    <p class="mb-0" style="color: #000000; font-weight: bold;">Years of</p>
                                    <h6 class="text-uppercase mb-0" style="color:  #000000; font-weight: bold;">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-display-5" style="background-color:#000000; color: #ffffff; padding: 10px 20px; border-radius: 5px;">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0 " style="color:  #000000; font-weight: bold;">Popular</p>
                                        <h6 class="text-uppercase mb-0" style="color: ##000000 font-weight: bold;">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2 text-button custom-btn" href="about.php">Read More</a> <!-- Added custom class -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user" style="color: rgba(103, 41, 73, 0.8); margin-bottom: 1rem";></i> <!-- Changed color --></i>
                        <h5>Master Chefs</h5>
                        <p>Our master chefs bring culinary artistry and passion to every dish, ensuring a memorable dining experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-utensils"  style="color: rgba(103, 41, 73, 0.8); margin-bottom: 1rem";></i> <!-- Changed color --></i>
                        <h5>Quality Food</h5>
                        <p>We use the finest ingredients to create dishes that are as delightful to the palate as they are to the eye.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus"  style="color: rgba(103, 41, 73, 0.8); margin-bottom: 1rem";></i> <!-- Changed color --></i>
                        <h5>Online Order</h5>
                        <p>Conveniently place your orders online and enjoy our gourmet cuisine from the comfort of your home.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-headset"  style="color: rgba(103, 41, 73, 0.8); margin-bottom: 1rem";></i> <!-- Changed color --></i>
                        <h5>24/7 Service</h5>
                        <p>Experience exceptional service at any time, with our dedicated team available around the clock.</p>
                    </div>
                </div>
       
                </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-calendar "  style="color: rgba(103, 41, 73, 0.8); margin-bottom: 1rem";></i> <!-- Changed color --></i>
                        <h5>Special Events</h5>
                        <p>Join us for special events that celebrate food, culture, and community, making every visit extraordinary.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-calendar"  style="color: rgba(103, 41, 73, 0.8); margin-bottom: 1rem";></i> <!-- Changed color --></i>
                        <h5>Table Reservations</h5>
                        <p>Easily reserve your table online and guarantee a perfect dining experience at your preferred time.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-wine-glass"  style="color: rgba(103, 41, 73, 0.8); margin-bottom: 1rem";></i> <!-- Changed color --></i>
                        <h5>Special Food and Beverages</h5>
                        <p>Indulge in our exclusive selection of special food and beverages, crafted for the discerning connoisseur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-tags"  style= "color: rgba(103, 41, 73, 0.8); margin-bottom: 1rem";></i> <!-- Changed color --></i>
                        <h5>Promotions</h5>
                        <p>Take advantage of our exciting promotions and enjoy your favorite dishes at unbeatable prices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Service End -->
    

         <!-- Testimonial Start -->
         <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
            <div class="text-center">
    <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="color: #ff5722;">Testimonial</h5> <!-- Changed color -->
    <h1 class="mb-5">Our Clients Say!!!</h1>
</div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>The Gallery Café offers a fantastic variety of dishes. The black pork curry was flavorful and tender, while the passion fruit soufflé was the perfect balance of sweet and tart."</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h5 class="mb-1">Dinesh Wijesinghe</h5>
                                <small>Graphic Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>The ambiance at The Gallery Café is unmatched. The setting, with its lush greenery and art-filled interiors, made for a truly unique dining experience."</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h5 class="mb-1">Ravi Fernando</h5>
                                <small>Software Engineer</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>The service was top-notch. The staff were friendly, knowledgeable, and attentive, making us feel welcome and well taken care of throughout our meal."</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h5 class="mb-1">Samantha de Silva</h5>
                                <small>Marketing Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Located in the heart of Colombo, The Gallery Café is easily accessible. It's a perfect spot for a relaxing lunch or dinner after exploring the city."</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h5 class="mb-1">Nadiya Wickramasinghe, Journalist</h5>
                                <small> Journalist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

      <!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4 footer-title">The Gallery Café</h4>
                <a class="btn btn-link footer-link" href="about.php">About Us</a>
                <a class="btn btn-link footer-link" href="contact.php">Contact Us</a>
                <a class="btn btn-link footer-link" href="booking.php">Reservation</a>
                <a class="btn btn-link footer-link" href="privacy.php">Privacy Policy</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4 footer-title">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3 footer-icon"></i>143/Galle Road,Colombo,<br>Sri Lanka</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3 footer-icon"></i>+011 267 5421</p>
                <p class="mb-2"><i class="fa fa-envelope me-3 footer-icon"></i>infothegallerycafe@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4 footer-title">Opening</h4>
                <h5 class="text-light fw-normal">Monday - Saturday</h5>
                <p>09AM - 09PM</p>
                <h5 class="text-light fw-normal">Sunday</h5>
                <p>10AM - 08PM</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom footer-link" href="#">Your Company</a>, All Right Reserved.
                    Designed By <a class="border-bottom footer-link" href="https://htmlcodex.com">HTML Codex</a><br><br>
                    Distributed By <a class="border-bottom footer-link" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="" class="footer-link">Home</a>
                        <a href="" class="footer-link">Cookies</a>
                        <a href="" class="footer-link">Help</a>
                        <a href="" class="footer-link">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>