<?php

class Dashboard_vltr extends CI_Controller{

  function __construct(){
    parent::__construct();

    if(!isset($this->session->userdata['username'])){
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Anda belum login!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('auth');
    }
  }

  public function index(){
    $userID = $this->session->userdata('userID'); 
    $where = 'user.userID ='.'"'.$userID.'"';
    
    $data['adm'] =  $this->user_model->getUserVolunteer($where)->result();
    
    $this->load->view('volunteer/dashboard_volunteer',$data);
  }

  public function profile(){
    $userID = $this->session->userdata('userID'); 
    $where = 'user.userID ='.'"'.$userID.'"';
    
    $data['adm'] =  $this->user_model->getUserVolunteer($where)->result();
    
    $this->load->view('volunteer/profile_volunteer',$data);
  }

  public function view_request(){
    $this->load->view('volunteer/view_request');
  }
  public function view_request_tbl(){
    $data['request'] =  $this->request_model->tampil_data()->result();
    $this->load->view('volunteer/view_request_tbl', $data);
  }
  public function view_request_tbl_city(){
    $data['request'] =  $this->request_model->tampil_data_city()->result();
    $this->load->view('volunteer/view_request_tbl_city', $data);
  }
  public function view_request_tbl_date(){
    $data['request'] =  $this->request_model->tampil_data_date()->result();
    $this->load->view('volunteer/view_request_tbl_date', $data);
  }
}