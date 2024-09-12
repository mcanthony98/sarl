<?php 
	session_start();
	include "includes/sessions.php";
	include "../includes/connect.php";

	$pkid = $_GET['id'];

	$res=$conn->query("SELECT * FROM applications WHERE application_id='$pkid'");
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

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">

				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Application Details</h1>
							</div>

							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active">Application Details</li>
								</ol>
							</div>
						</div>
					</div><!-- /.container-fluid -->
				</section>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-md-12 mx-auto">
							<div class="card card-primary card-outline">
								<div class="card-header">
									<h3 class="card-title">Application for <strong><?php echo $row['job_title'];?></strong> by <strong><?php echo $row['name'];?></strong></h3>
									<h3 class="card-title" style="float: right;">Date Applied: <strong><?php echo date('M d, Y H:m A', strtotime($row['date_created']));?></strong></h3>
								</div>

								<!-- Card body -->
								<div class="card-body">
									<dl class="row">
										<dt class="col-sm-4 mb-2">Name</dt>
										<dd class="col-sm-8 mb-2"><?php echo $row['name'];?></dd>

										<dt class="col-sm-4 mb-2">Phone Number</dt>
										<dd class="col-sm-8 mb-2"><?php echo $row['phone_number'];?></dd>

										<dt class="col-sm-4 mb-2">Email</dt>
										<dd class="col-sm-8 mb-2"><?php echo $row['email'];?></dd>

										<dt class="col-sm-4 mb-2">LinkedIn</dt>
										<dd class="col-sm-8 mb-2"><a href="<?php echo $row['linkedin'];?>">Visit Profile</a></dd>

										<dt class="col-sm-4 mb-2">CV</dt>
										<dd class="col-sm-8 mb-2">
											<?php if (!empty($row['cv_file_path'])): ?>
											<a href="../<?php echo $row['cv_file_path']; ?>" download target="_blank">Download This CV</a>

											<?php else: ?>
											No CV uploaded.
											<?php endif; ?>
										</dd>
									</dl>

									<div class="pdf-viewer mt-3">
										<iframe src="../<?php echo $row['cv_file_path']; ?>" width="100%" height="1000px"></iframe>
									</div>
								</div>
								<!-- /.card-body -->

								<div class="card-footer"></div>
							</div>
							<!-- /.card -->
						</div>
					</div>
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
