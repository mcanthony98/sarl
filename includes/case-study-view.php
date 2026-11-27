<?php
/**
 * Case-study layout for a project. Included by project.php when the project has an
 * entry in includes/case-studies.php.
 *
 * Expects: $erow (event row), $id (event_id), $gallery (all gallery file names),
 *          $CASE_STUDIES.
 */
$cs = $CASE_STUDIES[$id];

if (!function_exists('cs_e')) {
    function cs_e($s)
    {
        return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
    }

    function cs_src($file)
    {
        return 'uploads/' . rawurlencode($file);
    }

    function cs_img($file, $alt, $class = 'cs-img')
    {
        $src = cs_src($file);
        return '<a class="' . $class . '" href="' . $src . '" data-cs-lightbox>'
            . '<img loading="lazy" src="' . $src . '" alt="' . cs_e($alt) . '"></a>';
    }
}

// Images already placed (hero + sections) or hidden as duplicates
$placed = array_merge([$cs['hero']], $cs['hide']);
foreach ($cs['sections'] as $sec) {
    $placed = array_merge($placed, $sec['images']);
}
$more = [];
foreach (array_merge([$erow['cover_image']], $gallery) as $file) {
    if ($file !== '' && !in_array($file, $placed, true) && !in_array($file, $more, true)) {
        $more[] = $file;
    }
}

// Next case study (wraps around)
$cs_keys = array_keys($CASE_STUDIES);
$pos = array_search($id, $cs_keys, true);
$next_id = $cs_keys[($pos + 1) % count($cs_keys)];
$next = $CASE_STUDIES[$next_id];
$next_title = $conn->query("SELECT title FROM event WHERE event_id = " . (int) $next_id)->fetch_assoc();
$next_href = 'project.php?id=' . $next_id . '&' . slagify($next_title ? $next_title['title'] : $next['name']);

$category_label = sarl_category_label($erow['category']);
$facts = [
    'Client' => $cs['client'],
    'Location' => isset($cs['location']) ? $cs['location'] : '',
    'Year' => $erow['year'],
    'Sector' => $cs['sector'],
    'Service' => $category_label,
];
$facts = array_filter($facts, 'strlen');
?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo cs_e($cs['name']); ?> Case Study | <?php echo cs_e($category_label); ?> | SARL Kenya</title>
    <meta name="description" content="<?php echo cs_e($cs['intro']); ?>">

    <meta property="og:title" content="<?php echo cs_e($cs['name']); ?> – Case Study | SARL Kenya">
    <meta property="og:description" content="<?php echo cs_e($cs['intro']); ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://sarl.co.ke/<?php echo cs_src($cs['hero']); ?>">
    <meta property="og:site_name" content="SARL Kenya">
    <meta name="twitter:card" content="summary_large_image">

    <?php include 'includes/head-content.php'; ?>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <main class="case-study">

        <!-- Hero -->
        <section class="cs-hero">
            <img class="cs-hero__img" src="<?php echo cs_src($cs['hero']); ?>" alt="<?php echo cs_e($cs['name']); ?>" fetchpriority="high">
            <div class="cs-hero__content">
                <div class="container">
                    <a href="projects.php" class="cs-back"><i class="bi bi-arrow-left"></i> All projects</a>
                    <div class="mt-4"><span class="sarl-eyebrow">Case Study &middot; <?php echo cs_e($category_label); ?></span></div>
                    <h1><?php echo cs_e($cs['name']); ?></h1>
                    <p class="cs-hero__sub mb-0"><?php echo cs_e($erow['short_desc']); ?></p>
                </div>
            </div>
        </section>

        <!-- Key facts -->
        <section class="cs-facts">
            <div class="container">
                <dl class="cs-facts__grid mb-0">
                    <?php foreach ($facts as $label => $value) { ?>
                    <div class="cs-fact">
                        <dt class="cs-fact__label"><?php echo cs_e($label); ?></dt>
                        <dd class="cs-fact__value mb-0"><?php echo cs_e($value); ?></dd>
                    </div>
                    <?php } ?>
                </dl>
            </div>
        </section>

        <!-- Overview -->
        <section class="cs-intro">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-8 sarl-reveal">
                        <span class="sarl-eyebrow">Overview</span>
                        <p class="cs-intro__lead mt-3 mb-0"><?php echo cs_e($cs['intro']); ?></p>
                        <?php if (strlen(trim(strip_tags($erow['description']))) > 20) { ?>
                        <div class="mt-4"><?php echo $erow['description']; ?></div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4 sarl-reveal">
                        <h2 class="h6 text-uppercase mb-3" style="letter-spacing:.12em">Scope of works</h2>
                        <div class="cs-services">
                            <?php foreach ($cs['services'] as $service) { ?>
                            <span><?php echo cs_e($service); ?></span>
                            <?php } ?>
                        </div>
                        <a href="contact.php" class="btn btn-primary sarl-cta mt-5">Discuss a similar project</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sections -->
        <?php foreach ($cs['sections'] as $n => $sec) {
            $num = str_pad($n + 1, 2, '0', STR_PAD_LEFT);
            $imgs = $sec['images'];
            $count = count($imgs);
            $alt = $cs['name'] . ' – ' . $sec['title'];
            $head = '<div class="cs-section__head sarl-reveal">'
                . '<span class="cs-section__num" aria-hidden="true">' . $num . '</span>'
                . '<div><h2 class="cs-section__title">' . cs_e($sec['title']) . '</h2>'
                . '<p class="cs-section__text">' . cs_e($sec['text']) . '</p></div></div>';
        ?>
        <section class="cs-section">
            <div class="container">
                <?php if ($sec['layout'] === 'feature') { ?>
                    <div class="cs-feature<?php echo $count === 1 ? ' cs-feature--single' : ''; ?>">
                        <div><?php echo $head; ?></div>
                        <div class="cs-grid sarl-reveal" style="--n: <?php echo $count; ?>">
                            <?php foreach ($imgs as $file) { echo cs_img($file, $alt); } ?>
                        </div>
                    </div>
                <?php } else {
                    $layout = in_array($sec['layout'], ['wide', 'pair', 'trio', 'mosaic'], true) ? $sec['layout'] : 'pair';
                ?>
                    <?php echo $head; ?>
                    <div class="cs-grid cs-grid--<?php echo $layout; ?> cs-grid--n<?php echo $count; ?> sarl-reveal">
                        <?php foreach ($imgs as $file) { echo cs_img($file, $alt); } ?>
                    </div>
                <?php } ?>
            </div>
        </section>
        <?php } ?>

        <?php if ($more) { ?>
        <!-- Remaining gallery -->
        <section class="cs-section">
            <div class="container">
                <div class="cs-section__head sarl-reveal">
                    <span class="cs-section__num" aria-hidden="true">+</span>
                    <div>
                        <h2 class="cs-section__title">More from the project</h2>
                        <p class="cs-section__text">Select any image to view it full size.</p>
                    </div>
                </div>
                <div class="cs-gallery">
                    <?php foreach ($more as $file) { echo cs_img($file, $cs['name']); } ?>
                </div>
            </div>
        </section>
        <?php } ?>

        <!-- Next case study -->
        <a class="cs-next" href="<?php echo cs_e($next_href); ?>">
            <img loading="lazy" src="<?php echo cs_src($next['hero']); ?>" alt="">
            <div class="container cs-next__inner">
                <span class="cs-next__label">Next case study</span>
                <span class="cs-next__title h1"><?php echo cs_e($next['name']); ?> <i class="bi bi-arrow-right"></i></span>
            </div>
        </a>

    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>
