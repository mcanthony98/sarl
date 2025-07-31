<!-- Introduced a database connect for the program to link the jobs -->
<!-- posted by the admin to be viewed by the clients. The data selected -->
<!-- has been filtered such that only active jobs are displayed -->
<!-- as well as opportunities that haven't expired. -->
<?php 
    session_start();
    include "includes/connect.php";

    $current_date = date('Y-m-d');

    $result = $conn->query("SELECT * FROM jobs WHERE job_status = 1 AND deadline > '$current_date' ORDER BY job_id");
?>

<!doctype html>
<html lang="en">

<head>

    <title>Careers | SARL</title>
    
    <meta name="description" content="Check out Jobs available at SARL Kenya">

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
                                    We're always on the lookout for passionate and skilled individuals looking to contribute to our mission of excellence in aluminium fabrication and interior fit-outs. Think you have what it takes? You might belong at SARL.
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

                            <!-- Replaced the original code with one that reads data -->
                            <!-- straight from the database and displays the information -->
                            <!-- for the clients. By doing so, it renders the program -->
                            <!-- to be more dynamic. Meaning for every change in the db -->
                            <!-- clients will be able to see the difference in realtime. -->
                            <?php
                                while ($row = $result->fetch_assoc()) {
                                    $jobId = $row['job_id'];
                                    $jobTitle = $row['job_title'];
                                    $jobLocation = $row['location'];
                                    $jobDescription = $row['job_description'];
                                    $jobDeadline = $row['deadline'];
                            ?>

                            <div class="list-group-item d-flex align-items-center justify-content-between p-4" data-location="<?php echo htmlspecialchars($row['location']); ?>">
                                <div>
                                    <h4 class="mb-1"><?php echo htmlspecialchars($jobTitle); ?></h4>
                                    <span class="text-primary fw-medium"><?php echo htmlspecialchars($jobLocation); ?></span>
                                </div>
                                
                                <div>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#job<?php echo $jobId; ?>Modal">
                                        View Details
                                    </button>

                                    <a href="apply-job.php?id=<?php echo $jobId; ?>" class="btn btn-primary">
                                        Apply
                                    </a>
                                </div>
                            </div>

                            <!-- Job modal as seen on the original code -->
                            <div class="modal fade" id="job<?php echo $jobId; ?>Modal" tabindex="-1" aria-labelledby="job<?php echo $jobId; ?>ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="job<?php echo $jobId; ?>ModalLabel"><?php echo htmlspecialchars($jobTitle); ?> - <?php echo htmlspecialchars($jobLocation); ?></h5>
                                            
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <p><?php echo htmlspecialchars($jobDescription); ?></p>
                                            
                                            <p><strong>Application Deadline:</strong> <?php echo htmlspecialchars($jobDeadline); ?></p>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a href="apply-job.php?id=<?php echo $jobId; ?>" class="btn btn-primary">Apply</a>
                                            
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                }
                            ?>

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