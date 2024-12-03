    <!-- Libs JS -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/libs/headhesive/dist/headhesive.min.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>

    <script src="assets/libs/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/js/vendors/jarallax.js"></script>
    <script src="assets/libs/parallax-js/dist/parallax.min.js"></script>
    <script src="assets/js/vendors/parallax.js"></script>

    <script src="assets/js/vendors/tab-to-dropdown.js"></script>
    <script src="assets/libs/scrollcue/scrollCue.min.js"></script>
    <script src="assets/js/vendors/scrollcue.js"></script>


    <!-- Swiper JS -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/swiper.js"></script>
    <script src="assets/libs/glightbox/dist/js/glightbox.min.js"></script>
    <script src="assets/js/vendors/glight.js"></script>
    <script src="assets/js/vendors/tab-to-dropdown.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const grid = document.querySelector('#masonry-grid');
        imagesLoaded(grid, function () {
            new Masonry(grid, {
                itemSelector: '.col-sm-6',
                columnWidth: '.col-sm-6',
                percentPosition: true,
            });
        });
    });
</script>
