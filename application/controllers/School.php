<?php

class School extends CI_Controller{

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
    $data['kelas'] = $this->school_model->tampil_data('kelas')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/kelas',$data);
    $this->load->view('templates_administrator/footer');
  }

  public function tambah_school(){
    $this->load->view('administrator/school_form');
  }

  public function tambah_school_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_school();
    }
    else{
      $schoolName = $this->input->post('schoolName');
      $address = $this->input->post('address');
      $city = $this->input->post('city');

      $data = array(
        'schoolName' => $schoolName,
        'address' => $address,
        'city' => $city
      );

      $this->school_model->insert_data($data, 'schools');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data sekolah berhasil ditambahkan
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('school/tambah_school');
    }
  }

  public function _rules(){
    $this->form_validation->set_rules('schoolName', 'schoolName', 'required', [
      'required' => 'Nama Sekolah wajib diisi!'
    ]);
    $this->form_validation->set_rules('address', 'address', 'required', [
      'required' => 'Address wajib diisi'
    ]);
    $this->form_validation->set_rules('city', 'city', 'required', [
      'required' => 'City wajib diisi'
    ]);
  }

  public function detail($kode){
    $data['detail'] = $this->matakuliah_model->matkuldetail($kode)->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/matakuliah_detail',$data);
    $this->load->view('templates_administrator/footer');
  }

  public function update($id){
    $data['kelas'] = $this->school_model->ambil_id_kelas($id);

    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/kelas_update',$data);
    $this->load->view('templates_administrator/footer');
  }

  public function update_aksi(){
    $id_kelas = $this->input->post('id_kelas');
    $nama_kelas = $this->input->post('nama_kelas');

    $data = array(
      'nama_kelas' => $nama_kelas,
    );

    $where = array(
      'id_kelas' => $id_kelas
    );

    $datakl['ambil'] = $this->school_model->ambil_id_kelas($id_kelas);
    foreach($datakl['ambil'] as $dtnm){
      $nama_kelasck = $dtnm->nama_kelas;
    }
    if($nama_kelas != $nama_kelasck) {
        $is_unique =  '|is_unique[kelas.nama_kelas]';
    } else {
        $is_unique =  '';
    }
   

    $this->form_validation->set_rules('nama_kelas', 'nama_kelas', 'required'.$is_unique, [
      'required'  => 'Nama Kelas wajib diisi!',
      'is_unique' => 'Nama Kelas "<b>'.$nama_kelas.'</b>" sudah ada'
    ]);

    if($this->form_validation->run() == false){
			$this-> update($id_kelas);
		} else {		
      $this->school_model->update_data($where, $data, 'kelas');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data mata kuliah berhasil diupdate
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('kelas');
    }
  }

  public function delete($id){
    $where = array('id_kelas' => $id);
    $this->school_model->hapus_data($where, 'kelas');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data matakuliah berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('kelas');
  }
}