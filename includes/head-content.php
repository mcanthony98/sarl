    <!-- Head Content -->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/libs/glightbox/dist/css/glightbox.min.css" />

    <!-- Favicon icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/logo/favicon.jpg" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo/favicon.jpg" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/favicon.jpg" />
   
    <!-- Color modes -->
    <script src="assets/js/vendors/color-modes.js"></script>

    <!-- Libs CSS -->
    <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />

    <!-- Scroll Cue -->
    <link rel="stylesheet" href="assets/libs/scrollcue/scrollCue.css" />

    <!-- Box icons -->
    <link rel="stylesheet" href="assets/fonts/css/boxicons.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
   

<?php
function slagify($input) {
    // Convert the string to lowercase
    $lowercaseString = strtolower($input);

    // Replace spaces with hyphens
    $formattedString = str_replace(' ', '-', $lowercaseString);

    return $formattedString;
}

?>