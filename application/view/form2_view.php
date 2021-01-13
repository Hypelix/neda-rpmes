<?php 
$this->load->view('header/admin_header');
?>
<div class="row" style="margin-top: 20px; margin-left: 20px;margin-right: 20px">
	<div class="col-12">
		<div class="card m-b-30 pane pane--table1">
			<div class="card-body pane-hScroll">

				<table class="table " id="example" >
					<thead>
						<tr style="text-align: center;color:#fff;background-color:#007bff;">
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
							<th colspan="2">(15)</th>
							<th>(16)</th>
						</tr>
						<tr style="color:#fff;background-color:#007bff;">
							<td rowspan="3">
								(a) Name of Project<br>
								(b) Date Started<br>
								(c) Target Completion <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date<br>
								(d) Location<br>
								(e) Funding Source<br>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5" style="text-align: center;">Physical Status(%)</td>
							<td style="text-align: center;" colspan="2">Employement 
								<br>	Generated</td>
								<td rowspan="3" style="text-align: center">Remarks</td>

							</tr>
							<tr style="color:#fff;background-color:#007bff;">
								<td colspan="2" style="text-align: center;">Allocation</td>
								<td colspan="2" style="text-align: center;">Releases</td>
								<td colspan="2" style="text-align: center;">Obligations</td>
								<td colspan="2" style="text-align: center;">Disburments</td>
								<td style="text-align: center;" rowspan="2">Output <br> Indicator</td>
								<td style="text-align: center;" rowspan="2">Target to <br> Date</td>
								<td style="text-align: center;" rowspan="2">Target for the <br> Month</td>
								<td style="text-align: center;" rowspan="2">Actual <br> to Date </td>
								<td style="text-align: center;" rowspan="2">Actual <br> for the <br> Month</td>
								<td style="text-align: center;" rowspan="2">F</td>
								<td style="text-align: center;" rowspan="2">M</td>

							</tr>
							<tr style="color:#fff;background-color:#007bff;">
								<td style="text-align: center">
									Art of Reporting <br> Period
								</td>
								<td style="text-align: center;">
									For the <br> month
								</td>
								<td style="text-align: center;">As of Reporting <br> Period</td>
								<td style="text-align: center;">For The Month</td>
								<td style="text-align: center;">As of Reporting <br> Period</td>
								<td style="text-align: center;">For The Month</td>
								<td style="text-align: center;">As of Reporting <br> Period</td>
								<td style="text-align: center;">For The Month</td>
							</tr>
						</thead>	
						<?php
						if (!empty($getForm2)) {
							foreach ($getProject as $joinvalues){
								foreach ($getForm2 as $value) 
									?>
								<tbody>


									<tr>
										<td rowspan="6">
											<label>(a) <?= $joinvalues->ProjectName ?></label>
											<br>
											<label>(b) <?= $joinvalues->ProjectScheduleStart ?></label>
											<br>
											<label>(b) <?= $joinvalues->ProjectScheduleEnd ?></label>
											<br>
											<label>(b) <?= $joinvalues->Location ?></label>

											<!-- 	 <span class="input-group-addon">to</span> -->
											<!-- </div> -->

										</td>
										<td><?= $value->AllocationPeriod ?></td>
										<td><?= $value->AllocationMonth ?></td>
										<td><?= $value->ReleasesPeriod ?></td>
										<td><?= $value->ReleasesMonth ?></td>
										<td><?= $value->ObligationPeriod ?></td>
										<td><?= $value->ObligationMonth ?></td>
										<td><?= $value->Dis_Period ?></td>
										<td><?= $value->Dis_Month ?></td>
										<td><?= $value->Oi ?></td>
										<td><?= $value->Target_to_Date ?></td>
										<td><?= $value->Target_for_Month ?></td>
										<td><?= $value->Actual_to_Date ?></td>
										<td><?= $value->Actual_for_Month ?></td>
										<td><?= $value->EG_M ?></td>
										<td><?= $value->EG_F ?></td>
										<td><?= $value->Remarks ?></td>

									</tr>

									<?php 
								}
							}

							?>
							<tr>
								<td rowspan="6">
									<p>

										<br>

										<br>

										<br>

										<br>
									</p>
								</td>
							</tr>
							<tr>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
							</tr>
							<tr>

							</tr>
							<tr>

							</tr>
							<tr>

							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3">
									Submitted by: <b>  </b> 
									<br>
									<br>
									Designation/Office:
									<br> <b style="margin-left: 20px"> </b>
								</td>
								<td colspan='10'></td>
								<td colspan='4'>Noted by: <b> </b></td>
							</tr>			
							<tr>
								<td colspan="15">
									<button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
								</td>
							</tr>




						</tbody>

					</table>	

					<script type="text/javascript">

						$(document).ready(function(){
							var total = 0;
							$('.txtBox').keyup(function(){
								$('.txtBox').each(function() {
									var txtBoxVal = $(this).val();
									total = total + Number(txtBoxVal);
								});
								$('#total').val(total);
								total = 0;
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
