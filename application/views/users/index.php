<!-- application/views/users/index.php -->
<style>
	/* Ensure the table header is fixed */
	.table-container {
		position: sticky;
		top: 0;
		background-color: #f8f9fa;
		/* Set background color */
		z-index: 1000;
		/* Ensure it's above other elements */
	}

</style>

<div class="card" style="font-size:0.9em;">
	<!-- <div class="card-header">
		<div class="row">
			<div class="col-6">
				<h4>Users</h4>
			</div>
			<div class="col-6 text-right">

			</div>

		</div>
	</div> -->


	<div class="card-body">
		<h5 class="card-title  w-100">
			<div class="row">
				<div class="col-6">
					<a title="Create User" class="btn btn-sm btn-primary cursor-pointer"
						href="<?php echo site_url('users/create'); ?>"><i class="fa-solid fa-circle-plus"></i> User</a>

					<!-- ในไฟล์ views/your_view.php -->
					<button title="Delete Selected" id="deleteSelected" class="btn btn-sm btn-danger"><i
							class="fa-solid fa-calendar-xmark"></i> Del.Selected</button>
				</div>
				<div class="col-6">

					<form action="<?php echo site_url('users/upload'); ?>" method="post" enctype="multipart/form-data">
						<div class="row d-flex justify-content-end">
							<div class="col-md-2 text-right">
								<button id="submitBtn" class="btn btn-sm btn-primary" type="submit" name="submitUpload"
									title="Upload File">
									<i class="fas fa-upload"></i>
								</button>
								<!-- <input id="submitBtn" class="btn btn-sm btn-primary" type="submit" name="submitUpload" value="Upload"> -->
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="file" class="form-control-file form-control-sm" id="fileInput"
										name="fileInput" accept=".xlsx, .xls">
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>

			<!-- thead-light -->
		</h5>
		<p class="card-text">
			<div class="">
				<table id="tbUser" class="table table-hover table-sm">
					<thead class="alert-primary">
						<tr>
							<th></th>
							<th>Username</th>
							<th>Email</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($users as $user): ?>
						<tr id="row_<?php echo $user->id; ?>">
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->username; ?></td>
							<td><?php echo $user->email; ?></td>
							<td>
								<a title="Edit" class="btn btn-sm btn-success"
									href="<?php echo site_url('users/edit/'.$user->id); ?>"><i
										class="fa-solid fa-pencil"></i></a> |
								<!-- <a class="btn btn-sm btn-danger delete-link"
								href="<php echo site_url('users/delete/'.$user->id); ?>"
								onclick="return confirm('Are you sure?')">Delete</a> -->

								<a title="Delete" class="btn btn-sm btn-danger delete-link"
									href="<?php echo site_url('users/delete/'.$user->id); ?>" data-toggle="modal"
									data-target="#deleteModal" data-username="<?php echo $user->username; ?>"><i
										class="fa-solid fa-trash"></i></a>

							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>

				</table>
			</div>



		</p>
	</div>
</div>

<!-- เพิ่ม Modal Bootstrap ในส่วนที่ต้องการ -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
				<button id="btndismissMessage_Index" type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Are you sure you want to delete this user : <span id="usernameInModal"></span> ?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
				<a href="#" class="btn btn-sm btn-danger" id="deleteConfirm">Delete</a>
			</div>
		</div>
	</div>
</div>

<!-- Add this modal structure to your HTML -->
<div class="modal fade" id="fileModal" tabindex="-1" role="dialog" aria-labelledby="fileModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="fileModalLabel">File Validation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Please choose a file before submitting.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Structure -->
<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="alertModalLabel">Alert</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="alertModalBody">
				<!-- Alert message will be displayed here -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>




