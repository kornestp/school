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
				<h2>Register School</h2>
				<div class="row pt-5">
					<div class="col">
						<form method="post" action="<?= base_url('school/tambah_school_aksi')?>" accept-charset="utf-8">
							<div class="mb-3">
								<label class="form-label">Name Of School</label>
								<?= form_error('schoolName', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="schoolName" class="form-control" value="<?= set_value('schoolName'); ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">School Address</label>
								<?= form_error('address', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="address" class="form-control" value="<?= set_value('address'); ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">City</label>
								<?= form_error('city', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
								<input type="text" name="city" class="form-control" value="<?= set_value('city'); ?>">
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