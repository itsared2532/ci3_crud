<!DOCTYPE html>
<html lang="en">

<head>
	<title>ci3_crud</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url('/public/login2.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('/public/Bootstrap/css/bootstrap.min.css'); ?>">
	<script src="<?php echo base_url('/public/DataTables/jQuery-3.7.0/jquery-3.7.0.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/Bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/Bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<style>
		/* body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        } */

	</style>
	<script>
		// Use window.onload to ensure the page is fully loaded
		window.onload = function () {
			// Get the button element by ID
			var myButton = document.getElementById('btnMessageModal');

			// Trigger a click on the button after the page is loaded
			myButton.click();
		};


		$(document).ready(function () {
			$('#username').focus();
			var element = document.getElementById('inputMessage');
			//alert(element);
			if (element != null && element.value != '') {
				// Hide the modal after 5 seconds
				setTimeout(function () {
					var myButton = document.getElementById('btndismissMessage');
					myButton.click();
					$('#username').focus();
				}, 3000);


			}
		});

	</script>
</head>

<body>


	<div class="wrapper">
		<!-- <h1>Animated Form Switching</h1>
			<h2>Demo: click the <span>orange links</span> to see the form animating and switching</h2> -->
		<div class="content">
			<div id="form_wrapper" class="form_wrapper">
				<form action="<?php echo site_url('login/process') ?>" class="login active" method="post">
					<h3>Login</h3>

					<div class="form-group ml-2">
						<label for="username">Username:</label>
						<input type="text" id="username" name="username" class="form-control" required>
					</div>
					<div class="form-group ml-2 mb-5">
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" class="form-control" required>
					</div>
					<div class="bottom">
						<div class="remember"><input type="checkbox" /><span>Keep me logged in</span></div>
						<input type="submit" value="Login"></input>
						<div class="clear"></div>
					</div>


				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>



	<!-- Display flash messages -->
	<?php if ($this->session->flashdata('success_message')): ?>

	<input id="inputMessage" class="form-control invisible" type="text" name="inputMessage"
		value="<?= ($this->session->flashdata('success_message')) ?>">



	<!-- The Modal -->
	<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="messageModalLabel">Information</h5>
					<button id="btndismissMessage" type="button" class="close" data-dismiss="modal" aria-label="Close">
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
	<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel"
		aria-hidden="true">
		<div class="modal-dialog  modal-sm modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="messageModalLabel">Information</h5>
					<button id="btndismissMessage" type="button" class="close" data-dismiss="modal" aria-label="Close">
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

	<input id="inputMessage" class="form-control invisible" type="text" name="inputMessage" value="">

	<?php endif; ?>

	<!-- Button to trigger the modal invisible-->
	<button id="btnMessageModal" type="button" class="btn btn-primary invisible" data-toggle="modal"
		data-target="#messageModal">
		test</button>
	<!-- /.sidebar-menu -->
</body>

</html>
