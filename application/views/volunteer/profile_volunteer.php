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
		<?= $this->session->flashdata('pesan'); ?>
		<div class="container px-5 w-50 pt-3">
			<?php foreach($adm as $rowadm): ?>
				<form method="post" action="<?= base_url('volunteer/update_volunteer_aksi')?>" accept-charset="utf-8">
					<input type="text" name="userID" class="form-control" value="<?= $rowadm->userID; ?>"  hidden>
					<input type="text" name="id_volunteer" class="form-control" 
						value="<?= $rowadm->id_volunteer; ?>" hidden>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<?= form_error('password', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="text" name="password" class="form-control" value="<?= $rowadm->password; ?>" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Fullname</label>
						<?= form_error('name', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="text" name="name" class="form-control" value="<?= $rowadm->name; ?>" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Email</label>
						<?= form_error('email', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="email" name="email" class="form-control" value="<?= $rowadm->email; ?>" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Phone</label>
						<?= form_error('phone', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="text" name="phone" class="form-control" value="<?= $rowadm->phone; ?>" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Occupation</label>
						<?= form_error('occupation', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="text" name="occupation" class="form-control" value="<?= $rowadm->occupation; ?>" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Date of Birth</label>
						<?= form_error('birthDate', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="date" name="birthDate" class="form-control" value="<?= $rowadm->birthDate; ?>" required>
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