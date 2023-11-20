<div class="card">
	<!-- <div class="card-header">
		<h4><php echo $title; ?></h4>
	</div> -->
	<div class="card-body">
		<!-- <h5 class="card-title">
			
		</h5> -->

        
		<p class="card-text">
			<!--<php echo form_open('users/create'); ?> -->

			<form method="post" action="<?php echo site_url('users/update'); ?>">
            <input type="hidden" name="id" value="<?php echo $user->id; ?>">
				<div class="row">
					<div class="col-4 text-right">
						<label for="username">Username</label>
					</div>
					<div class="col-8">
                        <input type="text" name="username" value="<?php echo $user->username; ?>" class="form-control-sm">
						<span style="color:red;"><?php echo form_error('username'); ?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-4 text-right">
						<label for="email">Email : </label>
					</div>
					<div class="col-8">
                        <input type="text" name="email" value="<?php echo $user->email; ?>" class="form-control-sm">
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



<!-- application/views/users/edit.php -->


