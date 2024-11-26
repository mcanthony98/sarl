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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const grid = document.querySelector('#masonry-grid');
            new Masonry(grid, {
                itemSelector: '.col-sm-6',
                columnWidth: '.col-sm-6',
                percentPosition: true,
            });
            });

    </script>

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
            height: 250px; /* Matches the image height */
            overflow: hidden; /* Ensures overflow is hidden if the image is larger */
            position: relative; /* Helps with alignment */
        }

        .project-image-container img {
            width: 100%;
            border-radius: 0.25rem 0.25rem 0 0;
        }
        .equal-height-image {
            height: 250px; /* Set the desired height */
            width: 100%; /* Ensure it fills the width of the container */
            object-fit: cover; /* Makes the image zoom in and not stretch */
            object-position: center; /* Centers the image */
            border-radius: 5px; /* Maintain rounded corners */
        }

    </style>
   

<?php
function slagify($input) {
    // Convert the string to lowercase
    $lowercaseString = strtolower($input);

    // Replace spaces with hyphens
    $formattedString = str_replace(' ', '-', $lowercaseString);

    return $formattedString;
}

?>