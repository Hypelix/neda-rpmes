<?php
$this->load->view('header/admin_header');
?>
<!-- Modal -->
<div class="modal fade" id="getProjectModal" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h3>Select Projects</h3>
			</div>
			<div class="modal-body">


				<table class="table">
					<tr style="font-weight:bold">
						<td>Project Name</td>
						<td>Action</td>
					</tr>

					<?php
					if (!empty($getProjectlist)) {
						foreach ($getProjectlist as $value) { ?>
							<tr>
								<td><?= $value->ProjectName; ?></td>
								<td><button class="btn btn-success" data-id="<?= $value->ProjectID ?>">Use</button></td>
							</tr>
						<?php
					}
				} ?>
				</table>
			</div>
			<div class="modal-footer">
			</div>
		</div>

	</div>
</div>

<div class="container-fluid w-100">
	<div class="row">
		<div class="col-xl-3 col-md-6">
			<table class='table table-bordered bordercolor=red'>
				<form action="" method="post">
					<tr class='tbl_form3_banner' align='center'>
						<td colspan='11' style="font-weight:bold">
							<span class='f3'>RPMES FORM 3</span>
							<p>REGIONAL PROJECT MONITORING AND EVALUATION SYSTEM (RPMES)
								<p />
								<p>PROJECT EXCEPTION REPORT
									<p />
						</td>
					</tr>
					<tr>
						<td colspan='3'>
							<div class='white_space'></div>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<b>Name of Project:</b>
							<label id="ProjectName"></label>
						</td>
						<td>
							<b>Location:</b>
							<label id="Location"></label>
						</td>

					</tr>
					<tr>
						<td colspan='2'>
							<b>Sector/Subsector:</b>
							<label id="Sector"></label>
						</td>
						<td>
							<b>Implementing Agency:</b>
							<label id="Agency"></label>
						</td>
					</tr>
					<tr>
						<td colspan='3'><b>Implementation:</b>
							<label id="ModeOfImplementation"></label>
						</td>
					</tr>
					<tr>
						<td colspan='3'>
							<div class='white_space'></div>
						</td>
					</tr>
					<tr class='tr_blue'>
						<td align='center' style="background:#007bff;color:white"><b>Findings</b></td>
						<td align='center' style="background:#007bff;color:white">Possible Reasons/Causes</td>
						<td align='center' style="background:#007bff;color:white">Recommendations</td>
					</tr>
					<tr class='tr_border'>
						<input type="hidden" id="ProjectID" name="ProjectID">
						<td><textarea class="form-control" name="Findings" style="width:495px;" required></textarea></input></td>
						<td><textarea class="form-control" name="ReasonCause" style="width:491px;" required></textarea></td>
						<td><textarea class="form-control" name="Recommendation" style="width:491px;" required></textarea></td>
					</tr>
					<tr>
						<td colspan='3'>
							<div class='space'></div>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<b>Prepared by:</b>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<b>Designation/Office</b>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<b>Date:</b>
						</td>
					</tr>
					<table>
						<button type="submit" size="20%" class="btn btn-success">Save</button>
		</div>
	</div>
</div>
</form>
</div><!-- FORMSLIDER-->



<script type="text/javascript">
	$(document).ready(function() {
		$('#getProjectModal').modal({
			backdrop: 'static',
			keyboard: false
		})

		$("#getProjectModal").modal("show");
		$('.close_inn_save').click(function() {
			$('.inn_save').fadeOut();
		});
		$("#getProjectModal").on('click', 'button[data-id]', function(e) {
			var requested_to = $(this).data('id');

			$.ajax({
				url: '<?= base_url("Rpmes_controller/getProject"); ?>', //your action
				data: {
					"ProjectID": requested_to
				}, //your form name.it takes all the values of model               
				dataType: "JSON",
				method: "POST",
				success: function(result) {
					$("#ProjectID").val(result.ProjectID);
					$("#ProjectName").html(result.ProjectName);
					$("#Sector").html(result.Sector);
					$("#Agency").html(result.Agency);
					$("#ModeOfImplementation").html(result.ModeOfImplementation);
					$("#Location").html(result.Location);
					$("#getProjectModal").modal("hide");
				}
			})
			return true;

		});
	});
</script>
</body>

</html>