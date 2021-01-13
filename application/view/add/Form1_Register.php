<?php
$this->load->view('header/admin_header');
?>

<div class="row" style="margin-top: 20px; margin-left: 20px;margin-right: 20px">
	<div class="col-12">
		<div class="card m-b-30 pane pane--table1">
			<div class="card-body pane-hScroll">
			</br></br></br></br></br></br>
			<h2 align="center">Physical and Financial Target for Ongoing Programs and Projects</h2>
			<table class="table " id="example" border="1">
				<form action="" method="post">
					<thead>
						<tr style="text-align: center;background-color:blue;color:white;">
							<th>(1)</th>
							<th>(2)</th>
							<th>(3)</th>
							<th>(4)</th>
							<th>(5)</th>
							<th>(6)</th>
							<th>(7)</th>
							<th>(8)</th>
							<th>(9)</th>
							<th>(10)</th>
							<th>(11)</th>
							<th>(12)</th>
							<th>(13)</th>
							<th>(14)</th>
							<th>(15)</th>
						</tr>
						<tr>
							<td>
								(a) Name of Project<br>
								(b) Location<br>
								(c) Section/Subsector<br>
								(d) Funding Source<br>
								(e) Mode of Implementation<br>
								(f) Project Schedule
							</td>
							<td style="text-align: center">
								Total <br> Project<br> Target
							</td>
							<td style="text-align: center;">
								JAN
							</td>
							<td style="text-align: center;">FEB</td>
							<td style="text-align: center;">MAR</td>
							<td style="text-align: center;">APR</td>
							<td style="text-align: center;">MAY</td>
							<td style="text-align: center;">JUN</td>
							<td style="text-align: center;">JUL</td>
							<td style="text-align: center;">AUG</td>
							<td style="text-align: center;">SEP</td>
							<td style="text-align: center;">OCT</td>
							<td style="text-align: center;">NOV</td>
							<td style="text-align: center;">DEC</td>
							<td>TOTAL</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td rowspan="6">
								<p>
									<input type="text" name="ProjectName" class="form-control" placeholder="Project Name" data-toggle="tooltip" title="Project Name">
									<br>
									<input type="text" name="Location" class="form-control" placeholder="Location" data-toggle="tooltip" title="Location">
									<br>

									<select type="text" name="Sector" class="form-control" placeholder="Implementation Mode" data-toggle="tooltip" title="Implementation Mode">
										<option value="">Select Sector . . .</option>
										<?php

										if (!empty($getSector)) {

											foreach ($getSector as $value) { ?>

												<option value="<?= $value->SectorName ?>"><?= $value->SectorName ?></option>
												<?php
											}
										} ?>
									</select>
									<br>
									<select type="text" name="FundingSource" class="form-control" data-toggle="tooltip" title="Implementation Mode">
										<option value="">Select Funding Source . . .</option>
										<?php

										if (!empty($getFundingSource)) {

											foreach ($getFundingSource as $value) { ?>

												<option value="<?= $value->FundingSourceName ?>"><?= $value->FundingSourceName ?></option>
												<?php
											}
										} ?>
									</select>
									<br>
									<select type="text" name="ModeOfImplementation" class="form-control" data-toggle="tooltip" title="Implementation Mode">
										<option value="">Select Mode of Implementation . . .</option>
										<?php

										if (!empty($getModeOfImplementation)) {

											foreach ($getModeOfImplementation as $value) { ?>

												<option value="<?= $value->ImplementationName ?>"><?= $value->ImplementationName ?></option>
												<?php
											}
										} ?>
									</select>



									<br>
									<!-- <label style="font-size:7;">From</label> -->
									<!-- <div class="input-group"  data-toggle="tooltip" title="Date Schedule"> -->
										<input type="date" class="form-control" name="ProjectScheduleStart">
										<!-- 	 <span class="input-group-addon">to</span> -->
										<!-- </div> -->
										<br>
										<!-- <label  style="font-size:7;">To</label> -->
										<!-- <div class="input-group"  data-toggle="tooltip" title="Date Schedule"> -->
											<input type="date" class="form-control" name="ProjectScheduleEnd">
											<!-- 	 <span class="input-group-addon">to</span> -->
											<!-- </div> -->
										</p>
									</td>
								</tr>
								<tr align="center" style="border:15px;">
									<td>
										<a data-toggle="tooltip" title="Amount programmed for activities scheduled for implementation for the month.">
											<label>FS</label>
										</a>
									</td>
									<td>
										<input type="text" name="FS_Jan" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_Feb" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_Mar" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_Apr" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_May" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_Jun" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_Jul" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_Aug" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_Sep" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_Oct" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_Nov" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" name="FS_Dec" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control fs_txtBox">
									</td>
									<td>
										<input type="text" id="FS_Total" name="FS_Total" value="0" readonly style=" pointer-events: none;background-color:#fff;" class="form-control">
									</td>
								</tr>
								<tr align="center">
									<td align="center">
										<a data-toggle="tooltip" title="Equivalent target in percent (as a percentage of total project) that is scheduled for implementation for the month.">
											<label>%</label>
										</a>
									</td>
									<td>
										<input type="text" name="Percentage_Jan" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_Feb" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_Mar" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_Apr" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_May" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_Jun" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_Jul" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_Aug" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_Sep" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_Oct" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_Nov" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" name="Percentage_Dec" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" class="form-control percentage_txtBox">
									</td>
									<td>
										<input type="text" id="Percentage_Total" name="Percentage_Total" value="0" readonly style=" pointer-events: none;background-color:#fff" class="form-control">
									</td>
								</tr>
								<tr align="center">
									<td>
										<a data-toggle="tooltip" title="Indicate selected major project activities/milestone (at most 5) where accomplishment is to be measured with corresponding targets for the month.">
											<label>OI</label>
										</a>
									</td>
									<td>
										<input type="text" name="OI_Jan" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_Feb" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_Mar" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_Apr" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_May" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_Jun" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_Jul" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_Aug" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_Sep" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_Oct" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_Nov" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" name="OI_Dec" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
									</td>
									<td>
										<input type="text" id="OI_Total" name="OI_Total" value="0" readonly style=" pointer-events: none; background-color:#fff" class="form-control">
									</td>
								</tr>
								<tr align="center">
									<td>
										<a data-toggle="tooltip" title="Target employment to be generated by the project expressed in number of persons disaggregated by sex">
											<label>EG M<label>
											</a>
										</td>
										<td>
											<input type="text" name="EG_M_Jan" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_Feb" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_Mar" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_Apr" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_May" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_Jun" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_Jul" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_Aug" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_Sep" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_Oct" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_Nov" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" name="EG_M_Dec" autocomplete="off" class="form-control EG_M_txtBox">
										</td>
										<td>
											<input type="text" id="EG_M_Total" name="EG_M_Total" value="0" readonly style=" pointer-events: none;background-color:#fff" class="form-control">
										</td>
									</tr>
									<tr align="center">
										<td>
											<a data-toggle="tooltip" title="Target employment to be generated by the project expressed in number of persons disaggregated by sex">
												<label>EG F<label>
												</a>
											</td>
											<td>
												<input type="text" name="EG_F_Jan" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_Feb" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_Mar" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_Apr" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_May" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_Jun" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_Jul" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_Aug" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_Sep" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_Oct" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_Nov" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" name="EG_F_Dec" autocomplete="off" class="form-control EG_F_txtBox">
											</td>
											<td>
												<input type="text" id="EG_F_Total" name="EG_F_Total" value="0" readonly style=" pointer-events: none;background-color:#fff" class="form-control">
											</td>

										</tr>
										<tr>

										</tr>
										<tr>
											<td colspan="2">



												Submitted by: <?php $username = $this->session->UName;
												echo $username;
												?><b></b>
												<br>
												<br>
												Designation/Office: <?php echo $this->session->AgencyName; ?>
												<br> <b style="margin-left: 20px"> </b>
											</td>
											<td colspan='10'></td>
											<td colspan='3'>Noted by: <b> </b></td>
										</tr>
										<tr>
											<td colspan="15">
												<button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
											</td>
										</tr>
									</form>
								</tbody>
							</table>
							<script type="text/javascript">
								$(document).ready(function() {
									var FS_Total = 0;
									$('.fs_txtBox').keyup(function() {
										$('.fs_txtBox').each(function() {
											var txtBoxVal = $(this).val();
											FS_Total = FS_Total + Number(txtBoxVal);
										});
										$('#FS_Total').val(FS_Total);
										FS_Total = 0;
									});
								});

								$(document).ready(function() {
									var Percentage_Total = 0;
									$('.percentage_txtBox').keyup(function() {
										$('.percentage_txtBox').each(function() {
											var txtBoxVal = $(this).val();
											Percentage_Total = Percentage_Total + Number(txtBoxVal);
										});
										$('#Percentage_Total').val(Percentage_Total);
										Percentage_Total = 0;
									});
								});

								$(document).ready(function() {
									var OI_Total = 0;
									$('.OI_txtBox').keyup(function() {
										$('.OI_txtBox').each(function() {
											var txtBoxVal = $(this).val();
											OI_Total = OI_Total + Number(txtBoxVal);
										});
										$('#OI_Total').val(OI_Total);
										OI_Total = 0;
									});
								});

								$(document).ready(function() {
									var EG_M_Total = 0;
									$('.EG_M_txtBox').keyup(function() {
										$('.EG_M_txtBox').each(function() {
											var txtBoxVal = $(this).val();
											EG_M_Total = EG_M_Total + Number(txtBoxVal);
										});
										$('#EG_M_Total').val(EG_M_Total);
										EG_M_Total = 0;
									});
								});

								$(document).ready(function() {
									var EG_F_Total = 0;
									$('.EG_F_txtBox').keyup(function() {
										$('.EG_F_txtBox').each(function() {
											var txtBoxVal = $(this).val();
											EG_F_Total = EG_F_Total + Number(txtBoxVal);
										});
										$('#EG_F_Total').val(EG_F_Total);
										EG_F_Total = 0;
									});
								});
							</script>

							<script type="text/javascript">
								$('.pane-hScroll').scroll(function() {
									$('.pane-vScroll').width($('.pane-hScroll').width() + $('.pane-hScroll').scrollLeft());
								});
							</script>
						</div>
					</div>
				</div>
			</div>