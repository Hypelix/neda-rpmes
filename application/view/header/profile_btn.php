

<div class="container">

	<!-- The Modal -->
	<div class='modal fade' id='EditProfile' role='dialog'>
		<div class='modal-dialog modal-lg'>
			<!-- Modal content-->
			<form class='modal-content' id='editForm' action="">
				<div class='modal-header'>
					<label>Edit Profile</label>
					<h4 class='modal-title'></h4>
				</div>
				<div class='modal-body'>
					<input type='hidden' class='form-control' name='ID_User' id='ID_User' value='<?=$this->session->ID_User?>' />
					<label>First Name : </label><input required type='text' class='form-control' name='FName' id='FName' value='<?=$this->session->FName?>' />
					<label>Middle Name : </label><input required type='text' class='form-control' name='MName' id='MName' value='<?=$this->session->MName?>' />
					<label>Last Name : </label><input required type='text' class='form-control' name='LName' id='LName' value='<?=$this->session->LName?>' />
					<label>Office : </label><input required type='text' class='form-control' name='Office' id='Office' value='<?=$this->session->Office?>' />
					<label>Email : </label><input required type='email' class='form-control' name='Email' id='Email' value='<?=$this->session->Email?>' />
					<label>Username : </label><input required type='text' class='form-control' name='UName' id='UName' value='<?=$this->session->UName?>' />
					<label>Password : </label><input required type='password' class='form-control' name='Pwd' id='Pwd' value='' />
				</div>
				<div class='modal-footer'>
					<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
					<button type='submit' class='btn btn-success'>Save Changes</button>
				</div>
			</form>
		</div>
	</div>

</div>

<script>
	$(document).ready(function() {
		$("#editForm").on("submit", function(event) {
			$("#EditProfile").modal("hide");
			event.preventDefault();
			$.ajax({
				url: "<?= base_url("Rpmes_controller/Update_User") ?>",
				data: $(this).serialize(),
				dataType: "JSON",
				method: "POST",
				success: function(data) {
				// alert(data.message);
				Swal.fire({
					type: 'success',
					title: data.message
				})

			}
		});
		});
	});
</script>