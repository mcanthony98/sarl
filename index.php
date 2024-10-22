<?php
session_start();
require "includes/connect.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d");
$eres = $conn->query("SELECT * FROM event WHERE event_status = 1  ORDER BY event_id DESC LIMIT 7");
?>
<!doctype html>
<html lang="en">

<head>

    <title>Home | SARL</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

    <!-- Hero Slider -->
    <style>
        .hero-section {
            overflow: hidden;
        }

        .hero-slides-container {
            z-index: 1;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-slide.active {
            opacity: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        .container {
            z-index: 3;
        }

        .hero-content {
            padding: 2rem;
        }

        .text-white-50 {
            color: rgba(255, 255, 255, 0.8) !important;
        }

        .gap-4 {
            gap: 1.5rem;
        }

        .link-white {
            color: white;
            text-decoration: none;
        }

        .link-white:hover {
            color: rgba(255, 255, 255, 0.8);
        }

        /* Desktop */
        .nav-link.mobile-text-dark {
            color: #fff !important;
        }

        /* Mobile Navbar Styling */
        @media (max-width: 991px) {
            .nav-link.mobile-text-dark {
                color: #000 !important;
            }

            .nav-link.dropdown-toggle.mobile-text-dark {
                color: #000 !important;
            }

            .offcanvas-nav {
                background-color: #fff !important;
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
        <section class="hero-section position-relative" style="height: 100vh;">
            <!-- Hero Slides Container -->
            <div class="hero-slides-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                <div class="hero-slide active" style="background-image: url('assets/images/service.jpg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/project.jpg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/hero-1.jpg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/hero-2.jpg');"></div>
                <div class="hero-slide" style="background-image: url('assets/images/hero-3.jpg');"></div>
            </div>

            <!-- Overlay -->
            <div class="overlay"></div>

            <!-- Hero Content -->
            <div class="container position-relative h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-9 col-12">
                        <div class="hero-content">
                            <h1 class="text-white display-4 mb-4">High-End Fitout & Aluminium Solutions</h1>
                            <p class="text-white-50 lead mb-5">
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
        </section>


        <!-- about section -->
        <section class="py-xl-8 py-lg-7 py-2" data-cue="fadeIn">
            <div class="container">
                <div class="row align-items-center gy-6">
                    <div class="col-xl-6 col-lg-7" data-cue="slideInLeft">
                        <div class="pe-lg-8 me-lg-8 mb-4">
                            <h2 class="mb-0 me-lg-8">
                                Why Choose
                                <span class="text-primary fw-semibold">SARL</span>
                                for Your Next Project?
                            </h2>
                        </div>
                        <div class="row mb-7 gy-3" data-cue="zoomIn">
                            <div class="col-lg-6">
                                <div>
                                    <h3 class="fs-4">Expertise</h3>
                                    <p class="mb-0">Years of experience in High-end fitout and Bespoke Solutions, delivering exceptional quality and precision in every project.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <h3 class="fs-4">Proven Results</h3>
                                    <p class="mb-0">Our portfolio showcases successful projects across various sectors, ensuring client satisfaction and long-term partnerships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row" data-cue="zoomIn">
                            <div class="col-4 border-end">
                                <div class="ps-md-4">
                                    <h3 class="fs-5">Completed Projects</h3>
                                    <span class="fs-2 fw-bold text-primary">400+</span>
                                </div>
                            </div>

                            <div class="col-4 border-end">
                                <div class="ps-md-4">
                                    <h3 class="fs-5">Clients</h3>
                                    <span class="fs-2 fw-bold text-primary">150+</span>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="ps-md-4">
                                    <h3 class="fs-5">Years of Experience</h3>
                                    <span class="fs-2 fw-bold text-primary">35+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5" data-cue="slideInRight">
                        <div>
                            <img src="assets/images/SARL.png" alt="About SARL" class="img-fluid rounded-3" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section -->


        <!--Our Services start-->
        <section class="my-xl-9 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="mb-xl-6 mb-5">
                            <h2 class="mb-0">Our Services</h2>
                        </div>
                    </div>
                </div>

                <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-6 col-md-6 col-12">
                        <figure class="mb-4 mb-md-0">
                            <img src="assets/images/landings/it-company/service-1.jpg" alt="Stainless & Mild Steel Services" class="img-fluid rounded-3" style="width: 100%; height: auto;" />
                        </figure>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                        <span class="text-primary fw-semibold">01</span>
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3">Stainless & Mild Steel</h3>
                            <p class="mb-0">
                                Delivering durable and aesthetically pleasing steel fabrications for diverse applications, combining strength with sophisticated design.
                            </p>
                        </div>
                        <a href="services.php#steel" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-5 col-md-6 col-12 order-2">
                        <span class="text-primary fw-semibold">02</span>
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3">Joinery Works</h3>
                            <p class="mb-0">
                                Premium joinery works delivering bespoke interiors with unmatched craftsmanship, creating unique and elegant spaces.
                            </p>
                        </div>
                        <a href="services.php#joinery" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-6 col-12 order-md-2">
                        <figure class="mb-4">
                            <img src="assets/images/landings/it-company/service-2.jpg" alt="Joinery Works Services" class="img-fluid rounded-3" style="width: 100%; height: auto;" />
                        </figure>
                    </div>
                </div>

                <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-6 col-md-6 col-12">
                        <figure class="mb-4 mb-md-0">
                            <img src="assets/images/landings/it-company/service-3.jpg" alt="Interior Fitout Services" class="img-fluid rounded-3" style="width: 100%; height: auto;" />
                        </figure>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                        <span class="text-primary fw-semibold">03</span>
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3">Interior Fitouts</h3>
                            <p class="mb-0">
                                Comprehensive interior solutions that transform spaces into masterpieces, from initial design concept to final execution.
                            </p>
                        </div>
                        <a href="services.php#interior" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-5 col-md-6 col-12 order-2">
                        <span class="text-primary fw-semibold">04</span>
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3">Aluminium & Glazing Works</h3>
                            <p class="mb-0">
                                High-quality, customized solutions for aluminium fabrications, combining modern aesthetics with durability and functionality.
                            </p>
                        </div>
                        <a href="services.php#aluminum" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-6 col-12 order-md-2">
                        <figure class="mb-4">
                            <img src="assets/images/landings/it-company/service-4.jpg" alt="Aluminium & Glazing Services" class="img-fluid rounded-3" style="width: 100%; height: auto;" />
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!--Our Services end-->





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
                                            <div class="position-relative">
                                                <img src="assets/images/landings/it-company/it-company-about-img.jpg" alt="about" class="rounded-3 img-fluid" />

                                                <!-- Play Button for Video Popup -->
                                                <a href="assets/videos/sarl.mp4" class="play-btn glightbox position-absolute top-50 start-50 translate-middle icon-shape icon-xl rounded-circle text-primary" data-glightbox="type: video" data-width="900" data-height="500">
                                                    <i class="bi bi-play-fill"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-commitments" role="tabpanel" aria-labelledby="pills-commitments-tab" tabindex="0">
                                    <div class="row g-4" data-cue="zoomIn">
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="d-flex flex-column gap-4 text-center text-lg-start mx-4 mx-lg-auto">
                                                <div>
                                                    <span class="bg-primary bg-opacity-10 rounded icon-shape icon-xl">
                                                        <img src="assets/images/landings/it-company/innovation.svg" alt="innovation" />
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
                                                    <span class="bg-primary bg-opacity-10 rounded icon-shape icon-xl">
                                                        <img src="assets/images/landings/it-company/integrity.svg" alt="integrity" />
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
                                                    <span class="bg-primary bg-opacity-10 rounded icon-shape icon-xl">
                                                        <img src="assets/images/landings/it-company/hands-clapping.svg" alt="clapping" />
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
                                            <div class="d-flex gap-lg-4 gap-2 justify-content-center">
                                                <div class="mt-5">
                                                    <img src="assets/images/landings/it-company/team-long-img-1.jpg" alt="team" class="img-fluid rounded-3" />
                                                </div>
                                                <div>
                                                    <img src="assets/images/landings/it-company/team-long-img-2.jpg" alt="team" class="img-fluid rounded-3" />
                                                </div>
                                                <div class="mt-5">
                                                    <img src="assets/images/landings/it-company/team-long-img-3.jpg" alt="team" class="img-fluid rounded-3" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 pe-lg-6" data-cue="zoomIn">
                                            <div class="d-flex flex-column gap-4">
                                                <div class="d-flex flex-column gap-2">
                                                    <h3 class="mb-0">Unparalleled Project Experience</h3>
                                                    <p class="mb-0">
                                                        With over 400 successful projects and 35+ years of excellence, SARL has established itself as the go-to partner for luxury fitouts and bespoke solutions. Our portfolio spans prestigious commercial spaces, high-end residential projects, and landmark developments across East Africa.
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

        <!--Projects start-->
        <section class="py-xl-9 py-5 bg-gray-900">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="text-center mb-xl-7 mb-5">
                            <small class="text-uppercase ls-md fw-semibold text-primary">Featured Projects</small>
                            <h2 class="my-3 text-white-stable">Explore Our Portfolio</h2>
                            <p class="mb-0 text-body">Discover how SARL’s expertise has been instrumental in transforming spaces across various sectors.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container swiper" id="swiper-1" data-pagination-type="" data-speed="400" data-space-between="100" data-pagination="false" data-navigation="true" data-autoplay="true" data-autoplay-delay="3000" data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 2}, "1200": {"slidesPerView": 3}}'>
                    <div class="swiper-wrapper pb-lg-8 pb-6 pt-1">

                        <?php while ($erow = $eres->fetch_assoc()) { ?>
                            <!-- Slide 1 -->
                            <div class="swiper-slide" data-cue="zoomIn">
                                <div class="card border-0 h-100 card-lift">
                                    <a href="project.php?id=<?php echo $erow['event_id']; ?>&<?php echo slagify($erow['title']); ?>"><img loading="lazy" src="uploads/<?php echo $erow['cover_image']; ?>" alt="project at <?php echo $erow['title']; ?>" class="img-fluid rounded-top-3" /></a>
                                    <div class="card-body">
                                        <div class="d-flex flex-column gap-2">
                                            <h4><a href="project.php?id=<?php echo $erow['event_id']; ?>&<?php echo slagify($erow['title']); ?>" class="text-reset"><?php echo $erow['title']; ?></a></h4>
                                            <p class="mb-1"><?php echo $erow['short_desc']; ?></p>
                                            <a href="project.php?id=<?php echo $erow['event_id']; ?>&<?php echo slagify($erow['title']); ?>" class="btn btn-primary">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                        <!-- Add more slides as needed -->
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-navigation position-absolute bottom-0 mb-5 start-lg-50">
                        <div class="swiper-button-prev me-7"></div>
                        <div class="swiper-button-next ms-7"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Projects end-->


        <!--Why Us start-->
        <section class="my-lg-7 py-6">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5 col-12">
                        <div class="mb-6">
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
                        <div class="position-relative mx-3">
                            <figure>
                                <img src="assets/images/service.jpg" alt="SARL Support" class="rounded-3 img-fluid px-lg-1" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Us end-->

        <!-- CTA start -->
        <div class="container py-5" data-bs-theme="dark">
            <div class="row px-lg-6 py-lg-6 p-4 align-items-center bg-primary rounded-3 g-lg-0">
                <div class="col-xl-5 col-md-7">
                    <h2 class="text-white-stick">Get in Touch for Your Next Project</h2>
                    <p class="text-white-stick">Let SARL help you bring your next project to life with our expertise and dedication to quality.</p>
                </div>
                <div class="offset-xl-2 col-xl-5 col-md-5">
                    <div class="text-lg-center">
                        <p class="text-white-stick">Contact us today to discuss your requirements and receive a tailored solution.</p>
                        <a href="contact.php" class="btn btn-dark">Contact Us Now</a>
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
            let currentSlide = 0;

            function showNextSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }

            setInterval(showNextSlide, 3000);
        });
    </script>

</body>


</html>