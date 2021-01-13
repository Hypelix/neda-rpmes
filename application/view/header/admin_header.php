

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>NEDA - Regional Project Monitoring and Evaluation System</title>
	<meta content="Admin Dashboard" name="description">
	<meta content="ThemeDesign" name="author">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php include "link.php" ?>
</head>

<?php include "profile_btn.php"?>

<body>
	<header style="background-color:#508aeb;" id="topnav">

		<div class="topbar-main">
			<div class="container-fluid">
				<!-- Logo container-->
				<div class="logo" style="margin-bottom: 5px; margin-top: 5px">
					<a href='admin_panel.php' class='logo'></a>
					<b style="font-size:25px;color:#ffffff;"><img src="<?php echo base_url('assets/header_backend/images/neda.png') ?>" height='90' class='rounded-circle'>&nbsp;Regional Project Monitoring and Evaluation System <i style='color:#FFFF00'>(RPMES)</i> </b>
				</div>
			</div>
		</div>
		<!-- End Logo container-->
		<div class="menu-extras topbar-custom">
			<ul class="list-inline float-right mb-0" style="margin-top: 15px;">
				<!-- User-->

				<li class="list-inline-item dropdown notification-list">
					<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><label style="color: #ffffff">
						<?php $username = $this->session->FName." ".$this->session->LName;
						echo $username;?></label>
						<img src="<?= base_url('assets/neda.png') ?>" alt="user" class="rounded-circle">
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#EditProfile">
							<i class="mdi mdi-account-circle m-r-5 text-muted"></i>Profile
						</a>
						<a class="dropdown-item" href="#">
							<span class="badge badge-success mt-1 float-right">5</span>
							<i class="mdi mdi-settings m-r-5 text-muted"></i> Settings
						</a> 
						<a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted">
						</i> Lock screen</a>
						<a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a></div>
					</li>
				</ul>
			</div><!-- end menu-extras -->
			<div class="clearfix"></div>
		</div><!-- end container -->
	</div>



	<style type="text/css">
		
		/* Main Navigation */
		nav {
			background: #fff;
			width: 100%;
		}

		nav ul {
			padding: 0;
			margin: 0;
		}

		nav ul li {
			position: relative;
			display: inline-block;
			list-style-type: none;
			margin: 0;
			padding: 10px 0;
		}
		nav ul li:hover {
			background: #fff;
		}

		nav ul li a {
			color: #707070;
			text-decoration: none;
			padding: 12px;
		}
		nav ul li a:hover {
			color: #508AEB;
			text-decoration: none;
		}

		/* Sub Menu */
		nav ul li.parent ul.child {
			display: none; /* Hide Sub Menu */
		}
		nav ul li.parent:hover ul.child {
			display: block; /* Show Sub Menu on Hover */
			position: absolute;
			top: 40px;
			background: #fff;
		}

		nav ul li.parent ul.child li {
			width: 9em;
			padding: 0;
		}
		nav ul li.parent ul.child li:hover {
			background: #fff;
		}
		nav ul li.parent ul.child li a {
			display: block;
		}

	</style>

	<!-- MENU Start -->
	<nav style="font-weight: bold;">
		<ul>
			<li class="has-submenu <?php if (uri_string() == 'Rpmes_controller' || uri_string() == NULL || uri_string() == 'Rpmes_controller/AllActivityLogs') echo "active";?>">
				<a href='<?= base_url('Rpmes_controller') ?>'>
					<i class='dripicons-home'></i>&nbsp;Dashboard</a>
				</li>
				<li class="parent">
					<a href='<?= base_url('Rpmes_controller') ?>'>
						<i class='dripicons-inbox'></i>&nbsp;Input Forms</a>
						<ul class="child">
							<li>
								<a href="<?= base_url('Rpmes_controller/form1') ?>">Form 1</a>
							</li>
							<li>
								<a href="<?= base_url('Rpmes_controller') ?>">Form 2</a>
							</li>
							<li>
								<a href="<?= base_url('Rpmes_controller') ?>">Form 3</a>
							</li>
							<li>
								<a href="<?= base_url('Rpmes_controller') ?>">Form 4</a>
							</li>
						</ul>
					</li>

					<li class="parent">
						<a href='<?= base_url('Rpmes_controller') ?>'>
							<i class='dripicons-inbox'></i>&nbsp;Pending Forms</a>
							<ul class="child">
								<li>
									<a href="#">Pending Form 1</a>
								</li>
								<li>
									<a href="#">Pending Form 2</a>
								</li>
								<li>
									<a href="#">Pending Form 3</a>
								</li>
								<li>
									<a href="#">Pending Form 4</a>
								</li>
							</ul>
						</li>
						<!-- g -->
						<li class="parent">
							<a href='<?= base_url('Rpmes_controller') ?>'>
								<i class='dripicons-inbox'></i>&nbsp;Output Forms</a>
								<ul class="child">
									<li>
										<a href="#">Form 5</a>
									</li>
									<li>
										<a href="#">Form 6</a>
									</li>
									<li>
										<a href="#">Form 7</a>
									</li>
									<li>
										<a href="#">Form 8</a>
									</li>
									<li>
										<a href="#">Form 9</a>
									</li>
									<li>
										<a href="#">Form 10</a>
									</li>
									<li>
										<a href="#">Form 11</a>
									</li>
								</ul>
							</li>
							<li style="float: right;">
								<a href='<?= base_url('Rpmes_controller/users') ?>'>
									<i class='dripicons-user'></i>&nbsp;User Manage</a>
								</li>
							</ul>

						</nav>
						<!-- end navbar-custom -->
					</header><!-- End Navigation Bar-->
					<div class="wrapper" style="margin-top: 30px">