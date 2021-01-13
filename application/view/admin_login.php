<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>NEDA - Regional Project Monitoring and Evaluation System</title>
	<meta content="Admin Dashboard" name="description">
	<meta content="ThemeDesign" name="author">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="icon" type="image/ico" href="<?= base_url('assets/login/neda.png')?>" rel="stylesheet"/>
	<link href="<?= base_url('assets/login/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/login/icons.css')?>" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/login/style.css')?>" rel="stylesheet" type="text/css">
</head>

<body class="pb-0">

	<!-- Begin page -->
	<div class="accountbg">
		<div class="content-center">
			<div class="content-desc-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-8">
							<div class="card">
								<div class="card-body">
									<h3 class="text-center mt-0 m-b-15">

										<img src="<?= base_url('assets/login/neda.png')?>" height="200" alt="logo"></a>
									</h3>
									<h4 class="text-muted text-center font-18">
										<p style="color: blue;font-weight: bold;">(RPMES)<p><b>Regional Project Monitoring and Evaluation System</b>
										</h4>
										<br>
										<div class="p-2">
											<?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
												<div role="alert" class="alert alert-danger">
													<button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													<?= $this->session->flashdata('SUCCESSMSG') ?>
												</div>

											<?php } if ($this->session->flashdata('FAILMSG')) { ?>
												<div role="alert" class="alert alert-warning">
													<button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													<?= $this->session->flashdata('FAILMSG') ?>
												</div>
											<?php }
											$attributes = array('class' => 'form-signin');
											echo form_open('login', $attributes); ?>
											<!-- <h2 class="form-signin-heading" style="text-align: center;">Login</h2> -->
											<div class="input-group">

												<?php
												echo form_label(NULL, 'username', $attributes);
												$data = array(
													'name'          => 'username',
													'class'         => 'form-control',
													'placeholder'   => 'Username',
													'autocomplete'  => 'off'

												//'required'      => 'required'
												);
												echo form_input($data);
												?>
											</div>
											<br>
											<?php
											$attributes = array('class' => 'sr-only');
											echo form_label('Password: ', 'password', $attributes);
											$data = array(
												'type'          => 'password',
												'name'          => 'password',
												'class'         => 'form-control',
												'placeholder'   => 'Password',
												'autocomplete'  => 'off'
											);

											echo form_input($data);
											$data = array(
												'class'         => 'btn btn-lg btn-primary btn-block',
												'value'      => 'Login'
											);
											echo "</br>";
											echo form_submit($data);
											echo form_close(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end row -->
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery  -->
		<script src="<?= base_url() ?>assets/login/jquery.min.js"></script>
		<script src="<?= base_url() ?>assets/login/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url() ?>assets/login/modernizr.min.js"></script>
		<script src="<?= base_url() ?>assets/login/detect.js"></script>
		<script src="<?= base_url() ?>assets/login/fastclick.js"></script>
		<script src="<?= base_url() ?>assets/login/jquery.slimscroll.js"></script>
		<script src="<?= base_url() ?>assets/login/jquery.blockUI.js"></script>
		<script src="<?= base_url() ?>assets/login/waves.js"></script>
		<!-- App js -->
		<script src="<?= base_url() ?>assets/login/app.js"></script>
	</body>

	</html>