<script>
	$(document).ready(function () {
		var table = $('#tbUser').DataTable({
			// buttons: ['colvis'],
			'columnDefs': [{
				'targets': 0,
				'checkboxes': {
					'selectRow': true
				}
			}],
			dom: 'Bfrtip',

			buttons: [{
					extend: 'copyHtml5',
					exportOptions: {
						columns: ':not(:last-child)' // Exclude the last column
					}
				},
				{
					extend: 'excelHtml5',
					exportOptions: {
						columns: ':not(:last-child)' // Exclude the last column
					}
				},
				{
					extend: 'csvHtml5',
					exportOptions: {
						columns: ':not(:last-child)' // Exclude the last column
					}
				},
				{
					extend: 'pdfHtml5',
					exportOptions: {
						columns: ':not(:last-child)' // Exclude the last column
					}
				},
				{
					extend: 'colvis',
					exportOptions: {

					}
				}
			]

		});


		$('#submitBtn').on('click', function () {
			// Check if a file is selected
			if ($('#fileInput')[0].files.length === 0) {
				showAlert('Please choose a file before submitting.');
				//alert('Please choose a file before submitting.');
				// Show the modal
				//$('#fileModal').modal('show');
				return false; // Prevent form submission
			}

			// If a file is selected, submit the form
			$('#uploadForm').submit();
		});

		// เมื่อปุ่มลบถูกคลิก
		$('#deleteSelected').click(function () {
			// รวบรวม id ของ checkbox ที่ถูกเลือก
			var selected_ids = table.column(0).checkboxes.selected().toArray();

			// ตรวจสอบว่ามี checkbox ที่ถูกเลือกหรือไม่
			if (selected_ids.length > 0) {

				// ส่งคำขอลบไปยัง Controller
				$.post('<?php echo site_url("users/delete_selected"); ?>', {
					selected_ids: selected_ids
				}, function (response) {
					var result = JSON.parse(response);

					if (result.status == 'success') {
						showAlert(result.message);
						//alert(result.message);
						// รีโหลดหน้าหลังจากลบข้อมูลเรียบร้อย
						setTimeout(function () {
							location.reload();
						}, 2000); // 2000 milliseconds = 2 seconds

						//location.reload();
					} else {
						showAlert(result.message);
						//alert(result.message);
					}
				});
			} else {

				// เรียกใช้ showAlert แทน alert
				showAlert('กรุณาเลือกรายการที่ต้องการลบ');

				//alert('กรุณาเลือกรายการที่ต้องการลบ');
			}
		});

	});

	// ใช้ Event Delegation สำหรับลิงก์ Delete
	$(document).on('click', '.delete-link', function (event) {
		event.preventDefault(); // ป้องกันการนำทางไปยังลิงก์

		var deleteUrl = $(this).attr('href'); // URL สำหรับการลบ
		var username = $(this).data('username'); // ข้อมูล username
		// แสดงข้อมูล username ใน Modal
		$('#usernameInModal').text(username);

		// เมื่อปุ่ม Delete ใน Modal ถูกคลิก
		$('#deleteConfirm').on('click', function () {
			// ดำเนินการลบโดยการใช้ AJAX POST request
			$.post(deleteUrl, function (response) {
				// หากต้องการดำเนินการอื่น ๆ หลังจากการลบ
				// ให้เพิ่มโค้ดที่นี่
				// รีโหลดหน้าหลังจากลบข้อมูลเรียบร้อย
				//location.reload();

				var rowIdToDelete = extractIdFromUrl(deleteUrl); // ดึง id ออกมาจาก URL
				$('#row_' + rowIdToDelete).remove();
				//alert(rowIdToDelete);
				var myButtonDismiss = document.getElementById('btndismissMessage_Index');
				myButtonDismiss.click();

			});

			showAlert('Successfully deleted');
		});


	});


	function testDel(pId) {
		var isConfirmed = confirm("Are you sure you want to proceed?");

		if (isConfirmed) {
			var url = "delete/" + pId + "";
			$.post(url, function (data) {});
		}
	}

	// ฟังก์ชันที่ใช้ในการดึง id จาก URL
	function extractIdFromUrl(url) {
		var urlParts = url.split('/'); // แยก URL ด้วย '/'
		var lastPart = urlParts[urlParts.length - 1]; // ดึงส่วนท้ายสุดของ URL
		var id = lastPart.replace('row_', ''); // เอา 'row_' ออกเพื่อได้ id ที่เหลือ

		return id;
	}

	function showAlert(message) {
		// กำหนดข้อความใน Modal
		$('#alertModalBody').text(message);
		jQuery.noConflict();
		$('#alertModal').modal('show');

	}

</script>
