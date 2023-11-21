<!DOCTYPE html>
<html lang="en">

<head>
	<title>ci3_crud</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('/public/Bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/public/DataTables/datatables.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/public/DataTables_Checkbox/css/dataTables.checkboxes.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/public/fixedColumns.dataTables.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/public/buttons.dataTables.min.css'); ?>">


	<link rel="stylesheet" href="<?php echo base_url('/public/adminlte.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/public/fontawesome/css/all.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/public/fontawesome/css/fontawesome.min.css'); ?>">


	<script src="<?php echo base_url('/public/DataTables/jQuery-3.7.0/jquery-3.7.0.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/Bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/Bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/DataTables/datatables.min.js'); ?>"></script>

	<script src="<?php echo base_url('/public/dataTables.fixedColumns.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/dataTables.buttons.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/jszip.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/pdfmake.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/vfs_fonts.js'); ?>"></script>
	<script src="<?php echo base_url('/public/buttons.html5.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/buttons.colVis.min.js'); ?>"></script>


	<script src="<?php echo base_url('/public/adminlte.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/fontawesome/js/all.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/fontawesome/js/fontawesome.min.js'); ?>"></script>

	<script src="<?php echo base_url('/public/DataTables_Checkbox/js/dataTables.checkboxes.min.js'); ?>"></script>

	<style>
		.content-wrapper {
			flex-grow: 1;
			overflow-y: auto;
			padding: 10px;
		}

	</style>
</head>

