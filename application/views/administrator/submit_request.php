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
						<a class="nav-link text-dark" aria-current="page" href="<?= base_url('dashboard_adm') ?>">
							<i class="fa fa-home fa-lg text-info" aria-hidden="true"></i> Home
						</a>
					</li>
					<li class="nav-item pe-4">
						<a class="nav-link text-dark" href="<?= base_url('dashboard_adm/profile') ?>">
							<i class="fa fa-user fa-lg text-info" aria-hidden="true"></i> Profile
						</a>
					</li>
					<li class="nav-item pe-4">
						<a class="nav-link text-dark" href="<?= base_url('dashboard_adm/submit_request') ?>">
							<i class="fa fa-file-text fa-lg text-info" aria-hidden="true"></i> Submit Requests
						</a>
					</li>
					<li class="nav-item pe-4">
						<a class="nav-link text-dark" href="<?= base_url('dashboard_adm/submit_request') ?>">
							<i class="fa fa-calendar-check-o fa-lg text-info" aria-hidden="true"></i> View Requests
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid bg-info bg-opacity-10 h-100 pb-5">
		<div class="container px-5 w-50 pt-3">
			<?= $this->session->flashdata('pesan'); ?>
			<?php foreach($adm as $rowadm): ?>
				<form method="post" action="<?= base_url('school/request_aksi')?>" accept-charset="utf-8">
					<input type="text" name="staffID" class="form-control" 
						value="<?= $rowadm->staffID; ?>" hidden>
					<div class="mb-3">
						<label class="form-label">Description of Tutorial</label>
						<?= form_error('description', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="text" name="description" class="form-control" value="<?= set_value('description'); ?>" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Proposed date</label>
						<?= form_error('date', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="date" name="date" class="form-control" value="<?= set_value('date'); ?>" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Time Tutorial (Proposed Time)</label>
						<?= form_error('email', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="time" name="time" class="form-control" value="<?= set_value('time'); ?>" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Student Level</label>
						<?= form_error('studentLevel', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="text" name="studentLevel" class="form-control" value="<?= set_value('studentLevel'); ?>" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Number of expected student (NumStudent)</label>
						<?= form_error('numStudents', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="number" name="numStudents" class="form-control" value="<?= set_value('numStudents'); ?>" required>
					</div>
					<div class="mb-3">
						<div class="row">
							<div class="col">
								<label class="form-label">PC</label>
								<?= form_error('pc', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="number" name="pc" class="form-control" value="<?= set_value('pc'); ?>" required>
							</div>
							<div class="col">
								<label class="form-label">Mobile Device</label>
								<?= form_error('mobileDevice', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="number" name="mobileDevice" class="form-control" value="<?= set_value('mobileDevice'); ?>" required>
							</div>
							<div class="col">
								<label class="form-label">Networking equipment</label>
								<?= form_error('network', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="number" name="network" class="form-control" value="<?= set_value('network'); ?>" required>
							</div>
						</div>
					</div>
					<div class="d-grid gap-2 col-6 mx-auto">
						<button type="submit" class="btn btn-primary">Confirm</button>
					</div>
				</form>
			<?php endforeach; ?>
		</div>
	</div>

	<!--bootstrap JS-->
	<script src="<?= base_url() ?>assets/vendor/bootstrap-5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
	<!--END bootstrap JS-->
	
	<script src="<?= base_url() ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>