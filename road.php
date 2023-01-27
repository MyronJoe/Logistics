<!DOCTYPE html>
<html lang="en">

<?php
include 'path.php';

?>

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- All Styles -->
    <?php include(ROOT_PATH . "/app/includes/styles.php"); ?>
    
</head>

<body>
    
    <!-- HEADER -->
	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
	<!-- /HEADER -->

   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h3 class="display-3 text-white mb-3 animated slideInDown" style="font-size: 45px;">SERVICE DETAILS</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Road Service</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container overflow-hidden px-lg-0">
        <div class="container contact-page px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-sm-12 col-md-4 contact-form wow fadeIn" data-wow-delay="0.1s">
                    
                    <div class="card">
                    <div class="card-header">
                        <h5>Service Category</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <a href="<?php echo BASE_URL . '/air.php' ?>"><li class="list-group-item">Air Service</li></a>
                        <a href="<?php echo BASE_URL . '/road.php' ?>"><li class="list-group-item text-primary">Road Service</li></a>
                        
                    </ul>
                    </div>

                </div>
                <div class="col-sm-12 col-md-8 pe-lg-0 wow fadeInRight contact" data-wow-delay="0.1s">

                    <h2 class="mb-3">Details</h2>

                    <p>Roadways are a crucial means of transport in America. They provide people and vehicles to commute a wide range of locations and help them to reach their destination without any hiccups. Road transport is the process of transporting goods or people from one destination to the other via roads. Road transportation is still the most heavily used mode of freight delivery service in Utah and any other regions of America. Even though marine, air or rail transport would be largely used means of solution for bigger size freight services for long distances, road transport will be dominating the freight delivery service across America for a long time.</p>

                    <!-- <p>
                    A strong logistics chain is the foundation for every successful air cargo delivery. Xpress Delivery unlocks this competitive advantage for you through its experienced expediters, business longevity, relationships in the industry, advanced freight tracking technologies, and an extensive network of vehicles and airline partners.
                    </p>
                    -->

                    <img src="assets/img/services_road.jpeg" alt="">

                    <h2 class="my-3">Was Our Solution Best?</h2>

                    <p>Roadways are a crucial means of transport in America. They provide people and vehicles to commute a wide range of locations and help them to reach their destination without any hiccups. Road transport is the process of transporting goods or people from one destination to the other via roads. Road transportation is still the most heavily used mode of freight delivery service in Utah and any other regions of America. Even though marine, air or rail transport would be largely used means of solution for bigger size freight services for long distances, road transport will be dominating the freight delivery service across America for a long time.</p>

                    <p>
                    With the evolution of the transport industry and the growth of many freight delivery service companies in the world, it would be very much unclear for the person in need of transport facilities in deciding which mode of transport would best suit their requirements. Hence it is important to understand the distance, the volume of delivery goods and speed of service for deciding on which model to prefer. Road transport is the most used of all the transport services available in the industry with the best freight delivery services in Utah like ShipTop. If you even use air/water/train transport for transporting goods from one country to another, you must use road transport for delivering them to their precise destination.
                    </p>


                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Testimonial Start -->
    <?php include(ROOT_PATH . "/app/includes/testimony.php"); ?>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
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