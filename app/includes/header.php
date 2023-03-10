<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav style="position: absolute; z-index:100; width:100%;" class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary  p-0">
    <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2">Logistica <i class="fa fa-ship fa-1x text-primary"></i></h2>
    </a>
    
    <!-- <p class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </p> -->

    <input type="checkbox" id="show-menu">

    <label for="show-menu" class="menu-icon me-4 navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="cursor:pointer;">
        <span style="font-size: 25px;" class="fa fa-bars"></span>
    </label> 

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="/air" class="dropdown-item">AIR SERVICE</a>
                    <a href="/road" class="dropdown-item">ROAD SERVICE</a>
                    <a href="/storage" class="dropdown-item">STORAGE SERVICE</a>
                    <a href="/warehouse" class="dropdown-item">WAREHOUSE SERVICE</a>

                </div>
            </div>
            <a href="/tracking" class="nav-item nav-link">Tracking</a>
            <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
        <p class="m-0 pe-lg-5 d-none d-lg-block"><a href="#"><i class="fa fa-envelope text-primary me-3"></i></a></p>
    </div>
</nav>
<!-- Navbar End -->