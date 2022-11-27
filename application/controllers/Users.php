<?php

class Users extends CI_Controller{

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
    $data['users'] = $this->user_model->tampil_data('users')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/daftar_users', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function tambah_administrator(){
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
      'username' => $data->username,
      'level'    => $data->level,
    );
    $this->load->view('administrator/administrator_form',$data);
  }

  public function tambah_administrator_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_administrator();
    }
    else{
      $data_a = array(
        'schoolID'   => $this->input->post('schoolID', TRUE),
        'staffID'      => $this->input->post('staffID', TRUE),
        'name'      => $this->input->post('name', TRUE),
        'email'      => $this->input->post('email', TRUE),
        'phone'      => $this->input->post('phone', TRUE),
        'position'      => $this->input->post('position')
      );

      $data_u = array(
        'username'   => $this->input->post('username'),
        'password'   => $this->input->post('password'),
        'userNumID'      => $this->input->post('staffID'),
        'level'      => 'administrator'
      );

      $this->user_model->insert_data_administrator($data_a, 'administrator');
      $this->user_model->insert_data($data_u, 'user');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Data administrator</strong> berhasil ditambahkan
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>'
      );
      redirect('users/tambah_administrator');
    }
  }

  public function tambah_users_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_users();
    }
    else{
      $data = array(
        'username'   => $this->input->post('username', TRUE),
        'password'   => md5($this->input->post('password', TRUE)),
        'email'      => $this->input->post('email', TRUE),
        'level'      => $this->input->post('level', TRUE),
        'blokir'     => $this->input->post('blokir', TRUE),
        'id_session' => md5($this->input->post('id_session', TRUE)),
      );

      $this->user_model->insert_data($data, 'users');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data user berhasil ditambahkan
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('users');
    }
  }

  public function update($userID){
    $where = array('userID'=>$userID);
    $data['adm'] =  $this->user_model->getUserAdministrator($where)->result();
    $this->load->view('administrator/profile_adm',$data);
  }

  public function update_administrator_aksi(){
    $id  = $this->input->post('id_administrator');
    $staffID  = $this->input->post('staffID');
    $userID  = $this->input->post('userID');

    $data_a = array(
        'id_administrator'  => $this->input->post('id_administrator'),
        'staffID'           => $this->input->post('staffID'),
        'name'              => $this->input->post('name'),
        'email'             => $this->input->post('email'),
        'phone'             => $this->input->post('phone'),
        'position'          => $this->input->post('position')
    );
    $data = array(
        'userID'      => $this->input->post('userID'),
        'userNumID'           => $this->input->post('staffID'),
        'password'      => $this->input->post('password')
    );

    $where = array('id_administrator'=>$id);
    $where1 = array('userID'=>$userID);

    $dataam['ambil'] = $this->user_model->ambil_id_user($id);
    foreach($dataam['ambil'] as $dtkod){
      $staffID1 = $dtkod->staffID;
    }
    if($staffID != $staffID1) {
        $is_unique =  '|is_unique[administrator.staffID]';
    } else {
        $is_unique =  '';
    }
   

    $this->form_validation->set_rules('staffID', 'staffID', 'required'.$is_unique, [
      'required'  => 'staffID prodi wajib diisi!',
      'is_unique' => 'staffID "<b>'.$staffID.'</b>" sudah ada'
    ]);

    if($this->form_validation->run() == false){
			$this-> update($userID);
		} else {
      $this->user_model->update_data($where1, $data, 'user');
      $this->user_model->update_data_adm($where, $data_a, 'administrator');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data user berhasil diupdate
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('dashboard_adm/profile');
    }
  }

  public function jadi_user($id){
    $data_m['detail'] = $this->user_model->ambil_id_mahasiswa($id);
    foreach($data_m['detail'] as $data_n){
      $nim = $data_n->nim;
    }
    $data = array(
      'status_user' => 'Sudah',
    );
    $data_u = array(
      'username' => $nim,
      'id_mhs	'  => $id,
      'password' => md5($nim),
      'identitas' => $nim,
      'level' => 'mahasiswa',
      'blokir' => 'Y'
    );

    $where = array('id' => $id);
    $this->mahasiswa_model->update_data($where, $data, 'mahasiswa');
    $this->user_model->insert_data($data_u, 'users');
   
    redirect('users');
  }

  public function hapus($id){
    $where = array('id_user' => $id);

    $data['users'] = $this->user_model->edit_data($where, 'users')->result();
    foreach($data['users'] as $datuser){
      $levelus = $datuser->level;
      $idmhs = $datuser->id_mhs;
      $iddsn = $datuser->id_dosen;
    }

    $wheremhs = array('id' => $idmhs);

    $wheredosen = array('id_dosen' => $iddsn);

    $datah = array(
      'status_user' => 'belum'
    );

    if($levelus == 'mahasiswa'){
      $this->mahasiswa_model->update_data($wheremhs, $datah, 'mahasiswa');
    }else if ($levelus == 'dosen'){
      $this->dosen_model->update_data($wheredosen, $datah, 'dosen');
    }else{
      echo'';
    }

    $this->user_model->hapus_data($where, 'users');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data user berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('users');
  }

  public function _rules(){
    $this->form_validation->set_rules('username', 'username', 'required|is_unique[user.username]', [
      'required' => 'Username wajib diisi!',
      'is_unique'     => 'Username sudah ada'
    ]);
    $this->form_validation->set_rules('staffID', 'staffID', 'required|is_unique[administrator.staffID]', [
      'required' => 'staffID wajib diisi!',
      'is_unique'     => 'staffID sudah ada'
    ]);
    $this->form_validation->set_rules('schoolID', 'schoolID', 'required', [
      'required' => 'Nama Sekolah wajib diisi!'
    ]);
    $this->form_validation->set_rules('password', 'password', 'required', [
      'required' => 'Password wajib diisi!'
    ]);
    $this->form_validation->set_rules('name', 'name', 'required', [
      'required' => 'Nama wajib diisi!'
    ]);
    $this->form_validation->set_rules('phone', 'phone', 'required', [
      'required' => 'Phone wajib diisi!'
    ]);
    $this->form_validation->set_rules('position', 'position', 'required', [
      'required' => 'Position wajib diisi!'
    ]);
    $this->form_validation->set_rules('email', 'email', 'required', [
      'required' => 'Email wajib diisi!'
    ]);
  }

}