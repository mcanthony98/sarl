<?php
    session_start();
    require "includes/connect.php";
    date_default_timezone_set("Africa/Nairobi");
    $date = date("Y-m-d");
    $eres = $conn->query("SELECT * FROM event WHERE event_status = 1  ORDER BY year DESC");

    $interior_projects = $conn->query("SELECT * FROM event WHERE event_status = 1  ORDER BY year DESC");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Completed Projects | Interior Fitouts, Aluminium & Steel Works | SARL Kenya</title>

    <meta name="description" content="Explore SARL’s portfolio of completed interior fitouts, aluminium glazing, steel fabrication, and joinery projects in Nairobi and across Kenya. See why top clients trust us.">
    <meta name="keywords" content="SARL projects Kenya, completed interior fitouts Nairobi, aluminium works portfolio Kenya, steel fabrication projects Nairobi, joinery work samples Kenya">
    
    <!-- Open Graph Meta (for Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="SARL Completed Projects | Nairobi Interior Fitouts & Aluminium Works">
    <meta property="og:description" content="Browse SARL's completed projects including aluminium glazing, steel fabrication, interior fitouts, and custom joinery across Kenya.">
    <meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://sarl.co.ke/assets/images/logo/sarl-about-logo.jpg"> 
    <meta property="og:site_name" content="SARL Kenya">


    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Explore SARL Projects | Interior, Glazing, Steel & Joinery Work">
    <meta name="twitter:description" content="View SARL’s featured projects across Nairobi. Top-tier aluminium, steel, joinery, and fitout works for commercial and residential clients.">
    <meta name="twitter:image" content="https://sarl.co.ke/assets/images/logo/sarl-about-logo.jpg"> 


    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>


    
</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <main>
        <!--Page Content-->
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

                <!-- Tab Btns -->
                <div class="text-center my-4">
                    <button class="btn btn-outline-primary mx-2 active" id="allProjectsButton" onclick="filterProjects('all')">All Projects</button>
                    <button class="btn btn-outline-primary mx-2" id="interiorButton" onclick="filterProjects('Interior fit-outs')">Interior Fitouts</button>
                    <button class="btn btn-outline-primary mx-2" id="aluminiumButton" onclick="filterProjects('Aluminium')">Aluminium</button>
                    <button class="btn btn-outline-primary mx-2" id="residentialButton" onclick="filterProjects('Residential')">Residential</button>
                </div>

                <!-- Projects -->
                <div class="row g-5" id="projectsContainer">

                <?php while($interior_row = $interior_projects->fetch_assoc()){ ?>
                    <!-- Project -->
                    <div class="col-lg-4 col-md-6 col-12 project-item" data-category="<?php echo $interior_row['category']; ?>">
                        <div class="card border-0 h-100 card-lift">
                            <div class="project-image-container">
                                <a href="project.php?id=<?php echo $interior_row['event_id']; ?>&<?php echo slagify($interior_row['title']); ?>">
                                    <img src="uploads/<?php echo $interior_row['cover_image']; ?>" alt="project at <?php echo $interior_row['title']; ?>" class="img-fluid rounded-top-3 equal-height-image" />
                                    <span class="project-label text-capitalize"><?php echo $interior_row['category']; ?></span>
                                </a>
                            </div>
                            <div class="card-body">
                                <h4><a href="project.php?id=<?php echo $interior_row['event_id']; ?>&<?php echo slagify($interior_row['title']); ?>" class="text-reset"><?php echo $interior_row['title']; ?></a></h4>
                                <p class="mb-1"><?php echo $interior_row['short_desc']; ?></p>
                                <a href="project.php?id=<?php echo $interior_row['event_id']; ?>&<?php echo slagify($interior_row['title']); ?>" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>


                    <!-- Other Projects -->
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

    <!-- Filter JS -->
    <script>
        function filterProjects(category) {
            const projectItems = document.querySelectorAll('.project-item');

            projectItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            // Update btns
            document.querySelectorAll('.btn').forEach(btn => btn.classList.remove('active'));
            document.getElementById(category + 'Button').classList.add('active');
        }
    </script>

</body>

</html>