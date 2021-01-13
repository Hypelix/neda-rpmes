

<?php include "header/link.php" ?>
<style type="text/css" media="print">
	@page { 
		size: A4 landscape;
	}
	body {
		page-break-before: avoid;
		width:100%;
		height:100%;
		zoom: 70%;   
		-webkit-print-color-adjust: exact !important;
	}

	th {
		text-align: center;
		/*background-color:red;*/
		color:blue;

	}

	tr{
		background-color: green;
	}
</style>
<body onload="window.print()">
	<div class="row" style="margin-top: 20px; margin-left: 20px;margin-right: 20px">
		<div class="col-12">

			<div class="card m-b-30 pane pane--table1">
				<div class="card-body pane-hScroll">
					<h2 align="center">Physical and Financial Target for Ongoing Programs and Projects</h2>
					<br><br>
					<?php
					if (!empty($Form1JoinView)) {
						foreach ($Form1JoinView as $joinvalues) {
							foreach ($getForm1 as $value) {
								?>
								<table class="table" border="1">
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
									<tr align="center">
										<tr>
											<td rowspan="6">
												<p>
													<label>(a) <?= $joinvalues->ProjectName ?></label>
													<br>
													<label>(b) <?= $joinvalues->Location ?></label>
													<br>
													<label>(c) <?= $joinvalues->Sector ?></label>
													<br>
													<label>(d) <?= $joinvalues->FundingSource ?></label>
													<br>
													<label>(e) <?= $joinvalues->ModeOfImplementation ?></label>
													<br><br>
													<label>Date Start: <?= $joinvalues->ProjectScheduleStart ?></label>
													<br>
													<label>Date End: <?= $joinvalues->ProjectScheduleEnd ?></label>
												</p>
											</td>

										</tr>




										<td align="center">
											<a data-toggle="tooltip" title="Amount programmed for activities scheduled for implementation for the month.">
												<label>FS</label>
											</a>
										</td>

										<td align="center">
											<?= $value->FS_Jan ?>
										</td>
										<td align="center">
											<?= $value->FS_Feb ?>
										</td>
										<td align="center">
											<?= $value->FS_Mar ?>
										</td>
										<td align="center">
											<?= $value->FS_Apr ?>
										</td>
										<td align="center">
											<?= $value->FS_May ?>
										</td>
										<td align="center">
											<?= $value->FS_Jun ?>
										</td>
										<td align="center">
											<?= $value->FS_Jul ?>
										</td>
										<td align="center">
											<?= $value->FS_Aug ?>
										</td>
										<td align="center">
											<?= $value->FS_Sep ?>
										</td>
										<td align="center">
											<?= $value->FS_Oct ?>
										</td>
										<td align="center">
											<?= $value->FS_Nov ?>
										</td>
										<td align="center">
											<?= $value->FS_Dec ?>
										</td>
										<td align="center">
											<?= $value->FS_Total ?>
										</td>
									</tr>
									<tr align="center">
										<td align="center">
											<a data-toggle="tooltip" title="Equivalent target in percent (as a percentage of total project) that is scheduled for implementation for the month.">
												<label>%</label>
											</a>
										</td>
										<td>
											<?= $value->Percentage_Jan ?>
										</td>
										<td>
											<?= $value->Percentage_Feb ?>
										</td>
										<td>
											<?= $value->Percentage_Mar ?>
										</td>
										<td>
											<?= $value->Percentage_Apr ?>
										</td>
										<td>
											<?= $value->Percentage_May ?>
										</td>
										<td>
											<?= $value->Percentage_Jun ?>
										</td>
										<td>
											<?= $value->Percentage_Jul ?>
										</td>
										<td>
											<?= $value->Percentage_Aug ?>
										</td>
										<td>
											<?= $value->Percentage_Sep ?>
										</td>
										<td>
											<?= $value->Percentage_Oct ?>
										</td>
										<td>
											<?= $value->Percentage_Nov ?>
										</td>
										<td>
											<?= $value->Percentage_Dec ?>
										</td>
										<td>
											<?= $value->Percentage_Total ?>
										</td>
									</tr>
									<tr align="center">
										<td>
											<a data-toggle="tooltip" title="Indicate selected major project activities/milestone (at most 5) where accomplishment is to be measured with corresponding targets for the month.">
												<label>OI</label>
											</a>
										</td>
										<td>
											<?= $value->OI_Jan ?>
										</td>
										<td>
											<?= $value->OI_Feb ?>
										</td>
										<td>
											<?= $value->OI_Mar ?>
										</td>
										<td>
											<?= $value->OI_Apr ?>
										</td>
										<td>
											<?= $value->OI_May ?>
										</td>
										<td>
											<?= $value->OI_Jun ?>
										</td>
										<td>
											<?= $value->OI_Jul ?>
										</td>
										<td>
											<?= $value->OI_Aug ?>
										</td>
										<td>
											<?= $value->OI_Sep ?>
										</td>
										<td>
											<?= $value->OI_Oct ?>
										</td>
										<td>
											<?= $value->OI_Nov ?>
										</td>
										<td>
											<?= $value->OI_Dec ?>
										</td>
										<td>
											<?= $value->OI_Total ?>
										</td>
									</tr>
									<tr align="center">
										<td>
											<a data-toggle="tooltip" title="Target employment to be generated by the project expressed in number of persons disaggregated by sex">
												<label>EG M<label>
												</a>
											</td>
											<td>
												<?= $value->EG_M_Jan ?>
											</td>
											<td>
												<?= $value->EG_M_Feb ?>
											</td>
											<td>
												<?= $value->EG_M_Mar ?>
											</td>
											<td>
												<?= $value->EG_M_Apr ?>
											</td>
											<td>
												<?= $value->EG_M_May ?>
											</td>
											<td>
												<?= $value->EG_M_Jun ?>
											</td>
											<td>
												<?= $value->EG_M_Jul ?>
											</td>
											<td>
												<?= $value->EG_M_Aug ?>
											</td>
											<td>
												<?= $value->EG_M_Sep ?>
											</td>
											<td>
												<?= $value->EG_M_Oct ?>
											</td>
											<td>
												<?= $value->EG_M_Nov ?>
											</td>
											<td>
												<?= $value->EG_M_Dec ?>
											</td>
											<td>
												<?= $value->EG_M_Total ?>
											</td>
										</tr>

										<tr align="center">
											<td>
												<a data-toggle="tooltip" title="Target employment to be generated by the project expressed in number of persons disaggregated by sex">
													<label>EG F<label>
													</a>
												</td>
												<td>
													<?= $value->EG_F_Jan ?>
												</td>
												<td>
													<?= $value->EG_F_Feb ?>
												</td>
												<td>
													<?= $value->EG_F_Mar ?>
												</td>
												<td>
													<?= $value->EG_F_Apr ?>
												</td>
												<td>
													<?= $value->EG_F_May ?>
												</td>
												<td>
													<?= $value->EG_F_Jun ?>
												</td>
												<td>
													<?= $value->EG_F_Jul ?>
												</td>
												<td>
													<?= $value->EG_F_Aug ?>
												</td>
												<td>
													<?= $value->EG_F_Sep ?>
												</td>
												<td>
													<?= $value->EG_F_Oct ?>
												</td>
												<td>
													<?= $value->EG_F_Nov ?>
												</td>
												<td>
													<?= $value->EG_F_Dec ?>
												</td>
												<td>
													<?= $value->EG_F_Total ?>
												</td>
											</tr>




<!-- <tr>
<td colspan="3">Submitted by: <?= $value->Submitted_by ?><b></b>
</b>
</td>
<td colspan="7">Designation/Office: <?php echo $this->session->AgencyName; ?>
<b style="margin-left: 20px"></td>
<td colspan="5">
Noted by:

</td>
</tr> -->




</table>
<!-- &nbsp;&nbsp;<span>Submitted by: <?= $value->Submitted_by ?></span> -->
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<!-- <span>Designation/Office: <?php echo $this->session->AgencyName; ?></span> -->
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span align="left"> Noted by:</span>
</br></br></br>

<?php
if ($this->session->UserType == '2') {
	echo "
	<form style='float:right;' method='post' action='" . base_url('Rpmes_controller/ApproveForm1') . "'>  
	<input type='hidden' name='Approve' value='0'>
	<input type='hidden' name='ID_Form1' value='" . $value->ID_Form1 . "'>
	<button type='delete' class='btn btn-danger' style='margin-right:50px;'>Disapproved</button>
	</form>

	<form style='float:right;' method='post' action='" . base_url('Rpmes_controller/ApproveForm1') . "'>  
	<input type='hidden' name='Approve' value='1'>
	<input type='hidden' name='ID_Form1' value='" . $value->ID_Form1 . "'>
	<button type='delete' class='btn btn-success' style='margin-right:50px;'>Approved</button>
	</form><br><br><br><br><br><br>
	";
} else{


}		?>



<?php   }}

}else{
	echo "	<table class='table' border='1'>

	<tr style='text-align: center;background-color:blue;color:white;''>
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
	<td style='text-align: center'>
	Total <br> Project<br> Target
	</td>
	<td style='text-align: center;'>
	JAN
	</td>
	<td style='text-align: center;'>FEB</td>
	<td style='text-align: center;'>MAR</td>
	<td style='text-align: center;'>APR</td>
	<td style='text-align: center;'>MAY</td>
	<td style='text-align: center;'>JUN</td>
	<td style='text-align: center;'>JUL</td>
	<td style='text-align: center;'>AUG</td>
	<td style='text-align: center;'>SEP</td>
	<td style='text-align: center;'>OCT</td>
	<td style='text-align: center;'>NOV</td>
	<td style='text-align: center;'>DEC</td>
	<td>TOTAL</td>
	</tr>



	<tr align='center'>
	<tr>
	<td rowspan='6'>
	<p>
	<label>(a) </label>
	<br>
	<label>(b) </label>
	<br>
	<label>(c) </label>
	<br>
	<label>(d) </label>
	<br>
	<label>(e) </label>
	<br><br>
	<label>Date Start: 0000-00-00</label>
	<br>
	<label>Date End: 0000-00-00</label>
	</p>
	</td>

	</tr>




	<td align='center'>
	<a data-toggle='tooltip' title='Amount programmed for activities scheduled for implementation for the month.'>
	<label>FS</label>
	</a>
	</td>

	<td align='center'>
	</td>
	<td align='center'>
	</td>
	<td align='center'>
	</td>
	<td align='center'>
	</td>
	<td align='center'>
	</td>
	<td align='center'>
	</td>
	<td align='center'>
	</td>
	<td align='center'>
	</td>
	<td align='center'>
	</td>
	<td align='center'>
	</td>
	<td align'center'>
	</td>
	<td align='center'>
	</td>
	<td align='center'>
	</td>
	</tr>
	<tr align='center'>
	<td align='center'>
	<a data-toggle='tooltip' title='Equivalent target in percent (as a percentage of total project) that is scheduled for implementation for the month.'>
	<label>%</label>
	</a>
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
	<tr align='center'>
	<td>
	<a data-toggle='tooltip' title='Indicate selected major project activities/milestone (at most 5) where accomplishment is to be measured with corresponding targets for the month.''>
	<label>OI</label>
	</a>
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
	<tr align='center'>
	<td>
	<a data-toggle='tooltip' title='Target employment to be generated by the project expressed in number of persons disaggregated by sex'>
	<label>EG M<label>
	</a>
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

	<tr align='center'>
	<td>
	<a data-toggle='tooltip' title='Target employment to be generated by the project expressed in number of persons disaggregated by sex'>
	<label>EG F<label>
	</a>
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




	<!-- <tr>
	<td colspan='3'>Submitted by: 2<b></b>
	</b>
	</td>
	<td colspan='7'>Designation/Office: NEDA<b style='margin-left: 20px'></td>
	<td colspan='5'>
	Noted by:

	</td>
	</tr> 




	</table>";
} ?>

<script type="text/javascript">
	$(document).ready(function() {
		var total = 0;
		$('.txtBox').keyup(function() {
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

</label>
</label>
</a>
</td>
</tr>
</label>
</body>