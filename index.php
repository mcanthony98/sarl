<?php
session_start();
require "includes/connect.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d");
$eres = $conn->query("SELECT * FROM event WHERE event_status = 1  ORDER BY year DESC LIMIT 7");

// Case studies for the homepage showcase (content in includes/case-studies.php)
require "includes/case-studies.php";
$home_cases = [];
$cs_ids = implode(',', array_map('intval', array_keys($CASE_STUDIES)));
$csres = $conn->query("SELECT event_id, title, category, year, cover_image FROM event WHERE event_status = 1 AND event_id IN ($cs_ids)");
$cs_rows = [];
while ($r = $csres->fetch_assoc()) {
    $cs_rows[(int) $r['event_id']] = $r;
}
foreach ($CASE_STUDIES as $cs_id => $cs) {
    if (isset($cs_rows[$cs_id])) {
        $home_cases[] = ['id' => $cs_id, 'cs' => $cs, 'row' => $cs_rows[$cs_id]];
    }
}
$home_cases = array_slice($home_cases, 0, 5);
?>
<!doctype html>
<html lang="en">

<head>

    <title>High-End Interior Fitouts & Bespoke Aluminium Solutions | SARL Kenya</title>

    <meta name="description" content="SARL (Specialized Aluminium Renovators Limited) offers premium interior fitouts, aluminium & glazing, steel fabrications, and joinery works in Nairobi and across Kenya. Established in 1992, we deliver exceptional quality for commercial, office, and residential projects.">
    <meta name="keywords" content="interior fitouts Nairobi, aluminium glazing Kenya, steel fabrication services, joinery works Kenya, high-end interior design Kenya, office partition">
    
    <!-- Open Graph Meta (for Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="High-End Interior Fitouts & Bespoke Aluminium Solutions | SARL Kenya">
    <meta property="og:description" content="Explore SARL's expert services in high-end interior fitouts, custom aluminium & glazing works, steel fabrications, and joinery solutions across Kenya.">
    <meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://sarl.co.ke/assets/images/logo/sarl-about-logo.jpg"> 
    <meta property="og:site_name" content="SARL Kenya">

    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="High-End Interior Fitouts & Aluminium Works | SARL Kenya">
    <meta name="twitter:description" content="Premium interior and aluminium fitout solutions for commercial, residential, and office spaces in Nairobi, Kenya.">
    <meta name="twitter:image" content="https://sarl.co.ke/assets/images/logo/sarl-about-logo.jpg"> 

   

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

    <!-- Custom Homepage CSS -->
    <?php include 'includes/homepage-styling.php'; ?>

    <style>
         .carousel-image {
        height: 250px; /* Ensures the images are at least 250px tall */
        object-fit: cover; /* Keeps the aspect ratio while filling the container */
        width: 100%; /* Ensures the images fill the carousel's width */
    }
        .hero-slide {
            background-size: cover; /* Ensures the image covers the entire area */
            background-position: center; /* Keeps the focus on the center of the image */
            background-repeat: no-repeat; /* Prevents the image from repeating */
            width: 100%;
            height: 100%;
        }
    
        @media (max-width: 768px) {
            .hero-slide {
                background-position: center top; /* Adjust position for smaller screens */
            }
        }
    </style>
    

</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar2.php'; ?>


    <main>
        <!--Page Content-->

       

        <!--Hero start-->
        <section class="hero-section position-relative" style="height: 95vh;">
            <!-- Hero Slides Container -->
            <div class="hero-slides-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                <div class="hero-slide active" style="background-image: url('assets/images/hero7.jpg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/hero13.jpg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/hero8.jpg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/hero9.jpg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/hero10.jpg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/hero5.jpeg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/hero6.jpeg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/hero7.jpeg');"></div>
            </div>

            <!-- Hero Content -->
            <div class="container position-relative h-100 sarl-hero-in">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-9 col-12">
                        <div class="hero-content rounded">
                            <div class="sarl-hero-kicker"><span></span>Since 1992 &middot; Nairobi, Kenya</div>
                            <h1 class="text-white display-3 fw-bold mb-4">High-End Fitouts & Aluminium Solutions</h1>
                            <p class="text-white-50 lead mb-5 d-none d-sm-block">
                                Innovative designs and precise craftsmanship, creating unparalleled spaces with SARL's expertise in high-end fitouts and bespoke aluminium solutions.
                            </p>
                            <div class="d-md-flex d-grid align-items-center justify-content-center gap-4">
                                <a href="contact.php" class="btn btn-primary rounded-pill">Reach Out Today!</a>
                                <a href="projects.php" class="link-white icon-link icon-link-hover d-flex align-items-center">
                                    View Our Projects
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sarl-hero-dots" aria-hidden="true"></div>
            <a href="#why-sarl" class="sarl-scroll-cue d-none d-md-flex">Scroll</a>
        </section>

        <!-- Services ticker -->
        <div class="sarl-ticker" aria-hidden="true">
            <div class="sarl-ticker__track">
                <?php for ($t = 0; $t < 4; $t++) { ?>
                <span>Interior Fitouts</span><span>Aluminium &amp; Glazing Works</span><span>Stainless &amp; Mild Steel</span><span>Joinery Works</span>
                <?php } ?>
            </div>
        </div>


        <!-- about section -->
        <section class="py-xl-9 py-lg-8 py-6" id="why-sarl" data-cue="fadeIn">
            <div class="container">
                <div class="row align-items-center gy-6">
                    <div class="col-xl-6 col-lg-7" data-cue="slideInLeft">
                        <div class="pe-lg-8 me-lg-8 mb-4">
                            <span class="sarl-eyebrow mb-3">Why SARL</span>
                            <h2 class="mb-0 me-lg-8 mt-3">
                                Why Choose
                                <span class="text-primary fw-semibold">SARL</span>
                                for Your Next Project?
                            </h2>
                        </div>
                        <div class="row mb-7 gy-3" data-cue="zoomIn">
                            <div class="col-lg-6">
                                <div>
                                    <h3 class="fs-4">Expertise</h3>
                                    <p class="mb-0">Years of experience in High-end fitouts and Bespoke Solutions, delivering exceptional quality and precision in every project.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <h3 class="fs-4">Proven Results</h3>
                                    <p class="mb-0">Our portfolio showcases successful projects across various sectors, ensuring client satisfaction and long-term partnerships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3" data-cue="zoomIn">
                            <div class="col-4">
                                <div class="sarl-stat">
                                    <span class="sarl-stat__num" data-count-to="300" data-suffix="+">300+</span>
                                    <h3 class="sarl-stat__label mb-0">Completed Projects</h3>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="sarl-stat">
                                    <span class="sarl-stat__num" data-count-to="250" data-suffix="+">250+</span>
                                    <h3 class="sarl-stat__label mb-0">Clients</h3>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="sarl-stat">
                                    <span class="sarl-stat__num" data-count-to="35" data-suffix="+">35+</span>
                                    <h3 class="sarl-stat__label mb-0">Years of Experience</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5" data-cue="slideInRight">
                        <div class="sarl-logo-panel">
                            <img src="assets/images/hero-2.jpg" alt="" class="sarl-logo-panel__bg" loading="lazy" />
                            <span class="sarl-orbits" aria-hidden="true"></span>
                            <a href="about.php" class="sarl-brand" aria-label="About SARL"><?php sarl_logo(); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section -->


        <!--Our Services start-->
        <section class="py-lg-9 py-6 bg-gray-800 sarl-services position-relative overflow-hidden">
            <span class="sarl-orbits" aria-hidden="true"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="mb-xl-6 mb-5" data-cues="slideInLeft" data-duration="2000">
                            <span class="sarl-eyebrow">What we do</span>
                            <h2 class="mb-0 mt-3 h1 text-white-stable">Our Services</h2>
                        </div>
                    </div>
                </div>

                 <!-- Service 1: Interior Fitouts -->
                 <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-6 col-md-6 col-12" data-cues="slideInLeft" data-duration="1000">
                        <!-- Carousel 3 -->
                        <div id="carouselService3" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/interior1.jpg" alt="Interior Fitout 1" class="img-fluid rounded-3 carousel-image"  />
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/projects/p-6.jpg" alt="Interior Fitout 2" class="img-fluid rounded-3 carousel-image"  />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselService3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselService3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6 col-12" data-cues="slideInRight" data-duration="2000">
                        <span class="sarl-num">01</span>
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3 text-white-stable">Interior Fitouts</h3>
                            <p class="mb-0">Comprehensive interior solutions that transform spaces into masterpieces, from initial design concept to final execution.</p>
                        </div>
                        <a href="service.php?id=2&interior-fitouts" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 2: Aluminium & Glazing Works -->
                <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-5 col-md-6 col-12 order-2" data-cues="slideInLeft" data-duration="2000">
                        <span class="sarl-num">02</span>
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3 text-white-stable">Aluminium & Glazing Works</h3>
                            <p class="mb-0">High-quality, customized solutions for aluminium fabrications, combining modern aesthetics with durability and functionality.</p>
                        </div>
                        <a href="service.php?id=3&aluminium-&-glazing-works" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-6 col-12 order-md-2" data-cues="slideInRight" data-duration="1000">
                        <!-- Carousel 4 -->
                        <div id="carouselService4" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/address.jpg" alt="Aluminium & Glazing 1" class="img-fluid rounded-3 carousel-image" />
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/glazing2.jpg" alt="Aluminium & Glazing 2" class="img-fluid rounded-3 carousel-image" />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselService4" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselService4" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Stainless & Mild Steel -->
                <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-6 col-md-6 col-12" data-cues="slideInLeft" data-duration="1000">
                        <!-- Carousel 1 -->
                        <div id="carouselService1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/stainless1.jpg" alt="Stainless & Mild Steel 1" class="img-fluid rounded-3 carousel-image"  />
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/service/s1.jpg" alt="Stainless & Mild Steel 2" class="img-fluid rounded-3 carousel-image"  />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselService1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselService1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6 col-12" data-cues="slideInRight" data-duration="2000">
                        <span class="sarl-num">03</span>
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3 text-white-stable">Stainless & Mild Steel</h3>
                            <p class="mb-0">Delivering durable and aesthetically pleasing steel fabrications for diverse applications, combining strength with sophisticated design.</p>
                        </div>
                        <a href="service.php?id=5&stainless-&-mild-steel-fabrications" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 4: Joinery Works -->
                <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-5 col-md-6 col-12 order-2" data-cues="slideInLeft" data-duration="2000">
                        <span class="sarl-num">04</span>
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3 text-white-stable">Joinery Works</h3>
                            <p class="mb-0">Premium joinery works delivering bespoke interiors with unmatched craftsmanship, creating unique and elegant spaces.</p>
                        </div>
                        <a href="service.php?id=6&joinery-works" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-6 col-12 order-md-2" data-cues="slideInRight" data-duration="1000">
                        <!-- Carousel 2 -->
                        <div id="carouselService2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/joinery1.jpg" alt="Joinery Works 1" class="img-fluid rounded-3 carousel-image" />
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/joinery2.jpeg" alt="Joinery Works 2" class="img-fluid rounded-3 carousel-image"  />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselService2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselService2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

               

            </div>
        </section>
        <!--Our Services end-->

        <!-- Free Quotation CTA start -->
        <section class="py-lg-8 py-5 bg-gray-900">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-7">
                                <div class="text-center text-md-start mb-6 mb-md-0">
                                    <h2 class="text-white-stable">Need to make an inquiry?</h2>
                                    <p class="mb-0 text-dark-50">Contact us today to get a personalized quote for your project. Our team is ready to assist with expert services tailored to your needs.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="text-center" data-cues="bounceInRight">
                                    <a href="contact.php" class="btn btn-primary"  >Speak to an Expert Today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Free Quotation CTA end -->

        <!--Company overview start-->
        <section class="py-xl-9 py-5" data-cue="fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center mb-xl-7 mb-5">
                            <small class="text-uppercase ls-md fw-semibold text-primary">Discover SARL</small>
                            <h2 class="mb-0 mt-3">Excellence in Every Detail Since 1992</h2>
                        </div>
                    </div>
                </div>
                <div class="row" data-cue="fadeIn">
                    <div class="col-12">
                        <div class="tabs-to-dropdown">
                            <div class="nav-wrapper mx-md-10 mb-lg-8 mb-5">
                                <ul class="nav nav-fill d-none d-lg-flex nav-line-bottom nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="pills-company-tab" data-bs-toggle="pill" href="#pills-company" role="tab" aria-controls="pills-company" aria-selected="true">
                                            Who We Are
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-commitments-tab" data-bs-toggle="pill" href="#pills-commitments" type="button" role="tab" aria-controls="pills-commitments" aria-selected="false">
                                            Our Values
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-team-tab" data-bs-toggle="pill" href="#pills-team" type="button" role="tab" aria-controls="pills-team" aria-selected="false">Project Experience</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContentOne">
                                <div class="tab-pane fade show active" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab" tabindex="0">
                                    <div class="row align-items-center gy-5">
                                        <div class="col-lg-5" data-cue="zoomIn">
                                            <div class="d-flex flex-column gap-4">
                                                <div class="d-flex flex-column gap-2">
                                                    <h2>East Africa's Premier High-End Interior Solutions</h2>
                                                    <p class="mb-0">
                                                        Specialized Aluminium Renovators Limited (SARL) stands as a beacon of excellence in high-end interior fitouts and bespoke aluminium solutions. Since 1992, we've transformed spaces across East Africa, combining innovative design with precise craftsmanship.
                                                    </p>
                                                </div>
                                                <div>
                                                    <a href="about.php" class="btn btn-primary rounded-pill">Discover Our Story</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7" data-cue="zoomIn">
                                            <div class="position-relative video-wrapper">
                                                <div class="sarl-video-container rounded-3">
                                                    <video
                                                        class="sarl-video w-100 h-100 rounded-3"
                                                        playsinline
                                                        autoplay
                                                        muted
                                                        loop>
                                                        <source src="assets/videos/sarl-vid4.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-commitments" role="tabpanel" aria-labelledby="pills-commitments-tab" tabindex="0">
                                    <div class="row g-4" data-cue="zoomIn">
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="d-flex flex-column gap-4 text-center text-lg-start mx-4 mx-lg-auto">
                                                <div>
                                                    <span class="bg-primary bg-opacity-10 rounded icon-shape icon-xl d-inline-flex align-items-center justify-content-center">
                                                        <i class="bi bi-people-fill text-primary" style="font-size: 2.5rem;"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h3>Client Focus</h3>
                                                    <p class="mb-0">Each client receives our undivided attention, ensuring their vision is realized through cost-effective and innovative solutions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="d-flex flex-column gap-4 text-center text-lg-start mx-4 mx-lg-auto">
                                                <div>
                                                    <span class="bg-primary bg-opacity-10 rounded icon-shape icon-xl d-inline-flex align-items-center justify-content-center">
                                                        <i class="bi bi-award-fill text-primary" style="font-size: 2.5rem;"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h3>Excellence</h3>
                                                    <p class="mb-0">Our highly motivated team of skilled craftsmen ensures superior quality in every detail of your project.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="d-flex flex-column gap-4 text-center text-lg-start mx-4 mx-lg-auto">
                                                <div>
                                                    <span class="bg-primary bg-opacity-10 rounded icon-shape icon-xl d-inline-flex align-items-center justify-content-center">
                                                        <i class="bi bi-lightbulb-fill text-primary" style="font-size: 2.5rem;"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h3>Innovation</h3>
                                                    <p class="mb-0">We consistently push boundaries in design and execution, creating unique and sophisticated spaces that exceed expectations.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-team" role="tabpanel" aria-labelledby="pills-team-tab" tabindex="0">
                                    <div class="row align-items-center gy-5">
                                        <div class="col-lg-7" data-cue="zoomIn">
                                            <div class="project-image-container">
                                                <img src="assets/images/hero-2.jpg" alt="SARL Projects Showcase" class="img-fluid rounded-3 w-100 h-100 project-showcase-image" />
                                            </div>
                                        </div>
                                        <div class="col-lg-5 pe-lg-6" data-cue="zoomIn">
                                            <div class="d-flex flex-column gap-4">
                                                <div class="d-flex flex-column gap-2">
                                                    <h3 class="mb-0">Unparalleled Project Experience</h3>
                                                    <p class="mb-0">
                                                        With over 300 successful projects and 35+ years of excellence, SARL has established itself as the go-to partner for luxury fitouts and bespoke solutions. Our portfolio spans prestigious commercial spaces, high-end residential projects, and landmark developments across East Africa.
                                                    </p>
                                                </div>
                                                <div>
                                                    <a href="projects.php" class="btn btn-primary rounded-pill">View Our Projects</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Company overview end-->


        <!--Case studies start-->
        <section class="py-xl-9 py-6 bg-gray-900 position-relative overflow-hidden">
            <span class="sarl-orbits" aria-hidden="true"></span>
            <div class="container">
                <div class="row align-items-end mb-xl-7 mb-5 g-4">
                    <div class="col-lg-7">
                        <span class="sarl-eyebrow">Featured Projects</span>
                        <h2 class="my-3 text-white-stable display-6">Explore Our Portfolio</h2>
                        <p class="mb-0">Discover how SARL’s expertise has been instrumental in transforming spaces across various sectors.</p>
                    </div>
                    <div class="col-lg-5 text-lg-end">
                        <a href="projects.php" class="btn btn-outline-light rounded-pill px-4">View Our Projects Collection <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="row g-4">
                    <?php foreach ($home_cases as $i => $hc) {
                        $row = $hc['row'];
                        $cs = $hc['cs'];
                        $href = 'project.php?id=' . $hc['id'] . '&' . slagify($row['title']);
                        $col = $i === 0 ? 'col-lg-8' : 'col-lg-4 col-md-6';
                        if ($i === 1) { $col = 'col-lg-4 col-md-6'; }
                    ?>
                    <div class="<?php echo $col; ?>" data-cue="fadeIn">
                        <a href="<?php echo htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>" class="cs-tile<?php echo $i === 0 ? ' cs-tile--wide h-100' : ''; ?>">
                            <img loading="lazy" src="uploads/<?php echo rawurlencode($cs['hero']); ?>" alt="<?php echo htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8'); ?>" />
                            <span class="cs-tile__go" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                            <span class="cs-tile__body">
                                <span class="cs-tile__kicker">Case Study &middot; <?php echo htmlspecialchars($row['year'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <h3 class="cs-tile__title"><?php echo htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <span class="cs-tile__meta d-block"><?php echo htmlspecialchars(implode(' · ', array_slice($cs['services'], 0, 2)), ENT_QUOTES, 'UTF-8'); ?></span>
                            </span>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--Case studies end-->


        <!--our Partners-->
        <section class="py-lg-9 py-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-xl-7 mb-5">
                            <span class="sarl-eyebrow">Working together</span>
                            <h2 class="mb-3 mt-3">Our Partners</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ([39, 40, 41] as $p) { ?>
                    <div class="col-lg-4 col-md-6 col-12" data-cue="fadeIn">
                        <figure class="sarl-partner">
                            <img src="assets/images/sarl-clients/<?php echo $p; ?>.png" alt="Partner logo" style="max-width: 200px;" class="img-fluid" />
                        </figure>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--our partners-->

        <!--Clients-->
        <section class="py-lg-9 py-6 sarl-section-mist-deep sarl-clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-xl-7 mb-5">
                            <span class="sarl-eyebrow">Trusted by</span>
                            <h2 class="mb-3 mt-3">Our Clients</h2>
                        </div>
                    </div>
                </div>

                <div class="marquee" style="height: 150px">
                    <div class="track" style="height: 150px">
                        <?php for ($i = 1; $i < 39; $i++) { ?>
                        <span class="border rounded-3 mx-1 mb-0 p-3">
                            <img src="assets/images/sarl-clients/<?php echo $i; ?>.png" alt="Client logo" style="max-width: 100px;" loading="lazy" />
                        </span>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </section>
        <!--Clients-->


        <!--Why Us start-->
        <section class="my-lg-7 py-6 d-none">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5 col-12">
                        <div class="mb-6" data-cues="slideInDown" data-duration="1000">
                            <small class="border rounded-pill border-primary-subtle text-primary text-uppercase px-3 py-2 fw-semibold">Craftsmanship</small>
                            <h2 class="mt-4">Excellence in Every Detail</h2>
                        </div>
                        <div class="mb-6">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex mb-3">
                                    <span>
                                        <i class="bi bi-check-circle-fill text-primary text-opacity-50"></i>
                                    </span>
                                    <span class="ms-2">
                                        <span class="text-dark fw-semibold">End-to-End Solutions:</span>
                                        From design to installation, SARL handles every aspect of your project with precision and care.
                                    </span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span>
                                        <i class="bi bi-check-circle-fill text-primary text-opacity-50"></i>
                                    </span>
                                    <span class="ms-2">
                                        <span class="text-dark fw-semibold">Trusted Craftsmanship:</span>
                                        Our skilled team delivers quality workmanship, ensuring every detail meets your high standards.
                                    </span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span>
                                        <i class="bi bi-check-circle-fill text-primary text-opacity-50"></i>
                                    </span>
                                    <span class="ms-2">
                                        <span class="text-dark fw-semibold">Customer Satisfaction:</span>
                                        Over 150 clients across East Africa trust SARL for our commitment to excellence.
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <a href="contact.php" class="btn btn-primary me-2">Contact Us</a>
                        <a href="careers.php" class="btn btn-outline-primary">Apply for a Job</a>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="position-relative mx-3" data-cues="slideInRight" data-duration="1000">
                            <figure>
                                <img src="assets/images/service.jpg" alt="SARL Support" class="rounded-3 img-fluid px-lg-1" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Us end-->

        <!-- CTA start -->
        <div class="container py-lg-8 py-5" data-cues="fadeIn" data-duration="2000">
            <div class="row px-lg-8 py-lg-8 p-5 align-items-center sarl-cta-band g-lg-0">
                <span class="sarl-orbits" aria-hidden="true"></span>
                <div class="col-xl-6 col-md-7">
                    <h2 class="display-6">Get in Touch for Your Next Project</h2>
                    <p class="lead mb-md-0">Let SARL help you bring your next project to life with our expertise and dedication to quality.</p>
                </div>
                <div class="offset-xl-1 col-xl-5 col-md-5">
                    <div class="text-md-end">
                        <a href="contact.php" class="btn btn-primary btn-lg sarl-cta">Contact Us Now</a>
                        <p class="mt-3 mb-0">Get a tailored solution for your space.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA end -->

    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>


    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>


    <!-- Hero Slider JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.hero-slide');
            const dotsWrap = document.querySelector('.sarl-hero-dots');
            const delay = 5000;
            let currentSlide = 0;
            let timer = null;
            if (!slides.length) return;

            // progress bars under the hero, one per slide
            const dots = Array.from(slides).map(function(slide, i) {
                const b = document.createElement('button');
                b.type = 'button';
                b.tabIndex = -1;
                b.style.setProperty('--hero-delay', (delay / 1000) + 's');
                b.addEventListener('click', function() { goTo(i); });
                if (dotsWrap) dotsWrap.appendChild(b);
                return b;
            });

            function goTo(i) {
                slides[currentSlide].classList.remove('active');
                dots[currentSlide].classList.remove('is-active');
                currentSlide = (i + slides.length) % slides.length;
                slides[currentSlide].classList.add('active');
                // restart the progress animation
                void dots[currentSlide].offsetWidth;
                dots[currentSlide].classList.add('is-active');
                clearTimeout(timer);
                timer = setTimeout(function() { goTo(currentSlide + 1); }, delay);
            }

            goTo(0);
        });

        // Make sure the overview video keeps playing where autoplay is allowed
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.querySelector('.sarl-video');
            if (!video) return;
            video.play().catch(function() {});
        });
    </script>

</body>


</html>
