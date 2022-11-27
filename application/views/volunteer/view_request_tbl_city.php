<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>View Request</title>
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
		<div class="container px-5 pt-4">
			<table class="table bg-white">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Status</th>
						<th scope="col">City</th>
						<th scope="col">Description</th>
						<th scope="col">School Name</th>
						<th scope="col">Request Date</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach($request as $requestrw): ?>
					<tr>
						<td><?= $requestrw->request_id; ?></td>
						<td><?= $requestrw->status; ?></td>
						<td><?= $requestrw->city; ?></td>
						<td><?= $requestrw->description; ?></td>
						<td><?= $requestrw->schoolName; ?></td>
						<td><?= $requestrw->date; ?></th>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<!--bootstrap JS-->
	<script src="<?= base_url() ?>assets/vendor/bootstrap-5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
	<!--END bootstrap JS-->
	
	<script src="<?= base_url() ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>