<?php

class Auth extends CI_Controller{

  public function index(){
    if(!isset($this->session->userdata['username'])){
      $this->load->view('administrator/login');
    }else{
      if($this->session->userdata('level') == 'admin'){
        redirect('dashboard');
      }else if($this->session->userdata('level') == 'administrator'){
        redirect('dashboard_adm');
      }else if($this->session->userdata('level') == 'volunteer'){
        redirect('dashboard_vltr');
      }
    }
  }
  
  public function proses_login(){

    $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
    $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
    if($this->form_validation->run() == FALSE){
      $this->load->view('administrator/login');
    }
    else{
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $username;
      $pass = $password;

      $cek = $this->login_model->cek_login($user, $pass);

      if($cek->num_rows() > 0){
        foreach($cek->result() as $ck){
          $sess_data['userID'] = $ck->userID;
          $sess_data['userNumID'] = $ck->userNumID;
          $sess_data['username'] = $ck->username;
          $sess_data['password'] = $password;
          $sess_data['level'] = $ck->level;

          $this->session->set_userdata($sess_data);
        }
        if($sess_data['level'] == 'admin'){
          redirect('dashboard');
        }
        else if($sess_data['level'] == 'administrator'){
          redirect('dashboard_adm');
        } else if($sess_data['level'] == 'volunteer'){
          redirect('dashboard_vltr');
        }
        else{
          $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau password salah
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>'
          );
          redirect('auth');
        }
      }
      else{
        $this->session->set_flashdata(
          'pesan',
          '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Username atau password salah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('auth');
      }
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('auth');
  }
}