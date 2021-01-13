<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form 4</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin_form4.css') ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin_banner.css') ?>"/>
	<style type="text/css">
	</style>
</head>
<body>

</div><!-- FORMSLIDER-->
	<!--if($get->rowCount() < 1){
			echo "<div class='no_forms'>No <b>form 4</b> that has been submitted
			by the ".$_SESSION['agency_view']."<a href='admin_panel.php?return' class='back_home'>Home</a></div>";
		} else {
			echo "<div class='con_rowCount'>Found result: ".$get->rowCount()."</div>";
			while($r = $get->fetch(PDO::FETCH_OBJ)){
    -->
    <table class='tbl_form4'>
    	<form action="" method="post">
						<tr>
							<td colspan='4' align='center'>
								<span class='f4'><b>RPMES FORM 4</b></span>
								<p><b>REGIONAL PROJECT MONITORING AND EVALUATION SYSTEM</b></p>
								<p><b>PROJECT RESULTS</b></p>
								<p><b>As of </b></p>
							</td>
						</tr>
						<tr><td colspan='4'><div class='space'></div><td></tr>
						<tr>
							<td colspan='4'>
								<b>Implementing Agency: </b>
							</td>
						</tr>
						<tr><td colspan='4'><div class='space'></div><td></tr>
						<tr class='tr_blue'>
							<td>(1)</td>
							<td>(2)</td>
							<td>(3)</td>
							<td>(4)</td>
						</tr>
						<tr class='tr_blue'>
							<td>Name of Project</td>
							<td>Project Objective/s<br/>(Based on LogFrame)</td>
							<td>Results Indicator/Target<br/>(Based on LogFrame)</td>
							<td>Observed Results</td>
						</tr>
						<tr class='tr_border'>
							<td><textarea  name="pro_Name" style="width:400px;"></textarea></td>
							<td><textarea  name="Proj_Obj" style="width:400px;"></textarea></td>
							<td><textarea  name="res_Indi" style="width:400px;"></textarea></td>
							<td><textarea  name="Observed_res" style="width:400px;"></textarea></td>
						</tr>
						<tr><td colspan='4'><div class='space'></div><td></tr>
						<tr>
							<td colspan='2'><b>Submitted by:</b> </td>
							<td colspan='2'><b>Noted by:</b> <td>
						</tr>
						<tr>
							<td colspan='2'><b>Designation/Office:</b> </td>
						</tr>
						<tr>
							<td colspan='2'><b>Date:</b> </td>
						</tr>
					</table>
					<div class='footer_print'>
						<div class='footer_print_con'>
								<button href='?save_f4' class='btn_save' type="submit">Submit</button><br/>
								<button href='admin_panel.php?return' class='btn_home'>Home</button>
						</div>
					</div>
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