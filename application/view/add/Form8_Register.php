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
								<td align='center' style="background:#007bff;color:white">Name of Project/<br>Issue Details</td>
								<td align='center' style="background:#007bff;color:white">Location</td>
								<td align='center' style="background:#007bff;color:white">Implementing <br> Agency</td>
								<td align='center' style="background:#007bff;color:white">Date of PSS/<br> Facilitation Meeting</td>
								<td align='center' style="background:#007bff;color:white">Concerned <br>Agencies</td>
								<td align='center' style="background:#007bff;color:white">Agreement Reached</td>
								<td align='center' style="background:#007bff;color:white">Next Steps</td>
							</tr>
							<tr class='tr_border'>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Np" ></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Location" ></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Agency" required></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Date_pss" required></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Concerned_Agency" required></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Agreements" required></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="ActionTaken" required></textarea></td>

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