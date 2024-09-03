<?php 
    session_start();
    include "includes/sessions.php";
    include "../includes/connect.php";

    $id = $_GET['id'];
    $res = $conn->query("SELECT * FROM jobs WHERE job_id='$id' ORDER BY job_id DESC");
    $row = $res->fetch_assoc();
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
                                <h1>Edit Job Posting</h1>
                            </div>
                            
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Job Edit</li>
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
                                        <input type="hidden" name="job_id" value="<?php echo $id;?>" >
                                        
                                        <div class="form-group">
                                            <label for="inputName">Job Title</label>
                                            <input type="text" id="inputName" name="job_title" value="<?php echo $row['job_title'];?>" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputLocation">Location</label>
                                            <input type="text" id="inputLocation" name="location" value="<?php echo $row['location'];?>" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputDeadline">Deadline</label>
                                            <input type="date" id="inputDeadline" name="deadline" value="<?php echo $row['deadline'];?>" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="summernote2">Job Description</label>
                                            <textarea id="summernote2" class="form-control" name="job_description" rows="4" required><?php echo $row['job_description'];?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputStatus">Status</label>
                                            <select id="inputStatus" class="form-control custom-select" name="status" required>
                                                <option <?php if($row['job_status'] == 1){echo "selected";}?> value="1">Active</option>
                                                <option <?php if($row['job_status'] == 0){echo "selected";}?> value="0">Hidden</option>
                                            </select>
                                        </div>
                                        
                                        <input type="submit" value="Update Job" name="edit-job" class="btn btn-success float-right mr-3">
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
