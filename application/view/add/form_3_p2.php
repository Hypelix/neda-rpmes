<?php include "admin_header.php";
include 'perfect_date.php';
?>
	<div class="row" style="margin-top: 20px; margin-left: 20px;margin-right: 20px">
		<div class="col-12">
			<div class="card m-b-30 pane pane--table1">
				<div class="card-body pane-hScroll">

					<h2>Form 3</h2>
<table class="table " id="example" >
	<thead>
		<tr style="text-align: center;">
			<th>(1)</th>
			<th>(2)</th>
			<th>(3)</th>
			<th>(4)</th>
		</tr>

		<tr>
			<td style="text-align: center" a data-toggle="tooltip" title="Name of Project">
				Name of Project
			</td>
			<td style="text-align: center" a data-toggle="tooltip" title="Findings">
				Findings
			</td>
			<td style="text-align: center;" a data-toggle="tooltip" title="Possible Reasons/Causes">
				Possible Reasons/Causes
			</td>
			<td style="text-align: center;" a data-toggle="tooltip" title="Recommendations">
				Recommendations
			</td>
		</tr>
	</thead>
	<tbody>
		<form method="post" action="form_1_p2_proc.php">
			<tr align="center">
				<td>
					<textarea class="form-control"  cols="50" rows="4"></textarea>
				</td>
				<td>
					<textarea class="form-control"  cols="50" rows="4"></textarea>
				</td>
				<td>
					<textarea class="form-control"  cols="50" rows="4"></textarea>
				</td>
				<td>
					<textarea class="form-control"  cols="50" rows="4"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="1">
					Submitted by: <b> <?= _get_fullname_from_id( $_SESSION['user_id']) ?> </b> 
					<br>
					<br>
					Designation/Office:
					<br><br> <b style="margin-left: 20px"> <?= _get_agency_from_id( $_SESSION['user_id']) ?></b>
					<br>
					<br>
					Date: <b><?= get_nice_date(time(), "datepicker_us") ?></b>
				</td>
				<td colspan='2'></td>
				<td colspan='1'>Noted by: <b> </b></td>
			</tr>			
			<tr>
				<td colspan="4">
					<button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
				</td>
			</tr>
		</form>
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


<?php include "admin_footer.php"; ?>