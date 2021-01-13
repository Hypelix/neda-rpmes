<?php
$this->load->view('header/admin_header');
?>



<div class="container-fluid">

	<div class="mt-4">
		<button id="addBtn" class="btn btn-outline-success waves-effect fa fa-wpforms">&nbsp;Add Form</button>
		<br><br><br>
		<table id="usersTable" class="table table-bordered table-hover nowrap w-100" style="text-align:center;">

			<thead>

				<tr>

					<th style="width:11%;">Name of Project</th>
					<th style="width:11%;">Location</th>
					<th style="width:11%;">Sector</th>
					<th style="width:11%;">FS</th>
					<th style="width:11%;">Action</th>
				</tr>
			</thead>
		</table>

	</div>
</div>

<!-- Modal Update-->
<div class='modal fade' id='Form1Modal' role='dialog' data-backdrop="static">
	<div class='modal-dialog modal-lg'>
		<!-- Modal content-->
		<form class='modal-content' id='updateForm' action="">
			<div class='modal-header'>
				<label>Update User</label>
				<button type="button" class="close" data-dismiss="modal" style="color: #007bff">&times;</button>

				<h4 class='modal-title'></h4>
			</div>
			<div class='modal-body'>
			<!-- 	<input type='hidden' class='form-control' name='ProjectID' id='ProjectID' value='' />
				<label id="ProjectName">Project Name: </label><input required type='text' class='form-control' name='ProjectName' value='' />
				<label>Location : </label><input required type='text' class='form-control' name='Location' id='Location' value='' />
				<label>Office : </label><input required type='text' class='form-control' name='Sector' id='Sector' value='' />
				<label>Email : </label><input required type='email' class='form-control' name='Funding_Source' id='Funding_Source' value='' /> -->

<!-- 				wew
				<label>Project Name:</label> <label id="ProjectName"></label>
				<br>
				<label>Location:</label> <label id="Location"></label>
				<br>
				<label>Sector:</label> <label id="Sector"></label>
				<br>
				<label>FS:</label> <label id="Funding_Source"></label> -->
				
				<table align="center">
					<tr>
						<td>
							<h5>Project Name: <label id="ProjectName"></label></h5>
						</td>
					</tr>
					<tr>
						<td>
							<h5>Location: <label id="Location"></label></h5>
						</td>
					</tr>
					<tr>
						<td>
							<h5>Sector: <label id="Sector"></label></h5>
						</td>
					</tr>
					<tr>
						<td>
							<h5>FS: <label id="Funding_Source"></label></h5>
						</td>
					</tr>
					<tr>
						<td>
							<h5>Mode of Implementation: <label id="ModeOfImplementation"></label></h5>
						</td>
					</tr>
					<tr>
						<td>
							<h5>Project Schedule Start: <label id="ProjectScheduleStart"></label></h5>
						</td>
					</tr>
					<tr>
						<td>
							<h5>Project Schedule End: <label id="ProjectScheduleEnd"></label></h5>
						</td>
					</tr>



				</table>

			</div>
			<div class='modal-footer'>
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#anothermodal">Show More Details</button>
			</div>
		</form>
	</div>
</div>



<!-- Modal -->

