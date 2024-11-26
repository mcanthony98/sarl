<?php 
session_start();
include "includes/sessions.php";
include "../includes/connect.php";

$res=$conn->query("SELECT * FROM event e ORDER BY e.event_id DESC");
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
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Projects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Default box -->
            <div class="card">
            <div class="card-header">
                    <div class="card-tools">
                        <a href="new-event.php" class="btn btn-info bg-gradient-info"><i class="fa fa-plus"></i> Add New Project</a>
                    </div>
                </div>
                <div class="card-body">

                    <table id="example1" class="table table-bordered table-striped ">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $res->fetch_assoc()){


                             ?>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                          <span><img src="../uploads/<?php echo $row['cover_image'];?>" width="60"></span>
                                          <span class="ml-2"><?php echo $row['title'];?></span>
                                      </div>
                                  </td>
                               
                                  <td><?php echo $row["category"];?></td>
                                
                                <td><?php echo eventStatus($row["event_status"]);?></td>

                                
                                
                                <td class="text-nowrap">
                                    <a href="edit-event.php?id=<?php echo $row["event_id"];?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>

                                    <a href="processes.php?delete-event=<?php echo $row["event_id"];?>" class="btn btn-sm btn-danger deleteBtn"><i class="fas fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

        </div>
        <!-- /.container-fluid -->
    </section>
                <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include "includes/footer.php";?>
 
</div>
<!-- ./wrapper -->

<?php include "includes/scripts.php";?>
</body>
</html>

<?php
function eventStatus($status){
  if($status == 0){
    $output = "<span class='badge badge-danger'>Hidden</span>";
  }elseif($status == 1){
    $output = "<span class='badge badge-success'>Visible</span>";
  }

  return $output;
}
?>

