    <!-- Homepage Custom Styling -->
    <style>
        .hero-section {
            overflow: hidden;
        }

        .hero-slides-container {
            z-index: 1;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-slide.active {
            opacity: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        .container {
            z-index: 3;
        }

        .hero-content {
            padding: 2rem;
        }

        .text-white-50 {
            color: rgba(255, 255, 255, 0.8) !important;
        }

        .gap-4 {
            gap: 1.5rem;
        }

        .link-white {
            color: white;
            text-decoration: none;
        }

        .link-white:hover {
            color: rgba(255, 255, 255, 0.8);
        }

        /* Desktop */
        .nav-link.mobile-text-dark {
            color: #fff !important;
        }

        /* Mobile Navbar Styling */
        @media (max-width: 991px) {
            .nav-link.mobile-text-dark {
                color: #000 !important;
            }

            .nav-link.dropdown-toggle.mobile-text-dark {
                color: #000 !important;
            }

            .offcanvas-nav {
                background-color: #fff !important;
            }
        }

        /* Custom Video Styling */
        .video-wrapper {
            width: 100%;
            padding-top: 56.25%;
            /* 16:9 Aspect Ratio */
            position: relative;
        }

        .sarl-video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .sarl-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        /* Bootstrap Responsive Overrides */
        @media (max-width: 991.98px) {
            .video-wrapper {
                padding-top: 75%;
            }
        }

        /* Custom Icons */
        .icon-shape {
            width: 4rem;
            height: 4rem;
        }

        .icon-xl {
            padding: 1.25rem;
        }


        /* Default Navbar*/
        .navbar-transparent .nav-text-color {
            color: #ffffff !important;
            font-weight: 500 !important;
        }

        /* Mobile Version */
        @media (max-width: 991px) {
            .offcanvas-nav .nav-text-color {
                color: #000000 !important;
            }
        }

        /* Sticky Version */
        .navbar.sticky-nav {
            background-color: #ffffff !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
        }

        .navbar.sticky-nav .nav-text-color {
            color: #000000 !important;
        }

        .navbar-transparent .dropdown-toggle::after {
            border-top-color: #ffffff !important;
        }

        .dropdown-menu .dropdown-item {
            color: #000000 !important;
        }


        /* Menu Mobile Icon Styling */
        .navbar-transparent .offcanvas-nav-btn {
            color: #ffffff !important;
        }

        /* Sticky */
        .navbar.sticky-nav .offcanvas-nav-btn {
            color: #000000 !important;
        }

        .offcanvas-nav-btn {
            transition: color 0.3s ease-in-out;
        }
    </style>