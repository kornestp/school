<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard</title>
  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/bootstrap-5.2.2/dist/css/bootstrap.min.css">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body>
	<nav class="navbar navbar-expand-lg bg-info text-white">
		<div class="container-fluid">
			<a class="navbar-brand text-white ms-5" href="#">HOME</a>
		</div>
        <a class="text-white" href="<?= base_url('auth/logout') ?>">
			<i class="fa fa-sign-out fa-2x me-5" aria-hidden="true"></i>
		</a>
	</nav>
	<nav class="navbar navbar-expand-lg bg-white">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
					<li class="nav-item pe-4">
						<a class="nav-link text-dark" aria-current="page" href="#">
							<i class="fa fa-home fa-lg text-info" aria-hidden="true"></i> Home
						</a>
					</li>
					<li class="nav-item pe-4">
						<a class="nav-link text-dark" href="#">
							<i class="fa fa-user fa-lg text-info" aria-hidden="true"></i> Profile
						</a>
					</li>
					<li class="nav-item pe-4">
						<a class="nav-link text-dark" href="#">
							<i class="fa fa-file-text fa-lg text-info" aria-hidden="true"></i> Submit Requests
						</a>
					</li>
					<li class="nav-item pe-4">
						<a class="nav-link text-dark" href="#">
							<i class="fa fa-calendar-check-o fa-lg text-info" aria-hidden="true"></i> View Requests
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<?php foreach($adm as $rowadm): ?>
			<?= $rowadm->username; ?>
		<?php endforeach; ?>
		<div class="row">
			<div class="col">
				<img src="<?= base_url() ?>assets/img/iStock_000015780724Medium 1.png">
			</div>
			<div class="col pt-5 px-5">
				<h2>Wich register do you want?</h2>
				<div class="row pt-5">
					<div class="col">
						<div class="d-grid gap-2">
							<a href="<?= base_url('school/tambah_school') ?>" type="button" class="btn btn-primary btn-lg ml-3">
								<i class="fa fa-building fa-2x" aria-hidden="true"></i><br> School
							</a>
						</div>
					</div>
					<div class="col">
						<div class="d-grid gap-2">
							<a href="<?= base_url('users/tambah_administrator') ?>" type="button" class="btn btn-primary btn-lg ml-3">
								<i class="fa fa-user fa-2x" aria-hidden="true"></i><br> Administrator
							</a>
						</div>
					</div>
				</div>

				<div class="col pt-4">
					<div class="d-grid gap-2">
						<a href="<?= base_url('auth/logout') ?>" type="button" class="btn btn-outline-danger">
							<i class="fa fa-sign-out" aria-hidden="true"></i>logout
						</a>
					</div>
				</div>


			</div>
		</div>
	</div>

	<!--bootstrap JS-->
	<script src="<?= base_url() ?>assets/vendor/bootstrap-5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
	<!--END bootstrap JS-->
	
	<script src="<?= base_url() ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>