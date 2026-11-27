<?php
/**
 * Site header (navy bar with the interactive SARL logo).
 * Set $sarl_header_overlay = true before including to float it over a full-height hero
 * (homepage); it turns solid navy as soon as the page scrolls.
 */
include_once __DIR__ . '/brand-logo.php';

$sarl_overlay = !empty($sarl_header_overlay);
$sarl_page = basename($_SERVER['SCRIPT_NAME'], '.php');
$sarl_nav = [
    'index'    => ['Home', ['index']],
    'about'    => ['About Us', ['about']],
    'services' => ['Services', ['services', 'service']],
    'projects' => ['Projects', ['projects', 'project']],
    'careers'  => ['Careers', ['careers', 'apply-job']],
    'contact'  => ['Contact Us', ['contact']],
];
?>
<!-- Navbar -->
<header class="sarl-header<?php echo $sarl_overlay ? ' sarl-header--overlay' : ''; ?>">
    <nav class="navbar navbar-expand-lg navbar-dark w-100">
        <div class="container px-3">
            <a class="navbar-brand sarl-brand" href="index.php" aria-label="SARL home"><?php sarl_logo(); ?></a>
            <button class="navbar-toggler offcanvas-nav-btn" type="button" aria-label="Open menu">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                <div class="offcanvas-header">
                    <a href="index.php" class="sarl-brand" aria-label="SARL home"><?php sarl_logo(); ?></a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 align-items-center">
                    <ul class="navbar-nav mx-auto align-items-lg-center">
                        <?php foreach ($sarl_nav as $file => list($label, $pages)) { $active = in_array($sarl_page, $pages, true); ?>
                        <li class="nav-item">
                            <a class="nav-link<?php echo $active ? ' active' : ''; ?>" href="<?php echo $file; ?>.php"<?php echo $active ? ' aria-current="page"' : ''; ?>><?php echo $label; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="mt-4 mt-lg-0 d-flex align-items-center">
                        <a href="contact.php" class="btn btn-primary sarl-cta">Speak to an Expert</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
