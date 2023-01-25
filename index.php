<!DOCTYPE html>
<html lang="en">

<?php
include 'path.php';

?>

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/03aa7457ee.js"></script>

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    
    <!-- HEADER -->
	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
	<!-- /HEADER -->

    <!-- Carousel Start -->
    <?php include(ROOT_PATH . "/app/includes/carousel.php"); ?>
    <!-- Carousel End -->


    <!-- About Start -->
    <?php include(ROOT_PATH . "/app/includes/about.php"); ?>
    <!-- About End -->


    <!-- Service Start -->
    <?php include(ROOT_PATH . "/app/includes/service.php"); ?>
    <!-- Service End -->


    <!-- Fact Start -->
    <?php include(ROOT_PATH . "/app/includes/service.php"); ?>
    <!-- Fact End -->


    <!-- Feature Start -->
    <?php include(ROOT_PATH . "/app/includes/feature.php"); ?>
    <!-- Feature End -->


    <!-- FREIGHT Start -->
    <?php include(ROOT_PATH . "/app/includes/freight.php"); ?>
    <!-- FREIGHT End -->


    <!-- Quote Start -->
    <?php include(ROOT_PATH . "/app/includes/quote.php"); ?>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <div class="container-xxl wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="assets/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Andre Robin</h5>
                            <p class="m-0">CTO, Art Media</p>
                        </div>
                    </div>
                    <p class="mb-0">I found myself working in a true partnership that results in an incredible experience, and an end product that is the best for your shipping.</p>
                    </p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="assets/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Tom Bella</h5>
                            <p class="m-0">CEO, Greeny Stores</p>
                        </div>
                    </div>
                    <p class="mb-0">When I started my company in early 2009 a key component was logistics and international freight for my products. I wanted a company that would partner with me, not just be a supplier. ShipTop has been just that, a partner in my business.</p>
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 1rem;">
        <div class="container">
            <div class="row g-5 pb-5">

                <div class="col-lg-6 col-md-12">
                    <p>We are able to guarantee a very high level of satisfaction for our clients. Meeting & exceeding customers service expectations through our highly professional, empowered and motivated employees.</p>
                </div>

                <div class="col-lg-6 col-md-12">

                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Contact Us</h4>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
        
                        <div class=" col-sm-6">
                            <h4 class="text-light mb-4">Services</h4>
                            <a class="btn btn-link" href="">Air Freight</a>
                            <a class="btn btn-link" href="">Sea Freight</a>
                            <a class="btn btn-link" href="">Road Freight</a>
                            <a class="btn btn-link" href="">Storage</a>
                        </div>
                    </div>

                </div>
                
                
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="text-center mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>