<?php
require "includes/connect.php";

$servresalll = $conn->query("SELECT * FROM service WHERE status=1");
?>
<!doctype html>
<html lang="en">

<head>

    <title>Services | SARL</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <main>
        <!--Page Content-->
        <!--Pageheader start-->
        <section class="py-5 py-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="text-center">
                            <small class="text-uppercase ls-md fw-bold text-primary">Services</small>
                            <h1 class="mt-4">High-End Interior Fitouts & Innovative Aluminium Solutions</h1>
                            <p class="lead">SARL offers specialized services to meet the unique needs of our clients, ensuring exceptional quality and innovation in every project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Pageheader end-->

        <!--Service start-->
        <section class="mb-xl-9 my-4">
            <div class="container">
                <div class="row g-7">

                <?php while($servrow = $servresalll->fetch_assoc()){?>
                    <!-- Aluminium Fabrications -->
                    <div class="col-sm-6 col-md-6">
                        <div class="position-relative mb-7">
                            <a href="service.php?id=<?php echo $servrow['service_id'];?>&<?php echo $servrow['slag'];?>">
                                <img src="uploads/<?php echo $servrow['image'];?>" style="height:300px; width:600px;" alt="<?php echo $servrow['name'];?>" loading="lazy" class="rounded-3 img-fluid" />
                            </a>
                            <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                                <div class="p-3 icon-xl icon-shape rounded bg-primary border border-2 border-white ms-md-10">
                                    <i class="bi bi-tools text-white-stable" style="font-size: 24px;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="px-lg-4">
                            <a href="service.php?id=<?php echo $servrow['service_id'];?>&<?php echo $servrow['slag'];?>">
                                <h2 class="mb-3 h3"><?php echo $servrow['name'];?></h2>
                            </a>
                            <p class="mb-5"><?php echo $servrow['short_desc'];?></p>
                            <a href="service.php?id=<?php echo $servrow['service_id'];?>&<?php echo $servrow['slag'];?>" class="btn btn-primary">
                                Get This Service Today
                            </a>
                        </div>
                    </div>
                <?php } ?>


                </div>
            </div>
        </section>
        <!--Service end-->

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
                                <div class="text-center">
                                    <a href="contact.php" class="btn btn-primary">Speak to an Expert Today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Free Quotation CTA end -->


    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

</body>

</html>