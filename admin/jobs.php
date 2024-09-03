<?php 
    session_start();
    include "includes/sessions.php";
    include "../includes/connect.php";

    $res = $conn->query("SELECT * FROM jobs ORDER BY job_id DESC");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "includes/header.php"; ?>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php include "includes/navbar.php"; ?>
            <?php include "includes/sidebar.php"; ?>

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Job Postings</h1>
                            </div>
                            
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Job Postings</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-tools">
                                    <a href="new-job.php" class="btn btn-info bg-gradient-info"><i class="fa fa-plus"></i> Add New Job</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Job Title</th>
                                            <th>Description</th>
                                            <th>Location</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = $res->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $row['job_title']; ?></td>
                                            <td><?php echo $row['job_description']; ?></td>
                                            <td><?php echo $row['location']; ?></td>
                                            <td><?php echo $row['deadline']; ?></td>
                                            <td><?php echo jobStatus($row['job_status']); ?></td>
                                            <td class="text-nowrap">
                                                <a href="edit-job.php?id=<?php echo $row['job_id']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="processes.php?delete-job=<?php echo $row['job_id']; ?>" class="btn btn-sm btn-danger deleteBtn"><i class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php include "includes/footer.php"; ?>
        </div>

        <?php include "includes/scripts.php";?>
    </body>
</html>

<?php
    function jobStatus($status){
        if($status == 0){
            return "<span class='badge badge-danger'>Hidden</span>";
        } elseif ($status == 1){
            return "<span class='badge badge-success'>Active</span>";
        }
    }
?>
