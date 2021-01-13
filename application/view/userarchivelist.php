<?php
$this->load->view('header/admin_header');
?>

<div class="container-fluid">

	<div class="mt-4">
		<button id="addBtn" class="btn btn-outline-success waves-effect fa fa-plus">&nbsp;Add Users</button>
		<br><br><br>
		<table id="usersTable" class="table table-bordered table-hover nowrap w-100" style="text-align:center;">

			<thead>

				<tr>

					<th style="width:11%;">User name</th>
					<th style="width:11%;">First name</th>
					<th style="width:11%;">Middle name</th>
					<th style="width:11%;">Last name</th>
					<th style="width:11%;">Action</th>
				</tr>
			</thead>
		</table>

	</div>
</div>


<!-- Modal Add-->
<div class='modal fade' id='AddUserModal' role='dialog'>
	<div class='modal-dialog modal-lg'>
		<!-- Modal content-->
		<form class='modal-content' id='addForm' action="">
			<div class='modal-header'>
				<label>Register User</label>
				<h4 class='modal-title'></h4>
			</div>
			<div class='modal-body'>
				<label>First Name : </label><input required type='text' class='form-control' name='FName' id='FName' value='' />
				<label>Middle Name : </label><input required type='text' class='form-control' name='MName' id='MName' value='' />
				<label>Last Name : </label><input required type='text' class='form-control' name='LName' id='LName' value='' />
				<label>Office : </label><input required type='text' class='form-control' name='Office' id='Office' value='' />
				<label>Email : </label><input required type='email' class='form-control' name='Email' id='Email' value='' />
				<label>Username : </label><input required type='text' class='form-control' name='UName' id='UName' value='' />
				<label>Password : </label><input required type='password' class='form-control' name='Pwd' id='Pwd' value='' />
				<label>Agency</label>
				<select name="Agency" class="form-control">
					<option value="">Select Agency . . .</option>
					<?php

					if (!empty($getAgency)) {

						foreach ($getAgency as $value) { ?>

							<option value="<?= $value->ID_Agency ?>"><?= $value->Agency_Name ?></option>
							<?php
						}
					} ?>
				</select>
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
				<button type='submit' class='btn btn-success'>Save Changes</button>
			</div>
		</form>
	</div>
</div>

<!-- Modal Update-->
<div class='modal fade' id='UpdateUserModal' role='dialog'>
	<div class='modal-dialog modal-lg'>
		<!-- Modal content-->
		<form class='modal-content' id='updateForm' action="">
			<div class='modal-header'>
				<label>Update User</label>
				<h4 class='modal-title'></h4>
			</div>
			<div class='modal-body'>
				<input type='hidden' class='form-control' name='ID_User' id='ID_User' value='' />
				<label>First Name : </label><input required type='text' class='form-control' name='FName' id='FName' value='' />
				<label>Middle Name : </label><input required type='text' class='form-control' name='MName' id='MName' value='' />
				<label>Last Name : </label><input required type='text' class='form-control' name='LName' id='LName' value='' />
				<label>Office : </label><input required type='text' class='form-control' name='Office' id='Office' value='' />
				<label>Email : </label><input required type='email' class='form-control' name='Email' id='Email' value='' />
				<label>Username : </label><input required type='text' class='form-control' name='UName' id='UName' value='' />
				<label>Password : </label><input required type='password' class='form-control' name='Pwd' id='Pwd' value='' />
				<label>Agency</label>
				<select name="Agency" class="form-control" id="Agency">
					<option value="">Select Agency . . .</option>
					<?php

					if (!empty($getAgency)) {

						foreach ($getAgency as $value) { ?>

							<option value="<?= $value->ID_Agency ?>"><?= $value->Agency_Name ?></option>
							<?php
						}
					} ?>
				</select>
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
				<button type='submit' class='btn btn-success'>Save Changes</button>
			</div>
		</form>
	</div>
</div>

<script>
	$(document).ready(function() {
		var usersTable = $('#usersTable').DataTable({
			"fixedColumns": true,
      // "select": true,
      "responsive": true,
      // dom: '<"ButtonStuff"B><"FilterStuff"f>t',
      "bProcessing": true,
      "serverSide": true,
      // "searching": false,
      // "paging": false,
      // "bInfo": false,
      "ajax": {
      	"url": "<?= base_url('Rpmes_controller/datatable_users_archive') ?>",
      	"type": "POST"
      },
      columns: [{
      	render: function(data, type, value) {
      		return value["UName"];
      	}
      },{
      	render: function(data, type, value) {
      		return value["FName"];
      	}
      },{
      	render: function(data, type, value) {
      		return value["MName"];
      	}
      },{
      	render: function(data, type, value) {
      		return value["LName"];
      	}
      }, {
      	render: function(data, type, value) {

      		var buttons = "<button type='button' class='btn btn-outline-warning fa fa-undo' id='restoreBtn' data-id='" + value["ID_User"] + "'>&nbsp;Restore</button>";
      		return buttons;
      	},
      	"orderable": false
      }]
    });


		$("#usersTable").on("click", "#restoreBtn", function() {
			var id = $(this).data('id');
			var UName = $(this).data('UName');
      // $("#disableBtn").val(data["Confirmed"]);
      Swal.fire({
      	title: 'Are you sure?',
      	text: "You won't be able to revert this!",
      	type: 'error',
      	showCancelButton: true,
      	confirmButtonColor: '#5cb85c',
      	cancelButtonColor: '#d33',
      	confirmButtonText: 'Yes, Restore it!'
      }).then((result) => {
      	if (result.value) {
      		$.ajax({
      			url: "<?= base_url("Rpmes_controller/Restore_User") ?>",
      			data: {
      				"ID_User": id,
      				"Archive": 0,
      				"UName": UName,
      				"Confirmed": 0
      			},
      			dataType: "JSON",
      			method: "POST",

      			success: function(data) {
              // alert(data.message);
              Swal.fire(
                        data.message,
                        '',
                        'success'
                        )
              usersTable.ajax.reload();
            }
          });
      	}
      })
    });






	});
</script>
</body>

</html>	