<body style="font-size:.85em;">

	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

			</li>
			<!-- <li class="nav-item d-none d-sm-inline-block">
				<a href="<php echo base_url('index.php/users/index'); ?>" class="nav-link">Home</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="#" class="nav-link">Contact</a>
			</li> -->
		</ul>

		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<!-- Navbar Search -->
			<li class="nav-item">
				<a class="nav-link" data-widget="navbar-search" href="#" role="button">
					<i class="fas fa-search"></i>
				</a>
				<div class="navbar-search-block">
					<form class="form-inline">
						<div class="input-group input-group-sm">
							<input class="form-control form-control-navbar" type="search" placeholder="Search"
								aria-label="Search">
							<div class="input-group-append">
								<button class="btn btn-navbar" type="submit">
									<i class="fas fa-search"></i>
								</button>
								<button class="btn btn-navbar" type="button" data-widget="navbar-search">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</li>

			<!-- Messages Dropdown Menu -->
			<li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="#">
					<i class="far fa-comments"></i>
					<span class="badge badge-danger navbar-badge">3</span>
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<a href="#" class="dropdown-item">
						<!-- Message Start -->
						<div class="media">
							<!-- <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle"> -->
							<div class="media-body">
								<h3 class="dropdown-item-title">
									Brad Diesel
									<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
								</h3>
								<p class="text-sm">Call me whenever you can...</p>
								<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
							</div>
						</div>
						<!-- Message End -->
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<!-- Message Start -->
						<div class="media">
							<!-- <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3"> -->
							<div class="media-body">
								<h3 class="dropdown-item-title">
									John Pierce
									<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
								</h3>
								<p class="text-sm">I got your message bro</p>
								<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
							</div>
						</div>
						<!-- Message End -->
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<!-- Message Start -->
						<div class="media">
							<!-- <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3"> -->
							<div class="media-body">
								<h3 class="dropdown-item-title">
									Nora Silvester
									<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
								</h3>
								<p class="text-sm">The subject goes here</p>
								<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
							</div>
						</div>
						<!-- Message End -->
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
				</div>
			</li>
			<!-- Notifications Dropdown Menu -->
			<li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="#">
					<i class="far fa-bell"></i>
					<span class="badge badge-warning navbar-badge">15</span>
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<span class="dropdown-item dropdown-header">15 Notifications</span>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-envelope mr-2"></i> 4 new messages
						<span class="float-right text-muted text-sm">3 mins</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-users mr-2"></i> 8 friend requests
						<span class="float-right text-muted text-sm">12 hours</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-file mr-2"></i> 3 new reports
						<span class="float-right text-muted text-sm">2 days</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-widget="fullscreen" href="#" role="button">
					<i class="fas fa-expand-arrows-alt"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
					role="button">
					<i class="fas fa-th-large"></i>
				</a>
			</li>
		</ul>


	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container  elevation-4 -->
	<aside class="main-sidebar sidebar-dark-primary">
		<!-- Brand Logo -->


		<a href="<?php echo site_url('welcome/index'); ?>" class="brand-link "><span
				class="brand-text font-weight-light">CI3 CRUD</span></a>

		<!-- Sidebar sidebar vh-10-->
		<div class="">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
				</div>
				<div class="info">
					<div class="row">
						<div class="col-6">
						<span class="text-white">
						<?php
									// Access user data from the session
									$user_data = $this->session->userdata('user_data');

									if ($this->session->userdata('logged_in') && $user_data) {
										// Display user-specific information
										echo 'Welcome, ' . $user_data['username'] . '!';
										echo '<p>Email: ' . $user_data['email'] . '</p>';
										// Add more user-specific information as needed
									} else {
										// Handle the case when the user is not logged in
										echo '<p>User not logged in.</p>';
									}
								?>
						</span>
						</div>
						<div class="col-6">
							<div class="row w-100">
								<div class="col-12 text-right">
									<a href="<?php echo site_url('users/logout'); ?>" class="right badge badge-danger small"><i class="fa-solid fa-right-from-bracket"></i> logout
										</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- SidebarSearch Form -->
			<!-- <div class="form-inline">
				<div class="input-group" data-widget="sidebar-search">
					<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-sidebar">
							<i class="fas fa-search fa-fw"></i>
						</button>
					</div>
				</div>
			</div> -->

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
					data-accordion="false">
					<li class="nav-item">
						<a href="<?php echo site_url('users/index'); ?>" class="nav-link">
							<i class="fa-solid fa-bars-staggered"></i>
							<p>
								User Lists
								<span class="right badge badge-danger">New</span>
							</p>
						</a>
					</li>
				</ul>
			</nav>


			<!-- Button to trigger the modal invisible-->
			<button id="btnMessageModal" type="button" class="btn btn-primary invisible" data-toggle="modal"
				data-target="#messageModal"></button>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) content-header -->
		<div class="">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<h5 class="">
							<?php echo $title; ?>
						</h5>
					</div><!-- /.col -->
					<div class="col-sm-6">

						<!-- Display flash messages -->
						<?php if ($this->session->flashdata('success_message')): ?>

						<input id="inputMessage" class="form-control invisible" type="text" name="inputMessage"
							value="<?= ($this->session->flashdata('success_message')) ?>">



						<!-- The Modal -->
						<div class="modal fade" id="messageModal" tabindex="-1" role="dialog"
							aria-labelledby="messageModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="messageModalLabel">Information</h5>
										<button id="btndismissMessage" type="button" class="close" data-dismiss="modal"
											aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<!-- Content goes here -->
										<!-- Moving Checkmark -->
										<div class="row w-100">
											<div class="col text-center">
												<i class="fa-regular fa-circle-check fa-3x text-success"></i>
											</div>
										</div>

										<div class="row mt-2">
											<div class="col text-center">
												<?php echo $this->session->flashdata('success_message'); ?>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>

						<?php elseif  ($this->session->flashdata('error_message')): ?>

						<input id="inputMessage" class="form-control invisible" type="text" name="inputMessage"
							value="<?= ($this->session->flashdata('error_message')) ?>">

						<!-- The Modal -->
						<div class="modal fade" id="messageModal" tabindex="-1" role="dialog"
							aria-labelledby="messageModalLabel" aria-hidden="true">
							<div class="modal-dialog  modal-sm modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="messageModalLabel">Information</h5>
										<button id="btndismissMessage" type="button" class="close" data-dismiss="modal"
											aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<!-- Content goes here -->
										<div class="row w-100 ">
											<div class="col text-center">
												<i class="fa-regular fa-circle-xmark fa-3x text-danger"></i>
											</div>
										</div>
										<div class="row bt-2">
											<div class="col text-center">
												<?php echo $this->session->flashdata('error_message'); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php else: ?>

						<input id="inputMessage" class="form-control invisible" type="text" name="inputMessage"
							value="">

						<?php endif; ?>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->


		<script>
			document.addEventListener("DOMContentLoaded", function () {
				var contentWrapperHeight = document.querySelector('.content-wrapper').offsetHeight;
				document.querySelector('.main-sidebar').style.height = contentWrapperHeight + 'px';
			});

			// Use window.onload to ensure the page is fully loaded
			window.onload = function () {
				// Get the button element by ID
				var myButton = document.getElementById('btnMessageModal');

				// Trigger a click on the button after the page is loaded
				myButton.click();
			};

			var element = document.getElementById('inputMessage');
			//alert(element);
			if (element != null && element.value != '') {
				// Hide the modal after 5 seconds
				setTimeout(function () {
					var myButton = document.getElementById('btndismissMessage');
					myButton.click();
				}, 3000);
			}

		</script>
