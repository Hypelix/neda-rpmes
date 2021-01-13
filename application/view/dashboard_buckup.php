<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$username=$this->session->UName;
echo $username;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form 1</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin_form1.css') ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin_banner.css') ?>"/>
	<style type="text/css">
	</style>
</head>
<body>
<div id="container">
<!--	
<div class='inn_save'>
			<div class='box_save'>
				<form method='POST' action=''>
					<p>All forms will be saved!</p>row
					<a class='close_inn_save'>&times</a>
					<p class='red'>It will mean the deletion of all enrolled projects for this year.</p>
					<button name='btn_save_f1' class='btn_save_f1'>Proceed anyway</button>
				</form>
			</div>
</div>
-->
<h1> Dito ang dashboard/index </h1>
<p>
<?php
if (is_null($username))
{ ?>
<a class="btn btn-lg btn-primary btn-block" href="<?php echo base_url(); ?>index">Login</a>
<?php
}
else
{ ?>
<a class="btn btn-lg btn-primary btn-block" href="<?php echo base_url(); ?>logout">Logout</a>
<?php } ?>


<script type="text/javascript">
$(document).ready(function() {
	$('.close_inn_save').click(function() {
		$('.inn_save').fadeOut();
	});
});
</script>	
</body>
</html>