<div class='modal fade' id='anothermodal' role='dialog' data-backdrop="static">
	<div class='modal-dialog modal-lg' style="max-width: 98%;">
		<!-- Modal content-->
		<form class='modal-content' id='addForm' action="" method="post">
			<div class='modal-header'>
				<h4 class='modal-title'>TOTAL PROJECT TARGETS</h4>
				<button type="button" class="close" data-dismiss="modal" style="color: #007bff">&times;</button>
			</div>
			<div class='modal-body'>
				<!-- <h5 align="center">TOTAL PROJECT TARGETS</h5> -->
				<!-- TABLE 2-->
				<table class="table table-lg" border="1"><input type="hidden" id="ProjectID" name="ProjectID">
					<tr  style="text-align: center">
						<td></td>
						<td>JAN</td>
						<td>FEB</td>
						<td>MAR</td>
						<td>APR</td>
						<td>MAY</td>
						<td>JUN</td>
						<td>JUL</td>
						<td>AUG</td>
						<td>SEP</td>
						<td>OCT</td>
						<td>NOV</td>
						<td>DEC</td>
						<td>TOTAL</td></tr>
						<tr align="center" >
							<td>
								<a data-toggle="tooltip" title="Amount programmed for activities scheduled for implementation for the month.">
									<label>FS</label>
								</a>
							</td>
							<td>
								<label id="FS_Jan"></label>
							</td>
							<td>
								<label id="FS_Feb"></label>
							</td>
							<td>
								<label id="FS_Mar"></label>
							</td>
							<td>
								<label id="FS_Apr"></label>
							</td>
							<td>
								<label id="FS_May"></label>
							</td>
							<td>
								<label id="FS_Jun"></label>
							</td>
							<td>
								<label id="FS_Jul"></label>
							</td>
							<td>
								<label id="FS_Aug"></label>
							</td>
							<td>
								<label id="FS_Sep"></label>
							</td>
							<td>
								<label id="FS_Oct"></label>
							</td>
							<td>
								<label id="FS_Nov"></label>
							</td>
							<td>
								<label id="FS_Dec"></label>
							</td>
							<td>
								<label id="FS_Total"></label>
							</td>
						</tr>
						<tr align="center">
							<td align="center">
								<a data-toggle="tooltip" title="Equivalent target in percent (as a percentage of total project) that is scheduled for implementation for the month.">
									<label>%</label>
								</a>
							</td>
							<td>
								<label id="Percentage_Jan"></label>
							</td>
							<td>
								<label id="Percentage_Feb"></label>
							</td>
							<td>
								<label id="Percentage_Mar"></label>
							</td>
							<td>
								<label id="Percentage_Apr"></label>
							</td>
							<td>
								<label id="Percentage_May"></label>
							</td>
							<td>
								<label id="Percentage_Jun"></label>
							</td>
							<td>
								<label id="Percentage_Jul"></label>
							</td>
							<td>
								<label id="Percentage_Aug"></label>
							</td>
							<td>
								<label id="Percentage_Sep"></label>
							</td>
							<td>
								<label id="Percentage_Oct"></label>
							</td>
							<td>
								<label id="Percentage_Nov"></label>
							</td>
							<td>
								<label id="Percentage_Dec"></label>
							</td>
							<td>
								<label id="Percentage_Total"></label>
							</td>
						</tr>
						<tr align="center">
							<td>
								<a data-toggle="tooltip" title="Indicate selected major project activities/milestone (at most 5) where accomplishment is to be measured with corresponding targets for the month.">
									<label>OI</label>
								</a>
							</td>
							<td>
								<label id="OI_Jan"></label>
							</td>
							<td>
								<label id="OI_Feb"></label>

							</td>
							<td>
								<label id="OI_Mar"></label>
							</td>
							<td>
								<label id="OI_Apr"></label>
							</td>
							<td>
								<label id="OI_May"></label>
							</td>
							<td>
								<label id="OI_Jun"></label>
							</td>
							<td>
								<label id="OI_Jul"></label>
							</td>
							<td>
								<label id="OI_Aug"></label>
							</td>
							<td>
								<label id="OI_Sep"></label>
							</td>
							<td>
								<label id="OI_Oct"></label>
							</td>
							<td>
								<label id="OI_Nov"></label>
							</td>
							<td>
								<label id="OI_Dec"></label>
							</td>
							<td>
								<label id="OI_Total"></label>
							</td>
						</tr>
						<tr align="center">
							<td>
								<a data-toggle="tooltip" title="Target employment to be generated by the project expressed in number of persons disaggregated by sex">
									<label>EG M<label>
									</a>
								</td>
								<td>
									
									<label id="EG_F_Jan"></label>
								</td>
								<td>
									<label id="EG_M_Feb"></label>
								</td>
								<td>
									<label id="EG_M_Mar"></label>
								</td>
								<td>
									<label id="EG_M_Apr"></label>
								</td>
								<td>
									<label id="EG_M_May"></label>
								</td>
								<td>
									<label id="EG_M_Jun"></label>
								</td>
								<td>
									<label id="EG_M_Jul"></label>
								</td>
								<td>
									<label id="EG_M_Aug"></label>
								</td>
								<td>
									<label id="EG_M_Sep"></label>
								</td>
								<td>
									<label id="EG_M_Oct"></label>
								</td>
								<td>
									<label id="EG_M_Nov"></label>
								</td>
								<td>
									<label id="EG_M_Dec"></label>
								</td>
								<td>
									<label id="EG_M_Total"></label>
								</td>
							</tr>
							<tr align="center">
								<td>
									<a data-toggle="tooltip" title="Target employment to be generated by the project expressed in number of persons disaggregated by sex">
										<label>EG F<label>
										</a>
									</td>
									<td>
										<label id="EG_F_Jan"></label>
									</td>
									<td>
										<label id="EG_F_Feb"></label>
									</td>
									<td>
										<label id="EG_F_Mar"></label>
									</td>
									<td>
										<label id="EG_F_Apr"></label>
									</td>
									<td>
										<label id="EG_F_May"></label>
									</td>
									<td>
										<label id="EG_F_Jun"></label>
									</td>
									<td>
										<label id="EG_F_Jul"></label>
									</td>
									<td>
										<label id="EG_F_Aug"></label>
									</td>
									<td>
										<label id="EG_F_Sep"></label>
									</td>
									<td>
										<label id="EG_F_Oct"></label>
									</td>
									<td>
										<label id="EG_F_Nov"></label>
									</td>
									<td>
										<label id="EG_F_Dec"></label>
									</td>
									<td>
										<label id="EG_F_Total"></label>
									</td>
								</tr>
							</table>
						</form>
					</div>
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
      	"url": "<?= base_url('Rpmes_controller/datatable_form1') ?>",
      	"type": "POST"
      },
      columns: [{
      	render: function(data, type, value) {
      		return value["ProjectName"];
      	}
      },{
      	render: function(data, type, value) {
      		return value["Location"];
      	}
      },{
      	render: function(data, type, value) {
      		return value["Sector"];
      	}
      },{
      	render: function(data, type, value) {
      		return value["Funding_Source"];
      	}
      }, {
      	render: function(data, type, value) {

      		var buttons = "<button type='button' class='btn btn-outline-warning fa fa-edit' id='viewBtn' data-id='" + value["ProjectID"] + "'>&nbsp;view</button><button type='button' onclick=\"location.href='form1_fuck?id="+ value["ProjectID"] +"'\" class='btn btn-outline-warning fa fa-edit' id='printBtn'>&nbsp;Print</button>";
      		return buttons;
      	},
      	"orderable": false
      }]
    });

					$("#usersTable").on("click", "#viewBtn", function() {
						$("#Form1Modal").modal("show");
						var data = usersTable.row($(this).parents('tr')).data();
						var id = $(this).data('id');

						$("#Form1Modal #ProjectID").val(id);
						$("#Form1Modal #ProjectName").html(data["ProjectName"]);
						$("#Form1Modal #Location").html(data["Location"]);
						$("#Form1Modal #Sector").html(data["Sector"]);
						$("#Form1Modal #Funding_Source").html(data["Funding_Source"]);
						$("#Form1Modal #ModeOfImplementation").html(data["ModeOfImplementation"]);
						$("#Form1Modal #ProjectScheduleStart").html(data["ProjectScheduleStart"]);
						$("#Form1Modal #ProjectScheduleEnd").html(data["ProjectScheduleEnd"]);



						$("#anothermodal #FS_Jan").html(data["FS_Jan"]);
						$("#anothermodal #FS_Feb").html(data["FS_Feb"]);
						$("#anothermodal #FS_Mar").html(data["FS_Mar"]);
						$("#anothermodal #FS_Apr").html(data["FS_Apr"]);
						$("#anothermodal #FS_May").html(data["FS_May"]);
						$("#anothermodal #FS_Jun").html(data["FS_Jun"]);
						$("#anothermodal #FS_Jul").html(data["FS_Jul"]);
						$("#anothermodal #FS_Aug").html(data["FS_Aug"]);
						$("#anothermodal #FS_Sep").html(data["FS_Sep"]);
						$("#anothermodal #FS_Oct").html(data["FS_Oct"]);
						$("#anothermodal #FS_Nov").html(data["FS_Nov"]);
						$("#anothermodal #FS_Dec").html(data["FS_Dec"]);
						$("#anothermodal #FS_Total").html(data["FS_Total"]);
						$("#anothermodal #Percentage_Jan").html(data["Percentage_Jan"]);
						$("#anothermodal #Percentage_Feb").html(data["Percentage_Feb"]);
						$("#anothermodal #Percentage_Mar").html(data["Percentage_Mar"]);
						$("#anothermodal #Percentage_Apr").html(data["Percentage_Apr"]);
						$("#anothermodal #Percentage_May").html(data["Percentage_May"]);
						$("#anothermodal #Percentage_Jun").html(data["Percentage_Jun"]);
						$("#anothermodal #Percentage_Jul").html(data["Percentage_Jul"]);
						$("#anothermodal #Percentage_Aug").html(data["Percentage_Aug"]);
						$("#anothermodal #Percentage_Sep").html(data["Percentage_Sep"]);
						$("#anothermodal #Percentage_Oct").html(data["Percentage_Oct"]);
						$("#anothermodal #Percentage_Nov").html(data["Percentage_Nov"]);
						$("#anothermodal #Percentage_Dec").html(data["Percentage_Dec"]);
						$("#anothermodal #Percentage_Total").html(data["Percentage_Total"]);
						$("#anothermodal #OI_Jan").html(data["OI_Jan"]);
						$("#anothermodal #OI_Feb").html(data["OI_Feb"]);
						$("#anothermodal #OI_Mar").html(data["OI_Mar"]);
						$("#anothermodal #OI_Apr").html(data["OI_Apr"]);
						$("#anothermodal #OI_May").html(data["OI_May"]);
						$("#anothermodal #OI_Jun").html(data["OI_Jun"]);
						$("#anothermodal #OI_Jul").html(data["OI_Jul"]);
						$("#anothermodal #OI_Aug").html(data["OI_Aug"]);
						$("#anothermodal #OI_Sep").html(data["OI_Sep"]);
						$("#anothermodal #OI_Oct").html(data["OI_Oct"]);
						$("#anothermodal #OI_Nov").html(data["OI_Nov"]);
						$("#anothermodal #OI_Dec").html(data["OI_Dec"]);
						$("#anothermodal #OI_Total").html(data["OI_Total"]);
						$("#anothermodal #EG_M_Jan").html(data["EG_M_Jan"]);
						$("#anothermodal #EG_M_Feb").html(data["EG_M_Feb"]);
						$("#anothermodal #EG_M_Mar").html(data["EG_M_Mar"]);
						$("#anothermodal #EG_M_Apr").html(data["EG_M_Apr"]);
						$("#anothermodal #EG_M_May").html(data["EG_M_May"]);
						$("#anothermodal #EG_M_Jun").html(data["EG_M_Jun"]);
						$("#anothermodal #EG_M_Jul").html(data["EG_M_Jul"]);
						$("#anothermodal #EG_M_Aug").html(data["EG_M_Aug"]);
						$("#anothermodal #EG_M_Sep").html(data["EG_M_Sep"]);
						$("#anothermodal #EG_M_Oct").html(data["EG_M_Oct"]);
						$("#anothermodal #EG_M_Nov").html(data["EG_M_Nov"]);
						$("#anothermodal #EG_M_Dec").html(data["EG_M_Dec"]);
						$("#anothermodal #EG_M_Total").html(data["EG_M_Total"]);
						$("#anothermodal #EG_F_Jan").html(data["EG_F_Jan"]);
						$("#anothermodal #EG_F_Feb").html(data["EG_F_Feb"]);
						$("#anothermodal #EG_F_Mar").html(data["EG_F_Mar"]);
						$("#anothermodal #EG_F_Apr").html(data["EG_F_Apr"]);
						$("#anothermodal #EG_F_May").html(data["EG_F_May"]);
						$("#anothermodal #EG_F_Jun").html(data["EG_F_Jun"]);
						$("#anothermodal #EG_F_Jul").html(data["EG_F_Jul"]);
						$("#anothermodal #EG_F_Aug").html(data["EG_F_Aug"]);
						$("#anothermodal #EG_F_Sep").html(data["EG_F_Sep"]);
						$("#anothermodal #EG_F_Oct").html(data["EG_F_Oct"]);
						$("#anothermodal #EG_F_Nov").html(data["EG_F_Nov"]);
						$("#anothermodal #EG_F_Dec").html(data["EG_F_Dec"]);
						$("#anothermodal #EG_F_Total").html(data["EG_F_Total"]);


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