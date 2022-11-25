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
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<img src="<?= base_url() ?>assets/img/iStock_000015780724Medium 1.png">
			</div>
			<div class="col pt-5 px-5">
				<?= $this->session->flashdata('pesan'); ?>
				<h2>Register School Administrator</h2>
				<div class="row pt-5">
					<div class="col">
						<form method="post" action="<?= base_url('users/tambah_administrator_aksi')?>" accept-charset="utf-8">
							<div class="mb-3">
								<label class="form-label">Name Of School</label>
								<?= form_error('schoolID', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<select class="form-select" id="inputGroupSelect01" name="schoolID">
								<option>-Pilih Nama Sekolah-</option>
								<?php 
										$data['school'] = $this->school_model->tampil_data('schools')->result();
										foreach($data['school'] as $rwschool)
										{ 
									?>
									<option value="<?=$rwschool->schoolID; ?>">
										<?=$rwschool->schoolName ; ?>
									</option>
									<?php } ?>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Username</label>
								<?= form_error('username', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="username" class="form-control" value="<?= set_value('username'); ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">password</label>
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
								<label class="form-label">Staff ID</label>
								<?= form_error('staffID', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="staffID" class="form-control" value="<?= set_value('staffID'); ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Position</label>
								<?= form_error('position', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="position" class="form-control" value="<?= set_value('position'); ?>">
							</div>
							<div class="position-relative">
								<button type="submit" class="btn btn-primary position-absolute top-0 end-0 px-4">Register</button>
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