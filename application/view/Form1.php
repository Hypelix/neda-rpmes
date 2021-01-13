<?php
defined('BASEPATH') or exit('No direct script access allowed');
$username = $this->session->UName;
echo $username;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Form 1</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin_form1.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin_banner.css') ?>" />
	<style type="text/css">
	</style>
</head>

<body>
	<div id="container">
		<!--
		<div class='inn_save'>
		<div class='box_save'>
		<form method='POST' action=''>
		<p>All forms will be saved!</p>
		<a class='close_inn_save'>&times</a>
		<p class='red'>It will mean the deletion of all enrolled projects for this year.</p>
		<button name='btn_save_f1' class='btn_save_f1'>Proceed anyway</button>
	</form>
</div>
</div>
-->
		<form method="get" action="Form1_Register/">
			<button type="submit">Add Record</button>
		</form>
		<div class="formslider">
			<!-- FORMSLIDER-->
			<div class='con_rowCount'></div>
			<table class='tbl_form1'>

				<?php
				if (!empty($getForm1)) {
					foreach ($getForm1 as $value) { ?>

						<tr>
							<td colspan='15' align='center'>
								<p class='label'>RPMES FORM 1</p>
								<p class='p_big'>REGIONAL PROJECT MONITORING AND EVALUATION SYSTEM (RPMES)</p>
								<p class='p_big'>INITIAL PROJECT</p>
								<p>Physical and Financial Targets for Ongoing Programs and Projects</p>
								<p class='p_big'>FY ""</p>
							</td>
						</tr>
						<tr>
							<td colspan='15'>
								<div class='space'></div>
								</t>
						</tr>
						<tr>
							<td colspan='15'>
								Implementing Agency: ""
							</td>
						</tr>
						<tr class='td_blue' align='center'>
							<td>(1)</td>
							<td>(2)</td>
							<td>(3)</td>
							<td>(4)</td>
							<td>(5)</td>
							<td>(6)</td>
							<td>(7)</td>
							<td>(8)</td>
							<td>(9)</td>
							<td>(10)</td>
							<td>(11)</td>
							<td>(12)</td>
							<td>(13)</td>
							<td>(14)</td>
							<td>(15)</td>
						</tr>
						<tr class='td_blue'>
							<td>
								(a)Name of Project<br />
								(b)Location<br />
								(c)Sector/Subsector<br />
								(d)Funding Source<br />
								(e)Mode of Implementation<br />
								(f)Project Schedule
							</td>
							<td align='center'>
								Total<br />Project<br />Target
							</td>
							<td align='center'>JAN</td>
							<td align='center'>FEB</td>
							<td align='center'>MAR</td>
							<td align='center'>APR</td>
							<td align='center'>MAY</td>
							<td align='center'>JUN</td>
							<td align='center'>JUL</td>
							<td align='center'>AUG</td>
							<td align='center'>SEP</td>
							<td align='center'>OCT</td>
							<td align='center'>NOV</td>
							<td align='center'>DEC</td>
							<td align='center'>TOTAL</td>
						</tr>
						<tr class='td_border'>
							<td rowspan='5'>
								(a)"<?= $value->ProgramName ?>"<br />
								(b)"<?= $value->Location ?>"<br />
								(c)"<?= $value->Sector ?>"<br />
								(d)"<?= $value->FundingSource ?>"<br />
								(e)"<?= $value->ModeOfImplementation ?>"<br />
								(f)From "<?= $value->ProjectScheduleStart ?>"<br />
								To "<?= $value->ProjectScheduleEnd ?>"
							</td>
						</tr>
						<tr class='td_border'>
							<td>FS</td>
							<td>"<?= $value->FS_Jan ?>"</td>
							<td>"<?= $value->FS_Feb ?>"</td>
							<td>"<?= $value->FS_Mar ?>"</td>
							<td>"<?= $value->FS_Apr ?>"</td>
							<td>"<?= $value->FS_May ?>"</td>
							<td>"<?= $value->FS_Jun ?>"</td>
							<td>"<?= $value->FS_Jul ?>"</td>
							<td>"<?= $value->FS_Aug ?>"</td>
							<td>"<?= $value->FS_Sep ?>"</td>
							<td>"<?= $value->FS_Oct ?>"</td>
							<td>"<?= $value->FS_Nov ?>"</td>
							<td>"<?= $value->FS_Dec ?>"</td>
						</tr>
						<tr class='td_border'>
							<td>%</td>
							<td>"<?= $value->Percentage_Jan ?>"%</td>
							<td>"<?= $value->Percentage_Feb ?>"%</td>
							<td>"<?= $value->Percentage_Mar ?>"%</td>
							<td>"<?= $value->Percentage_Apr ?>"%</td>
							<td>"<?= $value->Percentage_May ?>"%</td>
							<td>"<?= $value->Percentage_Jun ?>"%</td>
							<td>"<?= $value->Percentage_Jul ?>"%</td>
							<td>"<?= $value->Percentage_Aug ?>"%</td>
							<td>"<?= $value->Percentage_Sep ?>"%</td>
							<td>"<?= $value->Percentage_Oct ?>"%</td>
							<td>"<?= $value->Percentage_Nov ?>"%</td>
							<td>"<?= $value->Percentage_Dec ?>"%</td>
						</tr>
						<tr class='td_border'>
							<td>OI</td>
							<td>"<?= $value->OI_Jan ?>"</td>
							<td>"<?= $value->OI_Feb ?>"</td>
							<td>"<?= $value->OI_Mar ?>"</td>
							<td>"<?= $value->OI_Apr ?>"</td>
							<td>"<?= $value->OI_May ?>"</td>
							<td>"<?= $value->OI_Jun ?>"</td>
							<td>"<?= $value->OI_Jul ?>"</td>
							<td>"<?= $value->OI_Aug ?>"</td>
							<td>"<?= $value->OI_Sep ?>"</td>
							<td>"<?= $value->OI_Oct ?>"</td>
							<td>"<?= $value->OI_Nov ?>"</td>
							<td>"<?= $value->OI_Dec ?>"</td>
						</tr>
						<tr class='td_border'>
							<td>EG</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Jan ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_Jan ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Feb ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_Feb ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Mar ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_Mar ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Apr ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_Apr ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_May ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_May ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Jun ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_Jun ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Jul ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_Jul ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Aug ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_Aug ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Sep ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_Sep ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Oct ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_Oct ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Nov ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_F_Nov ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"<?= $value->EG_M_Dec ?>"
									</li>
									<li class='li_eg'>
										"<?= $value->EG_M_Dec ?>"
									</li>
								</ul>
							</td>
							<td>
								<ul class='ul_eg'>
									<li class='li_eg'>
										"" Male
									</li>
									<li class='li_eg'>
										"" Female
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td><b>Submitted by:</b> ""</td>
							<td colspan='8'></td>
							<td colspan='6' align='center'><b>Noted by:</b> ""<br /><b>Agency Head</b></td>
						</tr>
						<tr>
							<td colspan='2'><b>Designation/Office:</b> ""</td>
						</tr>
						<tr>
							<td colspan='2'><b>Date:</b> ""</td>
						</tr>


					<?php
				}
			} ?>
			</table>
		</div><!-- FORMSLIDER-->

		<script type="text/javascript">
			$(document).ready(function() {
				$('.close_inn_save').click(function() {
					$('.inn_save').fadeOut();
				});
			});
		</script>
</body>

</html>