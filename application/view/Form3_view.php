<?php
$this->load->view('header/admin_header');
?>	

<div class="container-fluid w-100">
	<div class="row">
		<div class="col-xl-3 col-md-6">
			<table class='table table-bordered'>
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
							<tr class='tr_blue' style="font-weight:bold;">
								<td align='center' style="background:#007bff;color:white">Findings</td>
								<td align='center' style="background:#007bff;color:white">Possible Reasons/Causes</td>
								<td align='center' style="background:#007bff;color:white">Recommendations</td>
							</tr>

							<?php
							if (!empty($getForm3)) {
								foreach ($getForm3 as $value) { ?>

									<tr class='tr_border'>
										<input type="hidden" id="ProjectID" name="ProjectID">
										<td><textarea class="form-control" name="Findings" style="width:495px;height:225px;resize: none;background-color: #fff" required readonly><?= $value->Findings ?></textarea></input></td>
										<td><textarea class="form-control" name="ReasonCause" style="width:491px;height:225px;background-color: #fff" readonly><?= $value->ReasonCause ?></textarea></td>
										<td><textarea class="form-control" name="Recommendation" style="width:491px;height:225px;background-color: #fff" readonly><?= $value->Recommendation ?></textarea></td>
									</tr>
									<tr>

										<?php 
									}
								}
								?>

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