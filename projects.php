<?php
    session_start();
    require "includes/connect.php";
    require "includes/case-studies.php";
    date_default_timezone_set("Africa/Nairobi");
    $date = date("Y-m-d");

    $all_projects = [];
    $interior_projects = $conn->query("SELECT * FROM event WHERE event_status = 1  ORDER BY year DESC");
    while ($interior_row = $interior_projects->fetch_assoc()) {
        $all_projects[(int) $interior_row['event_id']] = $interior_row;
    }

    // Case studies first, in the order set in includes/case-studies.php
    $case_cards = [];
    foreach ($CASE_STUDIES as $cs_id => $cs) {
        if (isset($all_projects[$cs_id])) {
            $row = $all_projects[$cs_id];
            $case_cards[] = [
                'cs' => $cs,
                'row' => $row,
                'href' => 'project.php?id=' . $cs_id . '&' . slagify($row['title']),
            ];
        }
    }
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
        <!--Page header-->
        <section class="sarl-page-hero py-lg-9 py-7">
            <span class="sarl-orbits" aria-hidden="true"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <span class="sarl-eyebrow">Portfolio</span>
                        <h1 class="display-5 mt-3 mb-3">Our Projects</h1>
                        <p class="lead mb-0">
                            Discover how we transform spaces and bring visions to life with precision, innovation, and unmatched quality.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php if ($case_cards) { ?>
        <!--Case studies-->
        <section class="py-lg-9 py-6">
            <div class="container">
                <div class="row align-items-end mb-5 g-3">
                    <div class="col-lg-8">
                        <span class="sarl-eyebrow">Case Studies</span>
                        <h2 class="mt-3 mb-0">A closer look at selected projects</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($case_cards as $i => $cc) {
                        $wide = ($i % 5 === 0);
                        $col = $wide ? 'col-lg-8' : 'col-lg-4 col-md-6';
                    ?>
                    <div class="<?php echo $col; ?>" data-cue="fadeIn">
                        <a href="<?php echo htmlspecialchars($cc['href'], ENT_QUOTES, 'UTF-8'); ?>" class="cs-tile<?php echo $wide ? ' cs-tile--wide h-100' : ''; ?>">
                            <img loading="lazy" src="uploads/<?php echo rawurlencode($cc['cs']['hero']); ?>" alt="<?php echo htmlspecialchars($cc['cs']['name'], ENT_QUOTES, 'UTF-8'); ?>" />
                            <span class="cs-tile__go" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                            <span class="cs-tile__body">
                                <span class="cs-tile__kicker"><?php echo htmlspecialchars(sarl_category_label($cc['row']['category']) . ' · ' . $cc['row']['year'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <h3 class="cs-tile__title"><?php echo htmlspecialchars($cc['cs']['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <span class="cs-tile__meta d-block"><?php echo htmlspecialchars($cc['row']['short_desc'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </span>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php } ?>

        <!--All projects-->
        <section class="py-lg-9 py-6 sarl-section-mist-deep" id="all-projects">
            <div class="container">
                <div class="row align-items-end mb-5 g-3">
                    <div class="col-lg-5">
                        <span class="sarl-eyebrow">All Projects</span>
                        <h2 class="mt-3 mb-0">The full portfolio</h2>
                    </div>
                    <!-- Tab Btns -->
                    <div class="col-lg-7 text-lg-end sarl-filter" role="group" aria-label="Filter projects">
                        <button type="button" class="btn btn-outline-primary active" data-filter="all">All Projects</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="Interior fit-outs">Interior Fitouts</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="Aluminium">Aluminium</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="Residential">Residential</button>
                    </div>
                </div>

                <!-- Projects -->
                <div class="row g-4" id="projectsContainer">

                <?php foreach ($all_projects as $p) {
                    $href = 'project.php?id=' . $p['event_id'] . '&' . slagify($p['title']);
                    $is_cs = isset($CASE_STUDIES[(int) $p['event_id']]);
                ?>
                    <!-- Project -->
                    <div class="col-lg-4 col-md-6 col-12 project-item" data-category="<?php echo htmlspecialchars($p['category'], ENT_QUOTES, 'UTF-8'); ?>">
                        <article class="project-card">
                            <a class="project-card__media" href="<?php echo htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>">
                                <img loading="lazy" src="uploads/<?php echo rawurlencode($p['cover_image']); ?>" alt="project at <?php echo htmlspecialchars($p['title'], ENT_QUOTES, 'UTF-8'); ?>" />
                                <span class="project-card__badge"><?php echo htmlspecialchars($p['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <?php if ($is_cs) { ?><span class="project-card__badge project-card__badge--cs">Case Study</span><?php } ?>
                            </a>
                            <div class="project-card__body">
                                <h3><a href="<?php echo htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($p['title'], ENT_QUOTES, 'UTF-8'); ?></a></h3>
                                <p><?php echo htmlspecialchars($p['short_desc'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <a class="project-card__more" href="<?php echo htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>"><?php echo $is_cs ? 'Read Case Study' : 'View Project'; ?> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                <?php } ?>

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
        document.querySelectorAll('.sarl-filter [data-filter]').forEach(function (button) {
            button.addEventListener('click', function () {
                const category = button.getAttribute('data-filter');
                document.querySelectorAll('.project-item').forEach(function (item) {
                    const show = category === 'all' || item.getAttribute('data-category') === category;
                    item.style.display = show ? '' : 'none';
                });
                document.querySelectorAll('.sarl-filter [data-filter]').forEach(function (b) {
                    b.classList.toggle('active', b === button);
                });
            });
        });
    </script>

</body>

</html>