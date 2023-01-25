<!DOCTYPE html>
<html lang="en">

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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Logistica</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="price.html" class="dropdown-item">AIR SERVICE</a>
                        <a href="service.html" class="dropdown-item">ROAD SERVICE</a>
                        <a href="quote.html" class="dropdown-item">STORAGE SERVICE</a>
                        <a href="feature.html" class="dropdown-item">WAREHOUSE SERVICE</a>
                        
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Tracking</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><a href="#"><i class="fa fa-envelope text-primary me-3"></i></a></h4>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 ">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets/img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-warning text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                                <h1 style="text-transform: uppercase;" class="display-3 text-white animated slideInDown mb-4">world most Fastest secure delivery service</h1>
                                <a href="" class="btn btn-warning text-light py-md-3 px-md-5 me-3 animated slideInLeft">TRACK SHIPMENT</a>
                                <a href="" class="btn btn-outline-warning text-light py-md-3 px-md-5 animated slideInRight">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets/img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-warning text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                                <h1 style="text-transform: uppercase;" class="display-3 text-white animated slideInDown mb-4">#1 Place For Your Transport Solution</h1>
                                <a href="" class="btn btn-warning text-light py-md-3 px-md-5 me-3 animated slideInLeft">TRACK SHIPMENT</a>
                                <a href="" class="btn btn-outline-warning text-light py-md-3 px-md-5 animated slideInRight">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container overflow-hidden px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 wow fadeInLeft Tracker" data-wow-delay="0.1s" style="background-image: url(assets/img/about.jpg);">
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


                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                    <p class="mb-5"><b>(Com Name)</b> is a world leader in global container shipping and a company that prides itself on offering digitized global services with local knowledge.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-clock-o fa-3x text-primary mb-3"></i>
                            <h5>24/7 Support</h5>
                            <p class="m-0">Our support is available 24/7 to attend to all your needs. Send an email to logist@gmail.com for any inquiry.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i style="transform: scaleX(-1)" class="fa fa-truck fa-3x text-primary mb-3"></i>
                            <h5>On Time Delivery</h5>
                            <p class="m-0">With our advanced tracking system, you can get up to date information on the arrival time of your deliveries.</p>
                        </div>
                    </div>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            <h5>GLOBAL SHIPPING</h5>
                            <p class="m-0">We offer shipping solutions all over the globe in over 180 countries.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i style="transform: scaleX(-1)" class="fa fa-users fa-3x text-primary mb-3"></i>
                            <h5>OUR EXPERT TEAM</h5>
                            <p class="m-0">We have a team of dedicated and experienced professionals working round the clock to serve you better.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl mt-4">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">Our Services</h6>
                <h3 class="mb-2">WE PROVIDE ALL LOGISTIC SERVICES</h3>
                <p class="mb-3 text">WHATEVER YOUR LOGISTIC NEEDS MIGHT BE, WE HAVE THE RIGHT SOLUTION FOR IT. FROM AIR, ROAD AND SEA FREIGHTS SOLUTIONS, INCLUDING WAREHOUSING AND STORAGE, WE HAVE YOU COVERED.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="assets/img/service-1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Air Freight</h4>
                        <p>Fastest method of delivery for your time sensitive packages.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="assets/img/service-6.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Warehouse Solutions</h4>
                        <p>Warehousing and storage solutions you can trust.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="assets/img/service-3.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Road Freight</h4>
                        <p>Most cost-effective method of delivering your package.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>

                <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="assets/img/service-4.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Train Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div> -->

                <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="assets/img/service-5.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Customs Clearance</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div> -->

                <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="assets/img/service-2.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Ocean Freight </h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Fact Start -->
    <div class="fact" style="background-image: url(assets/img/carousel-1.jpg);">
        <div class="fact-inner container-fluid py-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
    
                    <div class="px-2 wow fadeIn col-sm-12 col-md-6 col-lg-3" data-wow-delay="0.5s">
                        <div class="inner text-center p-2">
                            
                            <h2 class="text-white mb-2" ><span data-toggle="counter-up">928</span>+</h2>
                            <div class="divide"></div>
                            <p class="text-white mb-0">Successfully Delivered</p>
                        </div>
                    </div>
                    <div class="px-2 wow fadeIn col-sm-12 col-md-6 col-lg-3" data-wow-delay="0.5s">
                        <div class="inner text-center p-2">
                            
                            <h2 class="text-white mb-2"><span data-toggle="counter-up">2572</span>+</h2>
                            <div class="divide"></div>
                            <p class="text-white mb-0">Worldwide Clients</p>
                        </div>
                    </div>
    
                    <div class="px-2 wow fadeIn col-sm-12 col-md-6 col-lg-3" data-wow-delay="0.5s">
                        <div class="inner text-center p-2">
                            
                            <h2 class="text-white mb-2"><span data-toggle="counter-up">479</span>+</h2>
                            <div class="divide"></div>
                            <p class="text-white mb-0">Store Clients Products</p>
                        </div>
                    </div>
                    <div class="px-2 wow fadeIn col-sm-12 col-md-6 col-lg-3" data-wow-delay="0.5s">
                        <div class="inner text-center p-2">
                            
                            <h2 class="text-white mb-2" ><span data-toggle="counter-up">3074</span>+</h2>
                            <div class="divide"></div>
                            <p class="text-white mb-0">Total Km Reach So Far</p>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                    <h1 class="mb-5">WE OFFER BEST LOGISTIC PROVIDER FOR OUR CLIENTS</h1>
                    <p>WE PROVIDE THE BEST LOGISTIC SERVICE ON THE MARKET, ALL OVER THE GLOBE IN CASE YOU HAVE AN ENQUIRY, OR AN URGENT QUESTION, OUR SUPPORT IS THERE.</p>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Worldwide Service</h5>
                            <p class="mb-0">We provide the best logistic service for globally</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-clock-o text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>On Time Delivery</h5>
                            <p class="mb-0">We know how to make it in time and set the right terms for deliveries.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-credit-card-alt text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Payment Method</h5>
                            <p class="mb-0">All payment methods are acceptable for ordering our services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="assets/img/feature.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Pricing Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="mb-3">WHY CHOOSE SHIPTOP</h3>

                <p class="mb-4 text">
                    WITH A CUSTOMER FOCUSED BUSINESS MODEL. WE OFFER GREAT SUPPORT AND PRICES FOR ALL TYPES OF ENTERPRENEURS AND BUSINESSES.
                </p>

            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="price-item text-center">
                        <div class="border-bottom p-3 mb-3">
                            <p><i class="fa fa-plane fa-3x text-primary"></i></p>
                            <a href=""><h5>AIR FREIGHT</h5></a>
                        </div>
                        <div class="p-4 pt-0">
                            <p>
                                We provide an integrated network of air and ground transport options that give you the widest range of air cargo choices - all without having to make multiple calls to find the best rates.
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="price-item text-center">
                        <div class="border-bottom p-3 mb-3">
                            <i style="transform: scaleX(-1)" class="fa fa-truck fa-3x text-primary mb-3"></i>
                            <a href=""><h5>ROAD FREIGHT</h5></a>
                        </div>
                        <div class="p-4 pt-0">
                            <p>
                                Road Freight is freight carried by trucks on the road network. The services are fast, reliable and cost-effective.
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="price-item text-center">
                        <div class="border-bottom p-3 mb-3">
                            <p><i class="fa fa-ship fa-3x text-primary"></i></p>
                            <h5>WAREHOUSE</h5>
                        </div>
                        <div class="p-4 pt-0">
                            <p>
                                We offer warehouses at different locations in and outside the United States for storing of goods and package. Contact support to inquire and rent any of our warehouses.
                            </p>
                            
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Quote Start -->
    <div class="container py-5 px-4">
        <div class="container ">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp p-0 pic" data-wow-delay="0.1s">
                    <img class="fluid" src="assets/img/about.jpg" alt="">
                </div>
                <div class="col-lg-7 p-0">
                    <div class="bg-light text-center p-4 wow fadeIn" data-wow-delay="0.5s">
                        <h3 class="mb-4 text-left">REQUEST A FREE QUOTE</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>SELECT A FREIGHT</option>
                                        <option value="1">Air</option>
                                        <option value="2">Sea</option>
                                        <option value="3">Road</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="EMAIL" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="CITY DEPARTURE" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="TOTAL WEIGHT" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="DELIVERY CITY" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="TIME" style="height: 55px;">
                                </div>
                                
                                
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">SUBMIT REQUEST</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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