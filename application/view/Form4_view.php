<?php
$this->load->view('header/admin_header');
?>

<div style="color:red;"></div>
<div class="container-fluid w-100">
	<div class="row">
		<div class="col-md-12">
			<table class='table table-bordered table-responsive border'>
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
							<tr class='tr_blue'>
								<td align='center' style="background:#007bff;color:white"><b>Name of Project</b></td>
								<td align='center' style="background:#007bff;color:white">Project Objecttive/s<br>(Based on LogFrame)</td>
								<td align='center' style="background:#007bff;color:white">Results Indicator/Target<br>(Based on LogFrame)</td>
								<td align='center' style="background:#007bff;color:white">Results Indicator/Target<br>(Based on LogFrame)</td>
							</tr>

							<?php
							if (!empty($getForm4)) {
								foreach ($getProject as $joinvalues) {
									foreach ($getForm4 as $value) { ?>

										<tr class='tr_border'>
											<input type="hidden" id="ProjectID" name="ProjectID">
											<td><label style="width:350px;text-align: center;" id="ProjectName"><?=  $joinvalues->ProjectName ?></label></td>
											<td><textarea class="form-control" name="Proj_Objs" style="height:225px;width:350px;resize: none;background-color: #fff;" readonly><?=  $value->Proj_Obj ?></textarea></td>
											<td><textarea class="form-control" name="Proj_Obj" style="height:225px;width:350px;resize: none;background-color: #fff;" readonly><?=  $value->res_Indi ?></textarea></td>
											<td><textarea class="form-control" name="res_Indi" style="height:225px;width:350px;resize: none;background-color: #fff;" readonly><?=  $value->Observed_res ?></textarea></td>
										</tr>

									<?php }
								}
							}
							?>

							<tr>
								<td colspan='4'>
									<div class='space'></div>
								</td>
							</tr>
							<tr>
								<td colspan='4'>
									<b>Prepared by:</b>
								</td>
							</tr>
							<tr>
								<td colspan='4'>
									<b>Designation/Office</b>
								</td>
							</tr>
							<tr>
								<td colspan='4'>
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
					$("#getProjectModal").modal("hide");
				}
			})
						return true;

					});
				});
			</script>
		</body>

		</html>