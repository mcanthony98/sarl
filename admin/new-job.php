<?php 
    session_start();
    include "includes/sessions.php";
    include "../includes/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "includes/header.php";?>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php include "includes/navbar.php";?>
            <?php include "includes/sidebar.php";?>

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Add Job Posting</h1>
                            </div>
                        
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Add Job</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Enter Job Details</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                            
                                <div class="card-body">
                                    <form method="post" action="processes.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="inputTitle">Job Title</label>
                                            <input type="text" id="inputTitle" name="job_title" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputDesc">Job Description</label>
                                            <textarea id="inputDesc" class="form-control" name="job_description" rows="5" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputLoc">Location</label>
                                            <textarea id="inputLoc" class="form-control" name="location" rows="1" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputDeadline">Deadline</label>
                                            <input type="date" id="inputDeadline" class="form-control" name="deadline" rows="1" required></input>
                                        </div>

                                        <div class="card-footer">
                                            <input type="submit" value="Add Job" name="new-job" class="btn btn-success float-right mr-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php include "includes/footer.php";?>
        </div>

        <?php include "includes/scripts.php";?>
    </body>
</html>
