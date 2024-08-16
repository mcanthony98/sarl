<!doctype html>
<html lang="en">

<head>

    <title>Careers | SARL</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>


    <main>
        <!--Pageheader start-->
        <section class="py-5 py-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="text-center">
                            <div class="mb-4">
                                <h1 class="mb-2">Build Your Future with SARL. Join Our Team.</h1>
                                <p class="mb-0">
                                    We're always on the lookout for passionate and skilled individuals looking to contribute to our mission of excellence in architectural fabrication and interior fit-outs. Think you have what it takes? You might belong at SARL.
                                </p>
                            </div>
                            <a href="#openPosition" class="btn btn-dark me-2">Open Positions</a>
                            <a href="about.php" class="btn btn-outline-primary">Learn More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Pageheader end-->

        <!--Department and Location Filters-->
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-12">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="location" class="form-label visually-hidden">Location</label>
                                <select class="form-select" id="location">
                                    <option selected value="">All Locations</option>
                                    <option value="Nairobi">Nairobi</option>
                                    <option value="Mombasa">Mombasa</option>
                                    <option value="Kisumu">Kisumu</option>
                                    <option value="Nakuru">Nakuru</option>
                                    <option value="Eldoret">Eldoret</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="department" class="form-label visually-hidden">Department</label>
                                <select class="form-select" id="department">
                                    <option selected value="">All Departments</option>
                                    <option value="Project Management">Project Management</option>
                                    <option value="Interior Design">Interior Design</option>
                                    <option value="Sales and Marketing">Sales and Marketing</option>
                                    <option value="Aluminium Fabrication">Aluminium Fabrication</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Open Positions Section-->
        <section class="mb-xl-9 py-4" id="openPosition">
            <div class="container pb-lg-7">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="list-group list-group-flush" id="jobList">
                            <a href="apply-job.php" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between border-top p-4" data-department="Project Management" data-location="Nairobi">
                                <div>
                                    <h4 class="mb-1">Project Manager</h4>
                                    <span class="text-primary fw-medium">Nairobi, Kenya</span>
                                </div>
                                <span class="icon-link icon-link-hover link-primary">
                                    Apply
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg>
                                </span>
                            </a>

                            <a href="apply-job.php" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between p-4" data-department="Interior Design" data-location="Mombasa">
                                <div>
                                    <h4>Interior Designer</h4>
                                    <span class="text-primary fw-medium">Mombasa, Kenya</span>
                                </div>
                                <span class="icon-link icon-link-hover link-primary">
                                    Apply
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg>
                                </span>
                            </a>

                            <a href="apply-job.php" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between p-4" data-department="Sales and Marketing" data-location="Kisumu">
                                <div>
                                    <h4>Sales and Marketing Executive</h4>
                                    <span class="text-primary fw-medium">Kisumu, Kenya</span>
                                </div>
                                <span class="icon-link icon-link-hover link-primary">
                                    Apply
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg>
                                </span>
                            </a>

                            <a href="apply-job.php" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between border-bottom p-4" data-department="Aluminium Fabrication" data-location="Nakuru">
                                <div>
                                    <h4>Aluminium Fabrication Specialist</h4>
                                    <span class="text-primary fw-medium">Nakuru, Kenya</span>
                                </div>
                                <span class="icon-link icon-link-hover link-primary">
                                    Apply
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg>
                                </span>
                            </a>

                            <a href="apply-job.php" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between border-bottom p-4" data-department="Project Management" data-location="Eldoret">
                                <div>
                                    <h4>Assistant Project Manager</h4>
                                    <span class="text-primary fw-medium">Eldoret, Kenya</span>
                                </div>
                                <span class="icon-link icon-link-hover link-primary">
                                    Apply
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>


    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

    <!-- Job Filtering -->
    <script>
        document.getElementById('department').addEventListener('change', filterJobs);
        document.getElementById('location').addEventListener('change', filterJobs);

        function filterJobs() {
            var selectedDepartment = document.getElementById('department').value.toLowerCase();
            var selectedLocation = document.getElementById('location').value.toLowerCase();
            var jobItems = document.querySelectorAll('#jobList a');

            jobItems.forEach(function(item) {
                var department = item.getAttribute('data-department').toLowerCase();
                var location = item.getAttribute('data-location').toLowerCase();

                if ((selectedDepartment === "" || department.includes(selectedDepartment)) &&
                    (selectedLocation === "" || location.includes(selectedLocation))) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Apply filter on page load in case default values are pre-selected
        window.onload = filterJobs;
    </script>

</body>

</html>
