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

                            <!-- Job 1 -->
                            <div class="list-group-item d-flex align-items-center justify-content-between border-top p-4" data-department="Project Management" data-location="Nairobi">
                                <div>
                                    <h4 class="mb-1">Project Manager</h4>
                                    <span class="text-primary fw-medium">Nairobi, Kenya</span>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#job1Modal">
                                        View Details
                                    </button>
                                    <a href="apply-job.php" class="btn btn-primary">
                                        Apply
                                    </a>
                                </div>
                            </div>

                            <!-- Job 1 Modal -->
                            <div class="modal fade" id="job1Modal" tabindex="-1" aria-labelledby="job1ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="job1ModalLabel">Project Manager - Nairobi, Kenya</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>The Project Manager is responsible for overseeing all aspects of project planning, execution, and delivery. This role requires a highly organized and motivated individual with experience in construction and project management. The successful candidate will coordinate with various stakeholders, ensure project timelines and budgets are met, and maintain high standards of quality and safety.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job 2 -->
                            <div class="list-group-item d-flex align-items-center justify-content-between p-4" data-department="Interior Design" data-location="Mombasa">
                                <div>
                                    <h4>Interior Designer</h4>
                                    <span class="text-primary fw-medium">Mombasa, Kenya</span>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#job2Modal">
                                        View Details
                                    </button>
                                    <a href="apply-job.php" class="btn btn-primary">
                                        Apply
                                    </a>
                                </div>
                            </div>

                            <!-- Job 2 Modal -->
                            <div class="modal fade" id="job2Modal" tabindex="-1" aria-labelledby="job2ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="job2ModalLabel">Interior Designer - Mombasa, Kenya</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>The Interior Designer will be responsible for conceptualizing and implementing innovative design solutions for various interior spaces. The role demands creativity, an eye for detail, and a strong understanding of materials, finishes, and furnishings. The Interior Designer will work closely with clients to understand their vision and deliver designs that meet their needs and exceed their expectations.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job 3 -->
                            <div class="list-group-item d-flex align-items-center justify-content-between p-4" data-department="Sales and Marketing" data-location="Kisumu">
                                <div>
                                    <h4>Sales and Marketing Executive</h4>
                                    <span class="text-primary fw-medium">Kisumu, Kenya</span>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#job3Modal">
                                        View Details
                                    </button>
                                    <a href="apply-job.php" class="btn btn-primary">
                                        Apply
                                    </a>
                                </div>
                            </div>

                            <!-- Job 3 Modal -->
                            <div class="modal fade" id="job3Modal" tabindex="-1" aria-labelledby="job3ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="job3ModalLabel">Sales and Marketing Executive - Kisumu, Kenya</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>The Sales and Marketing Executive will drive the company's growth by developing and implementing effective sales strategies. This position requires a results-oriented individual with strong communication skills and a deep understanding of market trends. Responsibilities include managing client relationships, identifying new business opportunities, and contributing to the overall sales strategy.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job 4 -->
                            <div class="list-group-item d-flex align-items-center justify-content-between border-bottom p-4" data-department="Aluminium Fabrication" data-location="Nakuru">
                                <div>
                                    <h4>Aluminium Fabrication Specialist</h4>
                                    <span class="text-primary fw-medium">Nakuru, Kenya</span>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#job4Modal">
                                        View Details
                                    </button>
                                    <a href="apply-job.php" class="btn btn-primary">
                                        Apply
                                    </a>
                                </div>
                            </div>

                            <!-- Job 4 Modal -->
                            <div class="modal fade" id="job4Modal" tabindex="-1" aria-labelledby="job4ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="job4ModalLabel">Aluminium Fabrication Specialist - Nakuru, Kenya</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>The Aluminium Fabrication Specialist will work on creating custom aluminium products according to project specifications. This role requires precision, attention to detail, and extensive experience in metalworking. The specialist will collaborate with the design team to bring concepts to life, ensuring that all products meet quality and safety standards.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job 5 -->
                            <div class="list-group-item d-flex align-items-center justify-content-between border-bottom p-4" data-department="Project Management" data-location="Eldoret">
                                <div>
                                    <h4>Assistant Project Manager</h4>
                                    <span class="text-primary fw-medium">Eldoret, Kenya</span>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#job5Modal">
                                        View Details
                                    </button>
                                    <a href="apply-job.php" class="btn btn-primary">
                                        Apply
                                    </a>
                                </div>
                            </div>

                            <!-- Job 5 Modal -->
                            <div class="modal fade" id="job5Modal" tabindex="-1" aria-labelledby="job5ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="job5ModalLabel">Assistant Project Manager - Eldoret, Kenya</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>The Assistant Project Manager will support the Project Manager in all phases of project management. This includes planning, scheduling, budgeting, and coordinating project activities. The ideal candidate will have a strong background in construction or a related field and be able to work effectively in a fast-paced environment. Attention to detail and excellent communication skills are essential for this role.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
            var jobItems = document.querySelectorAll('#jobList .list-group-item');

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

        window.onload = filterJobs;
    </script>

</body>

</html>