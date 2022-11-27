<?php

class Request_model extends CI_Model{

  public $table = 'request';
  public $table1 = 'administrator';
  public $table2 = 'schools';
  public $id    = 'request_id';

  public function tampil_data(){
    $this->db->select('*');
		$this->db->from($this->table);
		$this->db->join($this->table1, 'request.staffID = administrator.staffID');
		$this->db->join($this->table2, 'administrator.schoolID = schools.schoolID');
    $this->db->order_by('schools.schoolName', 'ASC');
    return $this->db->get();
  }

  public function tampil_data_city(){
    $this->db->select('*');
		$this->db->from($this->table);
		$this->db->join($this->table1, 'request.staffID = administrator.staffID');
		$this->db->join($this->table2, 'administrator.schoolID = schools.schoolID');
    $this->db->order_by('schools.city', 'ASC');
    return $this->db->get();
  }
  public function tampil_data_date(){
    $this->db->select('*');
		$this->db->from($this->table);
		$this->db->join($this->table1, 'request.staffID = administrator.staffID');
		$this->db->join($this->table2, 'administrator.schoolID = schools.schoolID');
    $this->db->order_by('request.date', 'ASC');
    return $this->db->get();
  }

  public function insert($data){
    $this->db->insert_batch($this->table, $data);
  }

  public function insert_sks($datasks){
    $this->db->insert('jumlah_sks', $datasks);
  }

  public function get_by_id($id){
    $this->db->where($this->id, $id);
    return $this->db->get($this->table)->row();
  }


  
  public function ambil_kprodi($ketua_prodi){
    $this->db->where('id_dosen', $ketua_prodi);
    return $this->db->get($this->table7);
  }

  public function update($id, $data){
    $this->db->where($this->id, $id);
    $this->db->update($this->table, $data);
  }

  public function hapus_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }
  public function lunas_data($where){
    $this->db->where($where);
    $this->db->set('status_uang_kuliah', 'Lunas');
    $this->db->set('nm_semester', 'nm_semester+1', FALSE);
    $this->db->update($this->table1);
  }

  public function izin_data($where){
    $this->db->where($where);
    $this->db->set('status_uang_kuliah', 'Izin');
    $this->db->set('nm_semester', 'nm_semester+1', FALSE);
    $this->db->update($this->table1);
  }

  public function izin_lunas($where){
    $this->db->where($where);
    $this->db->set('status_uang_kuliah', 'Lunas');
    $this->db->update($this->table1);
  }

  public function getSemesterGroup($wheresemjns){
    $this->db->group_by('semester'); 
    $this->db->where($wheresemjns);
		$this->db->order_by('semester', 'ASC');
		return $this->db->get($this->table2);
  }
  public function get_sem_join($where){
    $this->db->select('*');
		$this->db->from($this->table2);
		$this->db->join($this->table4, 'matakuliah.id_prodi = prodi.id_prodi');
    $this->db->where($where);
		return $this->db->get();
  }
}