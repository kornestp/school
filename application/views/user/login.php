<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login Siakad</title>
  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/animate/animate.css">
  <!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/main.css">

</head>

<body class="bg-gradient-primary">
  <div class="limiter">
    <div class="container-login100" style="background-image: url('<?= base_url() ?>assets/images/img-01.jpg');">
      <div class="wrap-login100 p-t-190 p-b-30">
        <form method="post" action="<?= base_url('auth/proses_login')?>" class="login100-form validate-form">
          <div class="login100-form-avatar">
              <img src="<?= base_url() ?>assets/images/avatar-01.jpg" alt="AVATAR">
					</div>
          <span class="login100-form-title p-t-20 p-b-15">
					</span>
          <?= $this->session->flashdata('pesan'); ?>
          <div class="wrap-input100 validate-input m-b-10" data-validate="User Login tidak boleh kosong">
            <input type="text" name="username" class="input100" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="User login anda">
            <?= form_error('username', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input m-b-10" data-validate="Kata Sandi tidak boleh kosong">
            <input class="input100" type="password" name="password" placeholder="Kata Sandi" id="exampleInputPassword" >
            <?= form_error('password', '<div class="text-danger small ml-3 p-1">', '</div>') ?>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock"></i>
            </span>
          </div>

          <div class="container-login100-form-btn p-t-10">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

          <div class="text-center w-full p-t-25 p-b-230">
            <span class="txt1">
            © <?= date("Y"); ?> Sistem Informasi Akademik<br>
              <a href="#" class="txt1">
                Nama Kampus
              </a>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="<?= base_url() ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>
