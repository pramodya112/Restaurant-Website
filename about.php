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
            <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

            
    <style>
        h1.display-3 {
            font-family: "Righteous", sans-serif;
            color: #ffffff; /* Ensure the text color matches the design */
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
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="about.php">About</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- About Start -->
        <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="text-start">
                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/interior-1.png">
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4"><i class="fas fa-hamburger me-3"></i>The Gallery Café</h1>
                <p class="mb-4">Welcome to The Gallery Café, a culinary haven where art and gastronomy come together in perfect harmony. Located in the heart of Colombo, The Gallery Café offers a unique dining experience that goes beyond the ordinary. Our café is housed in a charming space that once served as the offices of world-renowned Sri Lankan architect Geoffrey Bawa, and it retains much of its original architectural beauty.
                At The Gallery Café, we pride ourselves on our diverse menu, which features an exquisite selection of Sri Lankan, Indian, and international dishes, all prepared with the freshest ingredients and a dash of creativity. Whether you’re joining us for a leisurely breakfast, a business lunch, or a romantic dinner, our team is dedicated to making your visit memorable.</p>
                <p>Our café is not just about great food; it’s also a place where you can relax and unwind. With its serene ambiance, tasteful décor, and a lovely courtyard garden, The Gallery Café provides the perfect setting for any occasion. We also host special events and exhibitions, showcasing the work of local artists and celebrating the vibrant culture of Sri Lanka.</p>
                <p>Join us at The Gallery Café and let us take you on a culinary journey that delights the senses and soothes the soul.</p>
                
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
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">OUR STORY</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">Our master chefs are culinary artists who blend traditional techniques with innovative methods to create extraordinary dishes. Their expertise spans a wide range of cuisines, ensuring a diverse and delectable menu that caters to all tastes.</p>
                <p>Each chef is dedicated to using the finest ingredients, carefully selected to guarantee the highest quality in every dish. Their meticulous attention to detail and passion for perfection result in meals that are not only delicious but also visually stunning.</p>
                <p>Beyond their culinary talents, our chefs are committed to providing personalized service to every guest. They take the time to understand your preferences and dietary needs, crafting dishes that cater specifically to your tastes.</p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <img src="img/aboutpic2.jpg" class="img-fluid rounded" alt="Our Master Chefs">
            </div>
        </div>
    </div>
</div>

            <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="text-start">
                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/cuisine.jpg">
                </div>
                
            </div>
            <div class="col-lg-6">
               
                <h1 class="mb-4">OUR CUISINE</h1>
                <p class="mb-4">Our menu is a testament to the rich culinary traditions of Sri Lanka, infused with contemporary twists. We offer a wide variety of dishes, from traditional rice and curry to innovative fusion creations. Each dish is crafted with the freshest ingredients and presented with artistic flair, ensuring that every meal is a feast for the senses.</p>
                
              </div>     
            </div>         
            </div>  
            </div>
              
        <div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">OUR MASTER CHEFS</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <img src="img/teamimg.jpg" class="img-fluid rounded" alt="Our Master Chefs">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <p class="mb-4">Our master chefs are culinary artists who blend traditional techniques with innovative methods to create extraordinary dishes. Their expertise spans a wide range of cuisines, ensuring a diverse and delectable menu that caters to all tastes.</p>
                <p>Each chef is dedicated to using the finest ingredients, carefully selected to guarantee the highest quality in every dish. Their meticulous attention to detail and passion for perfection result in meals that are not only delicious but also visually stunning.</p>
                <p>Beyond their culinary talents, our chefs are committed to providing personalized service to every guest. They take the time to understand your preferences and dietary needs, crafting dishes that cater specifically to your tastes.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">VISIT US</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">The Gallery Café is the perfect venue for celebrating special occasions. Whether you're planning a romantic dinner, a corporate event, or a family gathering, we offer bespoke event planning services to ensure your event is memorable.</p>
                <p>Thank you for choosing The Gallery Café. We look forward to welcoming you! </p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <img src="img/visitus.jpg" class="img-fluid rounded" alt="Our Master Chefs">
            </div>
        </div>
    </div>
</div>
    </div>
    </div>

      <!-- Footer Start -->
      <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">The Gallery Café </h4>
                        <a class="btn btn-link" href="about.php">About Us</a>
                        <a class="btn btn-link" href="contact.php">Contact Us</a>
                        <a class="btn btn-link" href="booking.php">Reservation</a>
                        <a class="btn btn-link" href="privacy.php">Privacy Policy</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>143/Galle Road,Colombo,<br>Sri Lanka</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+011 267 5421</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>infothegallerycafe@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
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
                            &copy; <a class="border-bottom" href="#"></a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
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
        

      