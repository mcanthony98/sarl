<?php
    session_start();
    require "includes/connect.php";
    date_default_timezone_set("Africa/Nairobi");
    $date = date("Y-m-d");
    $eres = $conn->query("SELECT * FROM event WHERE event_status = 1  ORDER BY event_id DESC");

    $interior_projects = $conn->query("SELECT * FROM event WHERE event_status = 1  ORDER BY event_id DESC");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Projects | SARL</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>


    <style>
        /* Project Label */
        .project-label {
            position: absolute;
            bottom: 0;
            left: 0;
            margin: 10px;
            background-color: rgba(0, 115, 127, 0.8);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }

        /* Img Container */
        .project-image-container {
            position: relative;
        }

        .project-image-container img {
            width: 100%;
            border-radius: 0.25rem 0.25rem 0 0;
        }
    </style>
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
                                    <img src="uploads/<?php echo $interior_row['cover_image']; ?>" alt="project at <?php echo $interior_row['title']; ?>" class="img-fluid rounded-top-3" />
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