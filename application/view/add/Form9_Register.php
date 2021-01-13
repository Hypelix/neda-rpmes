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
								<td align='center' style="background:#007bff;color:white">Date</td>
								<td align='center' style="background:#007bff;color:white">Title Of Training/<br>Workshop</td>
								<td align='center' style="background:#007bff;color:white">Objective of <br> Training/Workshop</td>
								<td align='center' style="background:#007bff;color:white">Lead Office/Unit</td>
								<td align='center' style="background:#007bff;color:white">participating <br>Offices / Agencies / <br>Organization</td>
								<td align='center' style="background:#007bff;color:white">Total No. Of <br> Male Participants</td>
								<td align='center' style="background:#007bff;color:white">Total No. Of <br> FeMale Participants</td>
							</tr>
							<tr class='tr_border'>
								<td><input type="text" name="Date_F9" class="form-control" id="datepicker" style="width: 195px;height:63px;background-color: #fff" autocomplete="off" readonly></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="TrainingTitle" ></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Objectives" required></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Lead_Office" required></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Participating_Offices" required></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Male" required></textarea></td>
								<td><textarea class="form-control" style="width: 195px;resize: none;" name="Female" required></textarea></td>

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
		<script>
			$( function() {
				$( "#datepicker" ).datepicker();
			} );
		</script>
		</html>