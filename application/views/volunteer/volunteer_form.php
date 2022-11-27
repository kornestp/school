<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Volunteer</title>
  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/bootstrap-5.2.2/dist/css/bootstrap.min.css">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<img src="<?= base_url() ?>assets/img/iStock_000015780724Medium 1.png">
			</div>
			<div class="col pt-5 px-5">
				<?= $this->session->flashdata('pesan'); ?>
				<h2>Register of Volunteer</h2>
				<div class="row pt-5">
					<div class="col">
						<form method="post" action="<?= base_url('volunteer/tambah_volunteer_aksi')?>" accept-charset="utf-8">
							<div class="mb-3">
								<label class="form-label">Username</label>
								<?= form_error('username', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="username" class="form-control" value="<?= set_value('username'); ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Password</label>
								<?= form_error('password', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="password" class="form-control" value="<?= set_value('password'); ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Fullname</label>
								<?= form_error('name', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="name" class="form-control" value="<?= set_value('name'); ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Email</label>
								<?= form_error('email', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="email" name="email" class="form-control" value="<?= set_value('email'); ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Phone</label>
								<?= form_error('phone', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="phone" class="form-control" value="<?= set_value('phone'); ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Occupation</label>
								<?= form_error('occupation', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="occupation" class="form-control" value="<?= set_value('occupation'); ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Date of Birth</label>
								<?= form_error('birthDate', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="date" name="birthDate" class="form-control" value="<?= set_value('birthDate'); ?>">
							</div>
							<div class="d-grid gap-2 col-6 mx-auto">
								<button type="submit" class="btn btn-primary">Register</button>
							</div>
						</form>
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