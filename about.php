<?php
    session_start();
    require "includes/connect.php";
   
?>
<!doctype html>
<html lang="en">


<head>

    <title>About SARL | Nairobi’s Experts in Interior Fitouts, Aluminium & Steel Fabrication</title>

    <meta name="description" content="Learn about Specialized Aluminium Renovators Limited (SARL), Nairobi’s trusted name in high-end interior fitouts, aluminium & glazing, steel fabrication, and bespoke joinery since 1992.">
    <meta name="keywords" content="About SARL, interior fitout experts Nairobi, aluminium and glazing company Kenya, steel fabricators Nairobi, joinery company Kenya, SARL history, SARL profile">
    
    <!-- Open Graph Meta (for Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="About SARL | Trusted Fitout & Fabrication Experts in Kenya">
    <meta property="og:description" content="Established in 1992, SARL delivers bespoke aluminium, steel, and joinery works for commercial and residential projects across Kenya.">
    <meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://sarl.co.ke/assets/images/logo/sarl-about-logo.jpg"> 
    <meta property="og:site_name" content="SARL Kenya">


    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About SARL | Leading Interior & Metal Fabrication Company in Nairobi">
    <meta name="twitter:description" content="For over 30 years, SARL has specialized in high-end fitouts, aluminium glazing, steel fabrication, and custom joinery across Kenya.">
    <meta name="twitter:image" content="https://sarl.co.ke/assets/images/logo/sarl-about-logo.jpg"> 


    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <main>
        <!--Page Content-->

        <!--Who we are start-->
        <section class="mb-4 py-xl-5 py-5" data-cue="fadeIn">
            <div class="container pb-5">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6 col-md-12" data-cue="fadeIn" data-duration="1500">
                        <div class="me-xl-8">
                            <h1 class="mb-3">Introduction</h1>
                            <p class="lead mb-4">Innovation in Every Detail</p>
                            <p class="mb-6 me-xl-6">
                                Specialized Aluminium Renovators Limited (SARL) is a Nairobi-based company established in 1992, recognized across East Africa as high-end interior fitouts specialist and bespoke aluminium solutions. Our specialties serve a cross-section of the market—domestic, commercial, and contract customers.
                            </p>
                            <p class="mb-6 me-xl-6">
                                SARL has built its expertise through personal recommendations from many happy clients whose projects stand as testimony to our professional, reliable, friendly, timely, and disciplined work. SARL has been accredited as one of the top 100 mid-sized companies for several years from 2011 to 2019.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" data-cue="flipInX" data-duration="2000">
                        <figure>
                            <img src="assets/images/SARL.png" alt="About SARL" class="img-fluid rounded-3" />
                        </figure>
                    </div>
                </div>
            </div>

            <div class="container pb-5">
                <div class="row align-items-center text-justified g-4" >
                    <div class="col-lg-6 col-md-12" data-cue="slideInLeft">
                        <div class="mb-4">
                            <h1 class="mb-3">Our Mission</h1>
                            <p class="lead mb-4">Providing Unforgettable Experiences</p>
                            <p class="mb-2">
                                Our mission is to provide our clients with an unforgettable experience while creating their dream workspace. This is attained by providing excellent quality services at competitive prices. With highly trained and talented personnel, we personally attend to each project, giving clients our undivided attention. As a result, we receive repeat and referred clientele.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" data-cue="slideInRight">
                        <div class="mb-4">
                            <h1 class="mb-3">Our Vision</h1>
                            <p class="lead mb-4">Leading the Way in Interior Fit-Outs</p>
                            <p class="mb-2">
                                We aim to remain one of the leading interior fit-out contractors by constantly improving our services and expanding into new products to provide unique workspaces for our clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Who we are end-->



        <!--Our Core Values start-->
        <section class="mt-1 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div class="text-center mb-7" data-cue="slideInDown">
                            <h2 class="mb-0">Our Core Values</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-lg-7 gy-5">
                    <div class="col-lg-3 col-md-6" data-cue="fadeIn" data-duration="500">
                        <div class="mb-5 text-justified">
                            <i class="bi bi-people text-primary" style="font-size: 2rem;"></i>
                            <h4 class="mt-3">Our Clients</h4>
                            <p class="mb-0">
                                Each client is given our undivided attention, understanding their requirements and fulfilling them in the most cost-effective way possible.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-cue="fadeIn" data-duration="700">
                        <div class="mb-5 text-justified">
                            <i class="bi bi-award text-primary" style="font-size: 2rem;"></i>
                            <h4 class="mt-3">Our Team</h4>
                            <p class="mb-0">
                                Our highly motivated and skilled team, trained with years of varied experience, is our most valuable asset.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-cue="fadeIn" data-duration="900">
                        <div class="mb-5 text-justified">
                            <i class="bi bi-gear text-primary" style="font-size: 2rem;"></i>
                            <h4 class="mt-3">Our Suppliers</h4>
                            <p class="mb-0">
                                We build strong, long-term relationships with both local and international suppliers to ensure the highest quality of materials.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-cue="fadeIn" data-duration="1100">
                        <div class="mb-5 text-justified">
                            <i class="bi bi-people-fill text-primary" style="font-size: 2rem;"></i>
                            <h4 class="mt-3">Our Associates</h4>
                            <p class="mb-0">
                                We collaborate with the best services sub-contractors who, like us, provide excellent service and adhere to deadlines.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Our Core Values end-->

        <!--Team member start-->
        <section class="py-lg-9 py-5 bg-primary">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-4 col-6">
                        <div class="text-center" data-cue="slideInUp" data-duration="500">
                            <h2 class="text-white-stable">35+</h2>
                            <h5 class="text-white-stable mb-0">Years of Experience</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="text-center"  data-cue="slideInUp" data-duration="500">
                            <h2 class="text-white-stable">300+</h2>
                            <h5 class="text-white-stable mb-0">Projects Done</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="text-center"  data-cue="slideInUp" data-duration="500">
                            <h2 class="text-white-stable">250+</h5>
                                <h5 class="text-white-stable mb-0"> Clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team member end-->

          <!--our Partners-->
  <section class="my-lg-9 my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-xl-7 mb-5">
                    <h2 class="mb-3">Our Partners</h2>
                </div>
            </div>
        </div>
        <div class="row g-6">
            <div class="col-lg-4 col-md-6 col-12 ">
                <figure class="text-center border border-lg shadow">
                    <img src="assets/images/sarl-clients/39.png"
                        alt="logo" style="max-width: 200px;" />
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <figure class="text-center border border-lg shadow">
                    <img src="assets/images/sarl-clients/40.png"
                        alt="logo" style="max-width: 200px;"  />
                </figure>
            </div>
            <div class="col-lg-4 col-md-12 col-12">
                <figure class="text-center border border-lg shadow">
                    <img src="assets/images/sarl-clients/41.png"
                        alt="logo" style="max-width: 200px;"  />
                </figure>
            </div>
        </div>
    </div>
</section>
<!--our partners-->
<!--Clients-->
<section class="py-lg-9 py-6 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-xl-7 mb-5">
                    <h2 class="mb-3">Our Clients</h2>
                </div>
            </div>
        </div>

        <div class="marquee" style="height: 150px">
            <div class="track" style="height: 150px">
            <?php for($i=1;$i<25;$i++){?>
                <span
                    class="border rounded-3 mx-1 mb-0 p-3">
                    <img src="assets/images/sarl-clients/<?php echo $i;?>.png"
                        alt="logo" style="max-width: 100px;" />
                </span>
                <?php }?>
                <?php for($i=25;$i<39;$i++){?>
                <span
                    class="border rounded-3 mx-1 mb-0 p-3">
                    <img src="assets/images/sarl-clients/<?php echo $i;?>.png"
                        alt="logo" style="max-width: 100px;" />
                </span>
                <?php }?>
            </div>
        </div>

    </div>
</section>
<!--Clients-->


       

        <!--Behind the block start-->
        <section class="mb-lg-9 mb-5 mt-2"  data-cue="slideInUp" data-duration="1500">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="text-center mb-7">
                            <h2 class="mt-3">Our Leadership Team</h2>
                            <p class="mb-0">Driving innovation and excellence across all projects.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center gy-5">
                    <div class="col-lg-6 col-md-6 col-12 text-center">
                        <figure class="mb-4 zoom-img">
                            <img src="assets/images/user.png" alt="Jitu Chauhna" class="rounded-3 img-fluid mx-auto" />
                        </figure>
                        <div class="mb-4">
                            <h4 class="mb-1"><a href="single-project.php" class="text-reset">Kamaljeet Singh Sihra</a></h4>
                            <span class="fs-6">Chief Executive Officer (CEO)</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 text-center">
                        <figure class="mb-4 zoom-img">
                            <img src="assets/images/user.png" alt="Sandip Chauhan" class="rounded-3 img-fluid mx-auto" />
                        </figure>
                        <div class="mb-4">
                            <h4 class="mb-1"><a href="single-project.php" class="text-reset">Kulvinder Singh Sihra</a></h4>
                            <span class="fs-6">Chief Operations Officer (COO)</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Behind the block end-->

    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

</body>

</html>