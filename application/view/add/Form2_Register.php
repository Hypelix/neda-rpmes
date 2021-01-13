<?php $this->load->view('header/admin_header'); ?>
<!-- Modal -->


<style type="text/css">
  table, th, td {
    border: 2px solid #fff;
  }
  tr.hide_right > td, td.hide_right{
    border-right-style:hidden;
  }
  tr.hide_all > td, td.hide_all{
    border-style:hidden;
  }
}
</style>

<div class="modal fade" id="getProjectModal" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			</div>
			<div class="modal-body">

        <form action="" id="MonthYearForm">
          <table class="table">

            <tbody>
              <tr align="center">
                <td colspan="2"><h4>Select Project Date</h4></td>
              </tr>
              <tr style="font-weight: bold;">
                <td style="text-align: center;"><label>Date :&nbsp;</label></td>
                <td>Action</td>
              </tr>

              <tr>
                <td align="center" ><input name="MonthYear" id="MonthYear" class="getMonthYear form-control" style="background-color: #fff;width: 200px;" readonly autocomplete="off" /></td>
                <td><button type="submit" class="btn btn-success" id="display">Submit</button></td>
              </tr> 
              <tr align="center">
                <td colspan="2"><h4>Select Project</h4></td>
              </tr>

              <tr style="font-weight: bold">
                <td align="center">Project Name</td>
                <td> Action</td>
              </tr>
            </tbody>
            <tbody id="SelectProject">

            </tbody>
          </table>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>
<!-- MODAL -->


<div class="row" style="margin-top: 20px; margin-left: 20px;margin-right: 20px">
 <div class="col-12">
  <div class="card m-b-30 pane pane--table1">
   <div class="card-body pane-hScroll">

    <table class="table " id="example" border="1">
     <thead>
      <tr style="text-align:center;color:#fff;background-color:#007bff">
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
     <tr>
       <td rowspan="3">
        (a) Name of Project<br>
        (b) Date Started<br>
        (c) Target Completion <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date<br>
        (d) Location<br>
        (e) Funding Source<br>
      </td>
      <td colspan="2" style="text-align: center;">Financial Status(in Php M)</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="4" style="text-align: center;">Physical Status(%)</td>
      <td style="text-align: center;" colspan="2">Employement
        <br> Generated</td>
        <td rowspan="3" style="text-align: center">Remarks</td>

      </tr>
      <tr>
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
      <tr>
        <td style="text-align: center">
         As of Reporting <br> Period
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
   <form method="post"> 
     <tbody>
      <tr>
       <td rowspan="6">
        <p>

         <?php
         if (!empty($getProject)) {

          foreach ($getProject as $value) { 

            ?>

            <input type="text" name="a_1" class="form-control" placeholder="Project Title" data-toggle="tooltip" title="Project Title" value="<?= $value->ProjectName; ?>">
          </input>
          <br>
          <input type="date" name="b_1" class="form-control" data-toggle="tooltip" title="Month/Day/Year"
          value="<?= $value->ProjectScheduleStart; ?>">
          <br>
          <input type="date" name="c_1" class="form-control" data-toggle="tooltip" title="Month/Day/Year"
          value="<?= $value->Target_Date; ?>">
          <br>
          <input type="text" name="d_1" class="form-control" placeholder="Location" data-toggle="tooltip" title="Region/Province/City/Municipality" value="<?= $value->Location; ?>">

          <br>
          <input type="text" name="d_1" class="form-control" placeholder="FundingSource" data-toggle="tooltip" title="FundingSource" value="<?= $value->FundingSource; ?>">
          <br>
          <?php
        }
      } ?>
    </p>
  </td>
</tr>
<tr>
  <input type="hidden" name="ProjectID" id="ProjectID">
  <td>
   <input type="text" name="AllocationPeriod" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="AllocationMonth" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="ReleasesPeriod" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="ReleasesMonth" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="ObligationPeriod" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="ObligationMonth" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="Dis_Period" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="Dis_Month" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="Oi" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="Target_to_Date" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="Target_for_Month" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="Actual_to_Date" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="Actual_for_Month" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="EG_M" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
   <input type="text" name="EG_F" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
 </td>
 <td>
  <textarea name="Remarks" rows="5" class="form-control" style="width: 130px;height: 130px;"></textarea>
</td>
</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

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
<!-- <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button> -->





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
		
   $('.getMonthYear').datepicker( {
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true,
    dateFormat: 'MM yy',
    onClose: function(dateText, inst) { 
      var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
      var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
      $(this).datepicker('setDate', new Date(year, month, 1));

    }
  }); 

 });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#MonthYear').on("click", function(){

      $("#SelectProject").html('');  
      $('#display').attr("disabled",false);
    });
    $("#MonthYearForm").on("submit", function(event) {
      event.preventDefault();
      $.ajax({
       "url": "<?= base_url('rpmes_controller/MonthYear') ?>",
       "method": "POST",
       "data": $(this).serialize(),
       "dataType": "JSON",
       "success": function(data) {
        $.each(data, function(key, value){
          $("#SelectProject").append('<tr><td align="center"><p>' + value.ProjectName + '</p></td><td><button type="button" class="btn btn-success" id="selectBtn" data-id="' + value.ProjectID + '">Select</button></td></tr>');
          $('#display').attr("disabled",true);
        });

      }
    })
    });

    $("#MonthYearForm table tbody").on('click', '#selectBtn', function(e) {
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
          $("#getProjectModal").modal("hide");
        }
      })
      return true;

    });
  })
</script>
