<?php
session_start();
require "includes/connect.php";


$id = $_GET['id'];
$eres = $conn->query("SELECT * FROM event WHERE event_id = '$id'");
$erow = $eres->fetch_assoc();


$imgres = $conn->query("SELECT * FROM event_gallery WHERE event_id='$id'");
?>
<!doctype html>
<html lang="en">


<head>
    <title><?php echo $erow['title'];?> | SARL</title>
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
                        <h1 class="mb-3"><?php echo $erow['title'];?></h1>
                        <p class="mb-0 lead"><?php echo $erow['short_desc'];?></p>
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
                     
                        <?php echo $erow['description'];?>
                      
                    </div>
                </div>
            </div>
        </section>
        <!--Project Overview end-->

        <!--Portfolio Gallery start-->
        <section>
            <div class="container">
                <div class="row g-1" id="masonry-grid">

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <img src="uploads/<?php echo $erow['cover_image'];?>" class="img-fluid rounded-0 gllery-img" alt="<?php echo $erow['title'];?>" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="0">
                    </div>

                    
                    <?php 
                    $counter = 0;
                    while($imgrow = $imgres->fetch_assoc()){
                    $counter++;    
                    ?>
                        
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="uploads/<?php echo $imgrow['image'];?>" class="img-fluid rounded-0 gllery-img"  alt="<?php echo $erow['title'];?> - <?php echo $counter;?>" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="<?php echo $counter;?>">
                        </div>
                    <?php } ?>

                    
                </div>
            </div>
        </section>
        <!--Portfolio Gallery end-->
    </main>

    <!-- Footer -->
    <?php //include 'includes/footer.php'; ?>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-0">
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
    
    <?php include "includes/scripts.php";?>
</body>

</html>