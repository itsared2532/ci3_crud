<style>
	.footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
</style>

<div class="container-fluid !direction !spacing">

		

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
			<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
		</p>

</div>
