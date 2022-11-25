<?php

class Dash_login extends CI_Controller{

  function __construct(){
    parent::__construct();
  }

  public function index(){
    $this->load->view('administrator/dashboard_login');
  }
}