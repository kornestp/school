<?php

class Akun extends CI_Controller{

  function __construct(){
    parent::__construct();

    $this->load->model('Akun_model');
    $this->load->model('Login_model');
	
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','session','upload'));

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
    $id_user        = $this->session->userdata('id_user');
    $data['detail'] = $this->Akun_model->ambil_id_akun($id_user);
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/akun_detail', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update_akun_aksi(){
      $config['upload_path']          = './assets_dashboard/images/icon';
      $config['allowed_types']        = 'gif|jpg|jpeg|png|bmp|pdf';
      $config['overwrite'] = TRUE;


      $this->upload->initialize($config);
  
      $id_user        = $this->input->post('id_user');
      $username       = $this->input->post('username');
      $nama           = $this->input->post('nama');
      $identitas       = $this->input->post('identitas');
      $password       = $this->input->post('password');
      $jenis_kelamin  = $this->input->post('jenis_kelamin');
      $email          = $this->input->post('email');
      $alamat         = $this->input->post('alamat');
      $gambar0         = $this->input->post('gambar0');
      $gambar          = $_FILES['gambar']['name'];

      if ( ! $this->upload->do_upload('gambar')){
        $error = array('error' => $this->upload->display_errors());
        $gambar = $gambar0;
      }else{
        $gambar = $this->upload->data('file_name');
      }
   
      $datasesi = array(
        'password'  =>$password,
        'username'  =>$username,
        'nama '     =>$nama,
        'identitas' =>$identitas,
        'email'     =>$email,
        'alamat'    =>$alamat
           );

      $data = array(
        'id_user'      => $id_user,
        'username'      => $username,
        'nama'          => $nama,
        'identitas'      => $identitas,
        'password'      => md5($password),
        'jenis_kelamin' => $jenis_kelamin,
        'email'         => $email,
        'gambar'        => $gambar,
        'alamat'        => $alamat
      );

      // print_r($data);
      // die;

      $where = array(
        'id_user' => $id_user,
      );

      $this->Akun_model->update_data($where, $data, 'users');
      $user = $username;

      $cek = $this->login_model->cek_login_up($user);
      foreach($cek->result() as $ck){
        $sessi_data['username'] = $ck->username;
        $sessi_data['email'] = $ck->email;
        $sessi_data['gambar'] = $ck->gambar;
        $sessi_data['nama'] = $ck->nama;


        $this->session->set_userdata($sessi_data);
      }
        redirect(base_url('akun'));
  }

  public function akun_mhs(){
    $id_user        = $this->session->userdata('id_user');
    $data['detail'] = $this->Akun_model->ambil_id_akun($id_user);
    $this->load->view('templates_user/header');
    $this->load->view('templates_user/sidebar');
    $this->load->view('mahasiswa/akun_detail', $data);
    $this->load->view('templates_user/footer');
  }

  public function update_akun_mhs(){
    $id_user        = $this->input->post('id_user');
    $username       = $this->input->post('username');
    $password       = $this->input->post('password');
 
    $datasesi = array(
      'password'  =>$password,
      'username'  =>$username,
      'nama '     =>$nama,
      'identitas' =>$identitas,
      'email'     =>$email,
      'alamat'    =>$alamat
    );

    $data = array(
      'password'      => md5($password),
    );

    // print_r($data);
    // die;

    $where = array(
      'id_user' => $id_user,
    );

    $this->Akun_model->update_data($where, $data, 'users');
    $user = $username;
    $pass = $password;

    $cek = $this->login_model->cek_login_up($user, $pass);
      $this->session->set_userdata('password', $password);
      redirect(base_url('akun/akun_mhs'));
  }

  public function akun_dsn(){
    $id_user        = $this->session->userdata('id_user');
    $data['detail'] = $this->Akun_model->ambil_id_akun($id_user);
    $this->load->view('templates_dosen/header');
    $this->load->view('templates_dosen/sidebar');
    $this->load->view('dosen/akun_detail', $data);
    $this->load->view('templates_dosen/footer');
  }

  public function update_akun_dsn(){
    $id_user        = $this->input->post('id_user');
    $username       = $this->input->post('username');
    $password       = $this->input->post('password');
 
    $datasesi = array(
      'password'  =>$password,
      'username'  =>$username,
      'nama '     =>$nama,
      'identitas' =>$identitas,
      'email'     =>$email,
      'alamat'    =>$alamat
    );

    $data = array(
      'password'      => md5($password),
    );

    // print_r($data);
    // die;

    $where = array(
      'id_user' => $id_user,
    );

    $this->Akun_model->update_data($where, $data, 'users');

    $this->session->set_userdata('password', $password);
      redirect(base_url('akun/akun_dsn'));
  }

  public function _rules(){
    $this->form_validation->set_rules('nidn', 'nidn', 'required', [
      'required' => 'NIDN wajib diisi!'
    ]);
    $this->form_validation->set_rules('nama_dosen', 'nama_dosen', 'required', [
      'required' => 'Nama dosen wajib diisi!'
    ]);
    $this->form_validation->set_rules('alamat', 'alamat', 'required', [
      'required' => 'Alamat wajib diisi!'
    ]);
    $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
      'required' => 'Jenis kelamin wajib diisi!'
    ]);
    $this->form_validation->set_rules('email', 'email', 'required', [
      'required' => 'Email wajib diisi!'
    ]);
    $this->form_validation->set_rules('telp', 'telp', 'required', [
      'required' => 'Nomor telepon wajib diisi!'
    ]);
  }
}