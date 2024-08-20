<!doctype html>
<html lang="en">

<head>
    <title>Single Project | SARL</title>
    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <main>
        <!--Page Content-->

        <!--Pageheader start-->
        <section class="py-5 py-lg-8 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <h1 class="mb-3">Office Workspace Transformation</h1>
                        <p class="mb-0 lead">WORKABLE LLP - 6th Floor, Sanlam Towers | 2023</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Pageheader end-->

        <!--Project Overview start-->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <p>
                            The 2023 Office Workspace Transformation project for WORKABLE LLP involved a complete interior fit-out, custom aluminium fabrication, and high-performance glazing work. Located on the 6th floor of Sanlam Towers, this project was completed within a 6-month timeline and required the integration of modern design elements with practical functionality to create a state-of-the-art workspace.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--Project Overview end-->

        <!--Portfolio Gallery start-->
        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-4">
                        <img src="assets/images/projects/p-6.jpg" class="img-fluid rounded-3 gallery-img" alt="Project Image 1" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="0">
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/projects/p-2.jpg" class="img-fluid rounded-3 gallery-img" alt="Project Image 2" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="1">
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/projects/p-3.jpg" class="img-fluid rounded-3 gallery-img" alt="Project Image 3" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="2">
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/projects/p-4.jpg" class="img-fluid rounded-3 gallery-img" alt="Project Image 4" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="3">
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/projects/p-5.jpg" class="img-fluid rounded-3 gallery-img" alt="Project Image 5" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="4">
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/projects/p-1.jpg" class="img-fluid rounded-3 gallery-img" alt="Project Image 6" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="5">
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/projects/p-6.jpg" class="img-fluid rounded-3 gallery-img" alt="Project Image 7" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="6">
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/projects/p-2.jpg" class="img-fluid rounded-3 gallery-img" alt="Project Image 8" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="7">
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/projects/p-3.jpg" class="img-fluid rounded-3 gallery-img" alt="Project Image 9" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="8">
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Gallery end-->
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid" alt="Project Image">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" id="prevImage">Previous</button>
                    <button type="button" class="btn btn-secondary" id="nextImage">Next</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Image Modal JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentIndex = 0;
            const images = document.querySelectorAll('.gallery-img');
            const modalImage = document.getElementById('modalImage');
            const imageModalLabel = document.getElementById('imageModalLabel');

            function updateModal(index) {
                const img = images[index];
                modalImage.src = img.src;
                imageModalLabel.textContent = img.alt;
                currentIndex = index;
            }

            images.forEach((img, index) => {
                img.addEventListener('click', () => {
                    updateModal(index);
                });
            });

            document.getElementById('prevImage').addEventListener('click', () => {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
                updateModal(currentIndex);
            });

            document.getElementById('nextImage').addEventListener('click', () => {
                currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
                updateModal(currentIndex);
            });
        });
    </script>
</body>

</html>