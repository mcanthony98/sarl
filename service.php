<?php
require "includes/connect.php";

$sid = $_GET['id'];
$profres = $conn->query("SELECT * FROM service WHERE service_id='$sid'");
$row = $profres->fetch_assoc();
?>
<!doctype html>
<html lang="en">

<head>

    <title><?php echo $row['name'];?> | SARL</title>
    <meta name="description" content="<?php echo $row['short_desc'];?>">

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>


    <main>
        <!--Page Content-->
        <!--Overview start-->
        <section class="py-5 py-lg-6">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-md-12">
                        <div class="mb-4">
                            <a href="services.php" class="text-reset icon-link icon-link-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path
                                        fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg>
                                Back to Services
                            </a>
                        </div>

                        <div class="d-md-flex align-items-center justify-content-between mb-6">
                            <div class="d-flex align-items-center mb-4 mb-md-0">
                                <div class="icon-shape icon-xxl border rounded p-4 bg-white">
                                    <img src="assets/images/logo/sarl-about-logo.jpg" style="height: 40px;" alt="SARL Logo" />
                                </div>
                                <div class="ms-3">
                                    <h1 class="mb-0 h2"><?php echo $row['name'];?></h1>
                                    <span class="small"><?php echo $row['short_desc'];?></span>
                                </div>

                            </div>
                            <div class="d-grid"> 
                                <a href="contact.php?service=<?php echo $sid;?>" class="btn btn-dark text-nowrap">Get this Service</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                        <!-- Image Slider Start -->
                        <div id="projectCarousel" class="carousel slide mb-lg-5 mb-md-3 mb-3" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img loading="lazy" src="uploads/<?php echo $row['image'];?>" alt="<?php echo $row['name'];?>" class="d-block w-100 rounded-3" style="height: 400px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <!-- Image Slider End -->
                        <div class="mb-5 mb-md-4">
                        <?php echo $row['long_desc'];?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Overview end-->

        <!--Call to action start-->
        <section>
            <div class="container py-5">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-md-12">
                        <div class="bg-pattern bg-primary rounded-3 py-5">
                            <div class="text-center position-relative z-1 py-4">
                                <h2 class="text-white-stable mb-4">Transform your Space with SARL's Expertise</h2>
                                <a href="contact.php?service=<?php echo $sid;?>" class="btn btn-dark">Get This Service Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Call to action end-->


    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>


    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

</body>


</html>