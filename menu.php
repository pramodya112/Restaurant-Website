<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Gallery Café</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    

<?php require 'header.php'; ?> 

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="about.php">About</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="Menu">Menu</li>
                    <li class="breadcrumb-item"><a href="contact.php">Contact Us</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
                  
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Indian Food Items</h1>
                </div>

                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
        </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/samosa.jpg" alt="">
                            </div>
                            <h5 class="mb-0">String Hoppers</h5>
                            <small>Crispy pastry filled with spiced potatoes and peas <br> LKR 450</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/hoppers.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Egg Hoppers</h5>
                            <small>Traditional hoppers with a baked egg in the center <br>
                            Price: LKR 150 each</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/roti.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Chicken Tikka </h5>
                            <small>Marinated chicken pieces grilled to perfection <br> LKR 750</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/milkrice.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Milk Rice</h5>
                            <small>Served with fish curry and coconut sambol
                            LKR 300</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/lamprais.jpg"alt="">
                            </div>
                            <h5 class="mb-0">Lamprice</h5>
                            <small>In a rich meat stock with cardamom, cloves, and cinnamon, giving it a deep, aromatic flavor.
                            LKR 850</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/fruits.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Fresh Fruit Platter </h5>
                            <small>Seasonal fruits like papaya, mango, and pineapple
                            LKR 400</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/omlette.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Curry Leaf Omelette</h5>
                            <small>Omelette with curry leaves, onions, and green chilies
                            LKR 200</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/pittu.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Pittu</h5>
                            <small>With coconut milk and curry <br> LKR 300</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/ricencurry.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Rice and Curry Platter</h5>
                            <small>Choice of chicken, fish, or vegetarian With chicken or seafood <br>LKR 800</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/friedrice.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Fried Rice</h5>
                            <small>With chicken or seafood <br>LKR 1500</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/chickenbiriyani.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Chicken Biriyani</h5>
                            <small>With raita and egg <br>LKR 1800</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/chicken.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Devilled Chicken</h5>
                            <small>>With steamed rice <br>LKR 1950</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/grilled.jpg"alt="">
                            </div>
                            <h5 class="mb-0">Grilled Chicken</h5>
                            <small>With mashed potatoes and vegetables <br>LKR 1900</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/watalappan.jpg"  alt="">
                            </div>
                            <h5 class="mb-0">Watalappan </h5>
                            <small>Traditional coconut custard pudding <br>LKR 450</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/salad.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Fruit Salad </h5>
                            <small>Mixed seasonal fruits <br>LKR 1000</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/curd.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Kiri Pani</h5>
                            <small>Curds with treacle <br>LKR 850</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/bananafritters.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Banana Fritters</h5>
                            <small>With honey <br>LKR 550</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/cocopancake.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Chocolate Biscuit Pudding</h5>
                            <small>Layered dessert with biscuits and chocolate <br>LKR 600</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/cocopancake.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Coconut Pancake</h5>
                            <small>With jaggery syrup <br>LKR 450</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" overflow-hidden m-4">
                                <img class="img-fluid" src="img/menu/moose.jpeg" alt="">
                            </div>
                            <h5 class="mb-0">Mango Mousse</h5>
                            <small>Creamy mango dessert <br>LKR 850</small>
                            <div class="d-flex justify-content-center mt-2">
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_cart.php?id=1' : 'login.php'; ?>" class="btn btn-primary me-2"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'add_to_wishlist.php?id=1' : 'login.php'; ?>" class="btn btn-secondary"><i class="fa fa-heart"></i> Add to Wishlist</a>
            </div>
                        </div>
                    </div>

                
                    
                </div>
            </div>
        </div>
        <!-- Team End -->
        

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

