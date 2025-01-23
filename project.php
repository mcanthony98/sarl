<?php
session_start();
require "includes/connect.php";


$id = $_GET['id'];
$eres = $conn->query("SELECT * FROM event WHERE event_id = '$id'");
$erow = $eres->fetch_assoc();


$imgres = $conn->query("SELECT * FROM event_gallery WHERE event_id='$id' LIMIT 15");
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
      <section class="py-10"
         style="background-image: url(uploads/<?php echo $erow['cover_image'];?>); background-position: center; background-repeat: no-repeat; background-size: cover;filter: brightness(100%);">
         <div class="container py-lg-10">
            <div class="row" >
               <div class="col-lg-6 offset-lg-3 col-md-12 py-2" style="background-color: rgba(0, 0, 0, 0.3);">
                  <div class="text-center">
                     <small class="text-white-stable text-uppercase fw-bold ls-lg"><?php echo $erow['category'];?></small>
                     <h1 class="my-4 text-white-stable display-5"><?php echo $erow['title'];?></h1>
                     <p class="mb-0 mx-xl-7 text-white-stable lead"><?php echo $erow['short_desc'];?></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Pageheader end-->
      <!--Stats start-->
      <section class="py-5 mb-5">
         <div class="container">
            <div class="row col-10 mx-auto">
               <div class="col-lg-4">
                  <div class="text-center px-lg-5 mb-5 mb-lg-0">
                     <small class="text-uppercase text-body-secondary ls-md fw-semibold">Project</small>
                     <h4 class="mb-0 mt-2"><?php echo $erow['short_desc'];?></h4>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="text-center px-lg-5 mb-5 mb-lg-0">
                     <small class="text-uppercase text-body-secondary ls-md fw-semibold">Project Year</small>
                     <h4 class="mb-0 mt-2"><?php echo $erow['year'];?></h4>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="text-center px-lg-5 mb-5 mb-lg-0">
                     <small class="text-uppercase text-body-secondary ls-md fw-semibold">Service Offered</small>
                     <h4 class="mb-0 mt-2"><?php echo $erow['category'];?></h4>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Stats end-->

        <!--Portfolio Gallery start-->
        <section class="py-7 mb-9">
            <div class="container">
                <div class="row gx-2 gy-6 mx-auto" id="masonry-grid">

                    <div class="col-12 mx-auto d-none">
                        <img src="uploads/<?php echo $erow['cover_image'];?>" class="img-fluid rounded-2 gallery-img w-100"  alt="<?php echo $erow['title'];?>" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="0">
                    </div>

                    
                    <?php 
                    $counter = 0;
                    while($imgrow = $imgres->fetch_assoc()){
                    $counter++;
                    $class = ($counter % 5 == 0) ? 'col-12' : 'col-md-6 col-lg-6';    
                    ?>
                        
                        <div class="mx-auto <?php echo $class; ?>">
                            <img src="uploads/<?php echo $imgrow['image'];?>" class="img-fluid rounded-1 gallery-img w-100"  style="max-height:600px;" alt="<?php echo $erow['title'];?> - <?php echo $counter;?>" data-bs-target="#imageModal" data-bs-toggle="modal" data-bs-index="<?php echo $counter;?>">
                        </div>
                    <?php
                    if($counter == 2 && $erow['description'] != "<p> </p>"){
                    ?>
                        <div class="row d-flex align-items-center mt-md-9 mt-6">
                            <div class="col-lg-6 col-md-6 col-12">
                                <figure class="mb-4 mb-md-0">
                                    <img src="uploads/<?php echo $erow['cover_image'];?>" alt="value"
                                        class="img-fluid rounded-3" style="min-height: 400px;"/>
                                </figure>
                            </div>
                            <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                                <span class="text-primary fw-semibold">Project Overview</span>
                                <div class="mb-4">
                                    <p class="mb-0 pt-3">
                                    <?php echo $erow['description'];?>
                                    </p>
                                </div>
                                <a href="contact.php" class="icon-link icon-link-hover">
                                    Speak to an Expert Today
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="mt-6 mt-lg-9 text-center">
                                <h2>Project Gallery</h2>
                            </div>
                        </div>
                    <?php    
                }
                    } 
                    ?>

                
                    
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