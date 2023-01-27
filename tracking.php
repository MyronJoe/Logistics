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

    <style>

@media screen and (min-width:992px) {
    .trackBox{
        width: 60% !important;
    }
}
    </style>
    
</head>

<body>
    
    <!-- HEADER -->
	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
	<!-- /HEADER -->

   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class=" container trackBox">
        
        <div class="track-box">

            <h2>TRACK YOUR SHIPPING</h2>

            <p>* PLEASE TYPE IN YOUR TRACKING ID TO GET YOUR TRACKING LOCATION INFORMATION</p>
            
            <form>
                <div>
                    <input type="text" class="form-control border-0 inputs" placeholder="ENTER TRACKING ID" style="height: 55px;">
                </div>
                
                <div>
                    <button class="btn btn-primary w-100 py-3 inputs" type="submit">Track Now</button>
                </div>
            </form>


        </div>


    </div>
    <!-- Contact End -->

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