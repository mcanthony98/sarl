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
        .hero-slider {
            position: relative;
            width: 100%;
            height: 65vh;
            overflow: hidden;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
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
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .hero-content h1 {
            font-size: 2.7rem;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        .hero-content .btn {
            font-size: 1rem;
        }

        .gap-4 {
            gap: 1.5rem;
        }

        .gap-6 {
            gap: 2rem;
        }
    </style>

</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>


    <main>
        <!--Page Content-->

        <!--Hero start-->
        <section class="hero-slider">
            <!-- Overlay -->
            <div class="overlay"></div>

            <!-- Bg Slider -->
            <div class="hero-slide active" style="background-image: url('assets/images/service.jpg');"></div>
            <div class="hero-slide" style="background-image: url('assets/images/project.jpg');"></div>
            <div class="hero-slide" style="background-image: url('assets/images/hero-1.jpg');"></div>
            <div class="hero-slide" style="background-image: url('assets/images/hero-2.jpg');"></div>
            <div class="hero-slide" style="background-image: url('assets/images/hero-3.jpg');"></div>

            <!-- Hero -->
            <div class="container hero-content py-lg-10" data-cue="fadeIn">
                <div class="row py-lg-10 justify-content-center text-center">
                    <div class="col-lg-10 col-12">
                        <div class="d-flex flex-column gap-6">
                            <div class="d-flex flex-column gap-4">
                                <h1 class="text-white-stable display-4 mb-0">High-End Fitout & Aluminium Solutions</h1>
                                <p class="mb-0 text-white lead px-lg-10">
                                    Innovative designs and precise craftsmanship, creating unparalleled spaces with SARL's expertise in high-end fitouts and bespoke aluminium solutions.
                                </p>
                            </div>
                            <div class="d-md-flex d-grid align-items-center justify-content-md-center gap-4">
                                <a href="contact.php" class="btn btn-primary rounded-pill">Reach Out Today!</a>
                                <a href="projects.php" class="link-white icon-link icon-link-hover card-grid-link d-flex justify-content-center">
                                    View Our Projects
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Hero end-->

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
                                    <p class="mb-0">Years of experience in fitout solutions, delivering exceptional quality and precision in every project.</p>
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

        <!-- services section -->
        <section class="pt-xl-6 pb-xl-10 py-lg-7 py-5" data-cue="fadeIn">
            <!--Logo section start-->
            <div class="container">
                <div class="row mb-6" data-cue="zoomIn">
                    <div class="col-lg-5">
                        <div>
                            <h2 class="mb-0">Our Expertise in High-end Fitout & Aluminium Solutions</h2>
                        </div>
                    </div>
                    <div class="offset-xl-1 col-xl-6">
                        <div>
                            <p class="mb-0">
                                SARL excels in delivering tailored solutions in high-end fitouts, and innovative solutions. Our expertise ensures that every project is a testament to our dedication to quality and precision.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6" data-cue="zoomIn" data-duration="600">
                        <div class="card bg-primary bg-opacity-10 p-4 border-0 h-100 card-lift">
                            <div class="mb-4">
                                <i class="bi bi-house-door-fill text-primary" style="font-size: 40px;"></i>
                            </div>
                            <div>
                                <h3>Stainless & Mild Steel</h3>
                                <p class="mb-0 text-primary-emphasis">Durable and aesthetically pleasing steel fabrications for diverse applications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-cue="zoomIn" data-duration="800">
                        <div class="card bg-success bg-opacity-10 p-4 border-0 h-100 card-lift">
                            <div class="mb-4">
                                <i class="bi bi-building text-success" style="font-size: 40px;"></i>
                            </div>
                            <div>
                                <h3>Joinery Works</h3>
                                <p class="mb-0 text-success-emphasis">Craftsmanship at its best, delivering premium joinery works for bespoke interiors.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6" data-cue="zoomIn" data-duration="1200">
                        <div class="card bg-danger bg-opacity-10 p-4 border-0 h-100 card-lift">
                            <div class="mb-4">
                                <i class="bi bi-tools text-danger" style="font-size: 40px;"></i>
                            </div>
                            <div>
                                <h3>Interior Fitouts</h3>
                                <p class="mb-0 text-danger-emphasis">Comprehensive interior solutions, from design to execution, transforming spaces into masterpieces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-cue="zoomIn" data-duration="600">
                        <div class="card bg-primary bg-opacity-10 p-4 border-0 h-100 card-lift">
                            <div class="mb-4">
                                <i class="bi bi-house-door-fill text-primary" style="font-size: 40px;"></i>
                            </div>
                            <div>
                                <h3>Aluminium Fitouts</h3>
                                <p class="mb-0 text-primary-emphasis">High-quality, customized solutions your aluminum fabrications.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services section -->

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

                    <?php while($erow = $eres->fetch_assoc()){?>
                        <!-- Slide 1 -->
                        <div class="swiper-slide" data-cue="zoomIn">
                            <div class="card border-0 h-100 card-lift">
                                <a href="project.php?id=<?php echo $erow['event_id'];?>&<?php echo slagify($erow['title']); ?>"><img loading="lazy" src="uploads/<?php echo $erow['cover_image'];?>" alt="project at <?php echo $erow['title'];?>" class="img-fluid rounded-top-3" /></a>
                                <div class="card-body">
                                    <div class="d-flex flex-column gap-2">
                                        <h4><a href="project.php?id=<?php echo $erow['event_id'];?>&<?php echo slagify($erow['title']); ?>" class="text-reset"><?php echo $erow['title'];?></a></h4>
                                        <p class="mb-1"><?php echo $erow['short_desc'];?></p>
                                        <a href="project.php?id=<?php echo $erow['event_id'];?>&<?php echo slagify($erow['title']); ?>" class="btn btn-primary">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>


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

    <script>
        // Hero Slider JS
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.hero-slide');
            let currentSlide = 0;

            function showNextSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }

            setInterval(showNextSlide, 5000);
        });
    </script>

</body>


</html>