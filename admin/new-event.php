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

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Add Project </h1>
							</div>
								
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active">Project Add</li>
								</ol>
							</div>
						</div>
					</div><!-- /.container-fluid -->
				</section>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-md-12 mx-auto">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Enter Details</h3>

									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
											<i class="fas fa-minus"></i>
										</button>
									</div>
								</div>
									
								<div class="card-body">
									<form method="post" action="processes.php" enctype="multipart/form-data">
										<div class="form-group">
											<label for="inputName">Name/Title</label>
											<input type="text" id="inputName" name="name" class="form-control" required>
										</div>

										<div class="form-group">
											<label >Short Description (Subtitle/Tagline/Theme)</label>
											<textarea class="form-control" name="sdesc" rows="3" required></textarea>
										</div>

										<div class="form-group">
											<label for="summernote2">Description</label>
											<textarea id="summernote2" class="form-control" name="desc" rows="5" required></textarea>
										</div>


										<div class="row">
											<div class="form-group col-sm-6">
												<label for="category">Category</label>
												<select class="form-control" id="category" name="category" required>
													<option value="">Select Category</option>
													<option value="Aluminium">Aluminium</option>
													<option value="Interior fit-outs">Interior Fit-outs</option>
													<option value="Residential">Residential</option>
												</select>
											</div>
											<div class="form-group col-sm-6">
												<label for="inputName">Year</label>
												<input type="number" id="inputName" name="year" class="form-control" required>
											</div>
										</div>

										<div class="form-group col-12">
											<label for="exampleInputFile">Poster/Cover Image (Preferred ratio: 3:2 or 16:9)</label>
											
											<div class="input-group">
												<div class="custom-file">
													<input type="file" class="custom-file-input" name="photos" id="exampleInputFile" required>
													<label class="custom-file-label"  for="exampleInputFile">Choose image</label>
												</div>
											</div>
										</div>
									</div>
									<!-- /.card-body -->
		
									<div class="card-footer">
										<input type="submit" value="Add Project" name="new-event" class="btn btn-success float-right mr-3">
									</form>
								</div>
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
