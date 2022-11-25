<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
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
				<h2>Welcome to Study Side HELP</h2>
				<form class="pb-4 pt-5" method="post" action="<?= base_url('auth/proses_login')?>" accept-charset="utf-8">
					<div class="mb-3">
						<label class="form-label">Username</label>
						<?= form_error('username', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<input type="text" name="username" class="form-control" value="<?= set_value('username'); ?>">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<?= form_error('password', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
						<div class="input-group mb-3">
							<input type="password" class="form-control" id="exampleInputPassword1"
								name="password">
							<span class="input-group-text" id="basic-addon2">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</span>
						</div>
					</div>
					<div class="position-relative">
						<button type="submit" class="btn btn-primary position-absolute top-0 end-0 px-4">Login</button>
					</div>
				</form>

				<div class="position-relative mt-5">
					<div class="position-absolute top-0 start-0 text-primary">
						Register as Volunteer?
					</div>
					<div class="position-absolute top-0 end-0">
						<a href="<?= base_url('dashboard') ?>" type="button" class="btn btn-outline-primary rounded-pill">Sign Up</a>
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
