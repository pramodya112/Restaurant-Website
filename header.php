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
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner and Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="site-name"><i class="fas fa-hamburger me-3"></i>The Gallery Café</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto py-0 pe-4">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                        <div class="dropdown-menu m-0">
                            <a href="srilankan.php" class="dropdown-item">Sri Lankan</a>
                            <a href="indian.php" class="dropdown-item">Indian</a>
                            <a href="chinese.php" class="dropdown-item">Chinese</a>
                        </div>
                    </div>
                    <a href="specialevents.php" class="nav-item nav-link">Special Events</a>
                    <a href="promotions.php" class="nav-item nav-link">Promotions</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <div class="navbar-nav ms-auto py-0">
                    <div class="nav-item dropdown">
                        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.php" class="dropdown-item">Profile</a></li>
                                <li><a href="logout.php" class="dropdown-item">Logout</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php" class="dropdown-item">Login</a></li>
                                <li><a href="registration.php" class="dropdown-item">Register</a></li>
                                <li><a href="reviews.php" class="dropdown-item">Reviews</a></li>
                                <li><a href="display_parking.php" class="dropdown-item">Parking availabilities</a></li>
                                <li><a href="tables.php" class="dropdown-item">Table Capacities</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar & Hero End -->

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