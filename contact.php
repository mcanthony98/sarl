<!doctype html>
<html lang="en">

<head>

    <title>Contact Us | SARL</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>


    <main>
        <!--Page Content-->
        
        <!--Pageheader start-->
        <section class="py-5 py-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                        <h1 class="mb-3">Contact us</h1>
                        <p class="mb-0 lead">Please reach out to us if you have questions about our services, or anything else.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Pageheader end-->
        <!--Contact us start-->
        <section class="mb-xl-9 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="row g-xl-7 gy-5">
                            <div class="col-md-7 col-12">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-lg-6 col-md-12">
                                                <label for="contactFirstNameInput" class="form-label">
                                                    First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="contactFirstNameInput" required />
                                                <div class="invalid-feedback">Please enter your first name.</div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <label for="contactLastNameInput" class="form-label">
                                                    Last Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="contactLastNameInput" required />
                                                <div class="invalid-feedback">Please enter your last name.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactEmailInput" class="form-label">
                                                    Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" id="contactEmailInput" required />
                                                <div class="invalid-feedback">Please enter your email.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactCompanyNameInput" class="form-label">Company Name</label>
                                                <input type="text" class="form-control" id="contactCompanyNameInput" />
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactPhoneInput" class="form-label">Phone</label>
                                                <input type="tel" class="form-control" id="contactPhoneInput" />
                                            </div>
                                            <div class="col-md-12">
                                                <label for="serviceTypeInput" class="form-label">Service Type</label>
                                                <select class="form-select" id="serviceTypeInput" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <option>Interior Fitouts</option>
                                                    <option>Aluminum & Glass Works</option>
                                                    <option>Suspended Ceilings</option>
                                                    <option>Bespoke Joinery Works</option>
                                                    <option>Architectural Stainless Steel Products</option>
                                                    <option>Paint Works</option>
                                                    <option>Custom Inquiry</option>
                                                    <option>Other</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a service type.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactTextarea" class="form-label">Message</label>
                                                <textarea class="form-control" id="contactTextarea" placeholder="Write to us" rows="4" required></textarea>
                                                <div class="invalid-feedback">Please enter a message.</div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary" type="submit">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12">
                                <div class="mb-7">
                                    <h4>Contact Information</h4>
                                    <p>
                                        Road A, Off Enterprise Road,<br>
                                        Industrial Area<br>
                                        PO Box 40785 00100 GPO, Nairobi<br><br>

                                        <strong>Call:</strong><br>
                                        +254 20 650 287 / 651 835<br>
                                        +254 558 584 / 653 02 19 / 801 49 19<br><br>

                                        <strong>Mobile:</strong><br>
                                        +254 722 / 735 510 413<br><br>

                                        <strong>Fax:</strong><br>
                                        +254 20 557 546<br><br>

                                        <strong>Email:</strong><br>
                                        <a href="mailto:info@sarl.co.ke" class="text-primary">info@sarl.co.ke</a>
                                    </p>
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

</body>

</html>