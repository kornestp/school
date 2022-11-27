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
	<style>
		html, body {
			height: 100%;
		}
 	</style>
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
						<a class="nav-link text-dark" aria-current="page" href="<?= base_url('dashboard_vltr') ?>">
							<i class="fa fa-home fa-lg text-info" aria-hidden="true"></i> Home
						</a>
					</li>
					<li class="nav-item pe-4">
						<a class="nav-link text-dark" href="<?= base_url('dashboard_vltr/profile') ?>">
							<i class="fa fa-user fa-lg text-info" aria-hidden="true"></i> Profile
						</a>
					</li>
					<li class="nav-item pe-4">
						<a class="nav-link text-dark" href="<?= base_url('dashboard_vltr/view_request') ?>">
							<i class="fa fa-file-text fa-lg text-info" aria-hidden="true"></i> View Requests
						</a>
					</li>
					<li class="nav-item pe-4">
						<a class="nav-link text-dark" href="<?= base_url('dashboard_vltr/submit_offers') ?>">
							<i class="fa fa-calendar-check-o fa-lg text-info" aria-hidden="true"></i> Submit Offers
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid bg-info bg-opacity-10 h-100 pb-5">
		<?php foreach($adm as $rowadm): ?>
		<div class="row ps-4 pt-5">
			<div class="col-3 pe-4 position-relative">
				<div class="position-absolute top-50 start-50 translate-middle" style="z-index:100">
					<img class="rounded mx-auto d-block w-75" src="<?= base_url() ?>assets/img/user 2.png">
				</div>

				<div class="card" style="width: 100%;height:350px;">
					<div class="card-body bg-primary h-50">
					</div>
					<div class="card-body h-50 pt-5">
						<h5 class="card-title text-center mt-4"><?= $rowadm->name; ?></h5>
						<p class="card-text text-center">Volunteer</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card" style="width: 100%;background-color:rgb(7 7 137);">
					<div class="card-body text-white">
						<p class="card-title">Email: <?= $rowadm->email; ?></p>
						<p class="card-text">Phone: <?= $rowadm->phone; ?></p>
						<p class="card-text">Occupation: <?= $rowadm->occupation; ?></p>
						<p class="card-text">Date of Birth: <?= $rowadm->birthDate; ?></p>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<!--bootstrap JS-->
	<script src="<?= base_url() ?>assets/vendor/bootstrap-5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
	<!--END bootstrap JS-->
	
	<script src="<?= base_url() ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>