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
                                            <h3 class="mb-1">Apply for: <span id="positionTitle">[Position Title]</span></h3>
                                            <h5 class="text-muted">Location: <span id="locationTitle">[Location]</span></h5>
                                        </div>
                                        <form class="row needs-validation g-3" novalidate>
                                            <div class="col-lg-6 col-12">
                                                <label for="applicantFirstnameInput" class="form-label">
                                                    First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="applicantFirstnameInput" required />
                                                <div class="invalid-feedback">Please enter your first name.</div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <label for="applicantMiddlenameInput" class="form-label">
                                                    Middle Name
                                                </label>
                                                <input type="text" class="form-control" id="applicantMiddlenameInput" />
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <label for="applicantLastnameInput" class="form-label">
                                                    Last Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="applicantLastnameInput" required />
                                                <div class="invalid-feedback">Please enter your last name.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="applicantEmailInput" class="form-label">
                                                    Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" id="applicantEmailInput" required />
                                                <div class="invalid-feedback">Please enter your email.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="applicantPhoneInput" class="form-label">
                                                    Phone Number
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="tel" class="form-control" id="applicantPhoneInput" required />
                                                <div class="invalid-feedback">Please enter your phone number.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="linkedinProfileInput" class="form-label">
                                                    LinkedIn Profile
                                                </label>
                                                <input type="url" class="form-control" id="linkedinProfileInput" placeholder="https://www.linkedin.com/in/yourprofile" />
                                            </div>
                                            <div class="col-md-12">
                                                <label for="resumeUploadInput" class="form-label">
                                                    Upload CV/Resume
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="file" class="form-control" id="resumeUploadInput" required />
                                                <div class="invalid-feedback">Please upload your CV/Resume.</div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary rounded-pill" type="submit">Submit Application</button>
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

</body>


</html>