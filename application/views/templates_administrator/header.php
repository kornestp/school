<?php
$data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
      'username' => $data->username,
      'level'    => $data->level,
      'gambar'    => $data->gambar
    );
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Dashboard</title>

  <!-- Fontfaces CSS-->
  <link href="<?= base_url() ?>assets_dashboard/css/font-face.css" rel="stylesheet" media="all">
  <link href="<?= base_url() ?>assets_dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="<?= base_url() ?>assets_dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="<?= base_url() ?>assets_dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="<?= base_url() ?>assets_dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="<?= base_url() ?>assets_dashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="<?= base_url() ?>assets_dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="<?= base_url() ?>assets_dashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="<?= base_url() ?>assets_dashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="<?= base_url() ?>assets_dashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="<?= base_url() ?>assets_dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="<?= base_url() ?>assets_dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="<?= base_url() ?>assets_dashboard/css/theme.css" rel="stylesheet" media="all">
  <link href="<?= base_url() ?>assets_dashboard/css/modernform.css" rel="stylesheet" media="all">

  <!-- Data Table-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_dashboard/DataTables-1.11.3/datatables.css">

  <!-- Untuk Select Search -->
  <link href="<?= base_url() ?>assets_dashboard/select2/dist/css/select2.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets_dashboard/select2/dist/css/select2-bootstrap4.min.css" rel="stylesheet" />

  <style>
    @media screen and (max-width: 770px) {
      #datatablep{
        white-space: nowrap;
      }
    }
    .dropdowninfo::after {
      display: none;
    }
  </style>

</head>