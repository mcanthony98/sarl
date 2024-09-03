<?php
    // Introduced a connection to the database so that the name
    // of a selected service is mapped to the service ID.
    require 'includes/connect.php';

    // This checks whether there is a service selected and if there is,
    // then the service ID will be stored on the $service_id
    $service_id = isset($_GET['service']) ? $_GET['service'] : null;
    $selected_service = '';

    // Created an if condition to map the service name to the corresponding
    // service ID.
    if ($service_id) {
        $query = $conn -> prepare("SELECT name FROM service WHERE service_id = ?");
        $query -> bind_param("i", $service_id);
        $query -> execute();
        $result = $query -> get_result();

        if ($result -> num_rows > 0) {
            $row = $result -> fetch_assoc();
            $selected_service = $row["name"];
        }

        $query -> close();
    }

    // Brought in some PHP code from the process.php file due to security reason.
    // The code basically tracks every time the submit button is hit and it'll
    // execute the following:
    // 1. Capture all the details and store them in their resp. variables.
    // 2. Concatenate the first and last name into 1 name.
    // 3. Insert the captured data into the database in the order given.
    // 4. Then we have an error handler in case of an error.
    if (isset($_POST["submit_contact"])) {
        $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
        $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
        $name = $first_name . ' ' . $last_name;
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $company_name = mysqli_real_escape_string($conn, $_POST["company_name"]);
        $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
        $service_type = mysqli_real_escape_string($conn, $_POST["service_type"]);
        $message = mysqli_real_escape_string($conn, $_POST["message"]);
    
        $insert = "INSERT INTO lead (name, email, company, phone, service_type, message, date_created) VALUES ('$name', '$email', '$company_name', '$phone', '$service_type', '$message', NOW())";
        
        if ($conn->query($insert) === TRUE) {
            $_SESSION["success"] = "Your message has been sent successfully.";
            header("location: contact.php");
        } else {
            $_SESSION["error"] = "Error Occurred. Please Try Again. " . $conn->error;
            header("location: contact.php");
        }
    }
?>

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
                                        <form class="row g-3 needs-validation" method="post" action="contact.php" novalidate>
                                            <div class="col-lg-6 col-md-12">
                                                <label for="contactFirstNameInput" class="form-label">
                                                    First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="contactFirstNameInput" name="first_name" required />
                                                <div class="invalid-feedback">Please enter your first name.</div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <label for="contactLastNameInput" class="form-label">
                                                    Last Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="contactLastNameInput" name="last_name" required />
                                                <div class="invalid-feedback">Please enter your last name.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactEmailInput" class="form-label">
                                                    Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" id="contactEmailInput" name="email" required />
                                                <div class="invalid-feedback">Please enter your email.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactCompanyNameInput" class="form-label">Company Name</label>
                                                <input type="text" class="form-control" id="contactCompanyNameInput" name="company_name" />
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactPhoneInput" class="form-label">Phone</label>
                                                <input type="tel" class="form-control" id="contactPhoneInput" name="phone" />
                                            </div>
                                            <div class="col-md-12">
                                                <label for="serviceTypeInput" class="form-label">Service Type</label>
                                                <select class="form-select" id="serviceTypeInput" name="service_type" required>

                                                    <!-- Included an if statement here so that when there isn't any service selected -->
                                                    <!-- i.e. when someone clicks on the contact button, it will automatically sets -->
                                                    <!-- Custom Inquiry as the default choice where a user can select from the option below. -->
                                                    <option disabled value="" <?php if(!$selected_service) echo 'selected';?>>Custom Inquiry</option>

                                                    <!-- Introduced the ternary operator in that when the condition provided is true, -->
                                                    <!-- then that particular option becomes selected. When the condition is false, -->
                                                    <!-- then it'll pass the first option and check on the second one, and it goes on  -->
                                                    <!-- till it finds a condition that's true. -->
                                                    <option value="Interior Fitouts" <?php echo ($selected_service == 'Interior Fitouts') ? 'selected' : ''; ?>>Interior Fitouts</option>
                                                    <option value="Aluminium & UPVC Fabrications" <?php echo ($selected_service == 'Aluminium & UPVC Fabrications') ? 'selected' : ''; ?>>Aluminium & UPVC Fabrications</option>
                                                    <option value="Gypsum & Acoustic Ceilings" <?php echo ($selected_service == 'Gypsum & Acoustic Ceilings') ? 'selected' : ''; ?>>Gypsum & Acoustic Ceilings</option>
                                                    <option value="Drywall & Partitioning Systems" <?php echo ($selected_service == 'Drywall & Partitioning Systems') ? 'selected' : ''; ?>>Drywall & Partitioning Systems</option>
                                                    <option value="Stainless & Mild Steel Fabrications" <?php echo ($selected_service == 'Stainless & Mild Steel Fabrications') ? 'selected' : ''; ?>>Stainless & Mild Steel Fabrications</option>
                                                    <option value="Joinery Works" <?php echo ($selected_service == 'Joinery Works') ? 'selected' : ''; ?>>Joinery Works</option>
                                                    <option value="High-End Custom Solutions" <?php echo ($selected_service == 'High-End Custom Solutions') ? 'selected' : ''; ?>>High-End Custom Solutions</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a service type.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactTextarea" class="form-label">Message</label>
                                                <textarea class="form-control" id="contactTextarea" name="message" placeholder="Write to us" rows="4" required></textarea>
                                                <div class="invalid-feedback">Please enter a message.</div>
                                            </div>
                                            <div class="d-grid">
                                                <input class="btn btn-primary" type="submit" name="submit_contact" value="Send">
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