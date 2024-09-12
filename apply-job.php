<?php
    require 'includes/connect.php';

    $job_id = isset($_GET['id']) ? $_GET['id'] : null;
    $selected_job_title = '';
    $selected_job_location = '';

    if ($job_id) {
        $query = $conn -> prepare("SELECT job_title, location, deadline FROM jobs WHERE job_id = ?");
        $query -> bind_param("i", $job_id);
        $query -> execute();
        $result = $query -> get_result();

        if ($result -> num_rows > 0) {
            $row = $result -> fetch_assoc();
            $selected_job_title = $row["job_title"];
            $selected_job_location = $row["location"];
            $job_deadline = $row["deadline"];

            // This is set so that a user cannot tamper with the
            // website's url to access any opportunities whose
            // deadlines have passed.
            if (new DateTime() > new DateTime($job_deadline)) {
                echo "<h1>Application Closed</h1>";
                echo "<p>The application deadline for this job has passed. You cannot apply for this position anymore.</p>";
                exit();
            }
        } else {
            // This is meant to handle a situation where a user will
            // try to access an opportunity that isn't available. 
            // Let's say I have opportunities with ID 1 to 5
            // and a user tries to access the 6th or 7th or even 8th,
            // then, the system will give him an error message.
            echo "<h1>Job Not Found</h1>";
            echo "<p>The job you are trying to apply for does not exist.</p>";
            exit();
        }

        // $query -> close();
    }
    
    if (isset($_POST['submit_application'])) {
        $job_title = $_POST['job_title'];
        $job_location = $_POST['job_location'];

        echo "Job Title inside form submission: " . $job_title . "<br>";
        echo "Location inside form submission: " . $job_location . "<br>";

        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $name = $first_name . ' ' . $middle_name . ' ' . $last_name;
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $linkedin = $_POST['linkedin'];
        $date = date('Y-m-d H:i:s');

        $upload_dir = 'uploads/cvs/';
        $cv_file_name = basename($_FILES['resume']['name']);
        $cv_file_path = $upload_dir . uniqid('', true) . "-" . $cv_file_name;
    
        if (move_uploaded_file($_FILES['resume']['tmp_name'], $cv_file_path)) {
            $sql = "INSERT INTO applications (name, email, phone_number, job_title, location, linkedin, cv_file_path, date_created) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssssssss', $name, $email, $phone, $job_title, $job_location, $linkedin, $cv_file_path, $date);
    
            if ($stmt->execute()) {
                echo "Application submitted successfully!";
                header('Location: thank-you-apply-job.php');
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
    
            $stmt->close();
        } else {
            echo "Error uploading CV file.";
        }
    }
?>

<!doctype html>
<html lang="en">

<head>

    <title>Apply for a Job | SARL</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>


    <main>
        <!--Page Content-->

        <!--Form section start-->
        <section class="bg-light py-lg-9 py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow-lg">
                            <div class="row g-0">
                                <div
                                    class="col-md-6 d-none d-md-block rounded-start-3"
                                    style="
                        background-image: url(../assets/images/landings/it-company/it-company-form-img.jpg);
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;
                     ">
                                    <!-- for mobile img-->
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="card-body p-md-5">
                                        <div class="mb-4">
                                            <h3 class="mb-1">Apply for: <span id="positionTitle"><?= htmlspecialchars ($selected_job_title);?></span></h3>
                                            <h5 class="text-muted">Location: <span id="locationTitle"><?= htmlspecialchars($selected_job_location);?></span></h5>
                                        </div>

                                        <!-- Replaced onsubmit="redirectToThankYouPage(event) with action and  -->
                                        <form class="row needs-validation g-3" novalidate method="post" action="apply-job.php" enctype="multipart/form-data">

                                            <!-- Introduced some hidden fields to capture the specific career's details -->
                                            <input type="hidden" name="job_title" value="<?php echo htmlspecialchars($selected_job_title); ?>">
                                            <input type="hidden" name="job_location" value="<?php echo htmlspecialchars($selected_job_location); ?>">

                                            <div class="col-lg-6 col-12">
                                                <label for="applicantFirstnameInput" class="form-label">
                                                    First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="applicantFirstnameInput" name="first_name" required />
                                                <div class="invalid-feedback">Please enter your first name.</div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <label for="applicantMiddlenameInput" class="form-label">
                                                    Middle Name
                                                </label>
                                                <input type="text" class="form-control" id="applicantMiddlenameInput" name="middle_name" />
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <label for="applicantLastnameInput" class="form-label">
                                                    Last Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="applicantLastnameInput" name="last_name" required />
                                                <div class="invalid-feedback">Please enter your last name.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="applicantEmailInput" class="form-label">
                                                    Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" id="applicantEmailInput" name="email" required />
                                                <div class="invalid-feedback">Please enter your email.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="applicantPhoneInput" class="form-label">
                                                    Phone Number
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="tel" class="form-control" id="applicantPhoneInput" name="phone" required />
                                                <div class="invalid-feedback">Please enter your phone number.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="linkedinProfileInput" class="form-label">
                                                    LinkedIn Profile
                                                </label>
                                                <input type="url" class="form-control" id="linkedinProfileInput" name="linkedin" placeholder="https://www.linkedin.com/in/yourprofile" />
                                            </div>
                                            <div class="col-md-12">
                                                <label for="resumeUploadInput" class="form-label">
                                                    Upload CV/Resume
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="file" class="form-control" id="resumeUploadInput" name="resume" required />
                                                <div class="invalid-feedback">Please upload your CV/Resume.</div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary rounded-pill" type="submit" name="submit_application">Submit Application</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Form section end-->

    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>


    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

    <!-- Form Submission -->
    <script>
        function redirectToThankYouPage(event) {
            event.preventDefault(); 

            // Get form elements
            const firstName = document.getElementById('applicantFirstnameInput');
            const lastName = document.getElementById('applicantLastnameInput');
            const email = document.getElementById('applicantEmailInput');
            const phone = document.getElementById('applicantPhoneInput');
            const resume = document.getElementById('resumeUploadInput');

            // Check if all required fields are filled
            if (firstName.value.trim() === '' || lastName.value.trim() === '' ||
                email.value.trim() === '' || phone.value.trim() === '' || resume.files.length === 0) {

                // If any field is empty, show validation messages
                if (firstName.value.trim() === '') {
                    firstName.classList.add('is-invalid');
                } else {
                    firstName.classList.remove('is-invalid');
                }

                if (lastName.value.trim() === '') {
                    lastName.classList.add('is-invalid');
                } else {
                    lastName.classList.remove('is-invalid');
                }

                if (email.value.trim() === '') {
                    email.classList.add('is-invalid');
                } else {
                    email.classList.remove('is-invalid');
                }

                if (phone.value.trim() === '') {
                    phone.classList.add('is-invalid');
                } else {
                    phone.classList.remove('is-invalid');
                }

                if (resume.files.length === 0) {
                    resume.classList.add('is-invalid');
                } else {
                    resume.classList.remove('is-invalid');
                }

                return; 
            }

            // If all fields are valid, Redirect
            window.location.href = "thank-you-apply-job.php";
        }
    </script>


</body>


</html>