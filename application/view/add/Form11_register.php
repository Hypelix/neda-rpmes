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
							<tr class='tr_blue' style="font-weight: bold;">
								<td align='center' style="background:#007bff;color:white">Program/Project Title</td>
								<td align='center' style="background:#007bff;color:white">Project Location</td>
								<td align='center' style="background:#007bff;color:white">Proponent/ Implementing Agency</td>
								<td align='center' style="background:#007bff;color:white">Nature</td>
								<td align='center' style="background:#007bff;color:white">Details</td>
								<td align='center' style="background:#007bff;color:white">Strategies / Action Taken to Resolve the Problem / Issue</td>
								<td align='center' style="background:#007bff;color:white">Responsible Entities / Key Actors and Their Specific Assistance</td>
								<td align='center' style="background:#007bff;color:white">Lessons Learned and Good  Practices that could be Shaerd <br> to the NPMC / Others PMCs**</td>
							</tr>
							<tr class='tr_border'>
								<td><textarea class="form-control" style="width: 168px;resize: none;" name="ProgramTitle" ></textarea></td>
								<td><textarea class="form-control" style="width: 168px;resize: none;" name="Location" required></textarea></td>
								<td><textarea class="form-control" style="width: 168px;resize: none;" name="Agency" required></textarea></td>
								<td><textarea class="form-control" style="width: 168px;resize: none;" name="Nature" required></textarea></td>
								<td><textarea class="form-control" style="width: 168px;resize: none;" name="Details" required></textarea></td>
								<td><textarea class="form-control" style="width: 168px;resize: none;" name="Strategies" required></textarea></td>
								<td><textarea class="form-control" style="width: 168px;resize: none;" name="Responsible" required></textarea></td>
								<td><textarea class="form-control" style="width: 168px;resize: none;" name="Lessons" required></textarea></td>

							</tr>
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

		</body>
		</html>