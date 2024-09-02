<?php
session_start();
require "includes/connect.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d");
$eres = $conn->query("SELECT * FROM event WHERE event_status = 1  ORDER BY event_id DESC");
?>
<!doctype html>
<html lang="en">

<head>

    <title>Projects | SARL</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>


    <main>
        <!--Page Content-->
        <!--Square Pattern Start-->
        <!--Square Pattern End-->

        <!--Pageheader start-->
        <section class="py-5 py-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="text-center">
                            <h1 class="mb-3">Our Projects</h1>
                            <p class="mb-0 text-center" style="text-align: justify; text-align-last: center;">
                                Discover how we transform spaces and bring visions to life with precision, innovation, and unmatched quality.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Pageheader end-->

        <!--career study start-->
        <section class="mb-xl-9 my-4">
            <div class="container">
                <div class="row g-5">

                <?php while($erow = $eres->fetch_assoc()){?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-0 h-100 card-lift">
                            <a href="project.php?id=<?php echo $erow['event_id'];?>&<?php echo slagify($erow['title']); ?>"><img loading="lazy" src="uploads/<?php echo $erow['cover_image'];?>" alt="project at <?php echo $erow['title'];?>" class="img-fluid rounded-top-3" /></a>
                            <div class="card-body">
                                <div class="d-flex flex-column gap-2">
                                    <div>
                                        <h4><a href="project.php?id=<?php echo $erow['event_id'];?>&<?php echo slagify($erow['title']); ?>" class="text-reset"><?php echo $erow['title'];?></a></h4>
                                        <p class="mb-1"><?php echo $erow['short_desc'];?></p>
                                        <a href="project.php?id=<?php echo $erow['event_id'];?>&<?php echo slagify($erow['title']); ?>" class="btn btn-primary">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>

                    <div class="col-lg-12 text-center">
                        <div class="mt-xl-7 mt-3">
                            <a class="btn btn-outline-primary" href="#!" id="loadMoreButton">
                                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true" id="spinner"></span>
                                <span class="ms-2">Load More</span>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!--career study end-->
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>


    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

    <!-- Load More Spinner -->
    <script>
        document.getElementById('loadMoreButton').addEventListener('click', function() {
            const spinner = document.getElementById('spinner');
            spinner.classList.remove('d-none');
            // Load more functionality
        });
    </script>

</body>


</html>