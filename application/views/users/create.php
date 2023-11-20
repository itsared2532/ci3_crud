<div class="card">
	<!-- <div class="card-header">
		<h4><php echo 'Create User' ?></h4>
	</div> -->
	<div class="card-body">
		<!-- <h5 class="card-title">
			
		</h5> -->
		<p class="card-text">
			<!--<php echo form_open('users/create'); ?> -->

			<form method="post" action="<?php echo site_url('users/create'); ?>">

				<div class="row">
					<div class="col-4 text-right">
						<label for="username">Username : </label>
					</div>
					<div class="col-8">
						<input id="username" type="text" name="username" class="form-control-sm">
						<span style="color:red;"><?php echo form_error('username'); ?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-4 text-right">
						<label for="email">Email : </label>
					</div>
					<div class="col-8">
						<input id="email" type="text" name="email" class="form-control-sm">
						<span style="color:red;"><?php echo form_error('email'); ?></span>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-4 text-right">

					</div>
					<div class="col-8">
						<button class="btn btn-sm btn-primary" type="submit">Save</button>
						<a class="btn btn-sm btn-secondary"
							href="<?php echo site_url('users/index'); ?>">Back</a>
					</div>
				</div>
			</form>
		</p>
	</div>
</div>

<script>
	// เมื่อเอกสารโหลดเสร็จ
$(document).ready(function() {
    // ทำให้ input ที่มี id เท่ากับ 'username' ได้รับการโฟกัส
    $('#username').focus();
});

</script>