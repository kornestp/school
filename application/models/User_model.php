<?php

class User_model extends CI_Model{

  public $table = 'user';
  public $table1 = 'administrator';
  public $table2 = 'schools';
  public $table3 = 'volunteer';
  public $id = 'userID';

  public function ambil_data($id){
    $this->db->where('username', $id);
    return $this->db->get('user')->row();
  }

  public function ambil_id_user($id){
    $hasil = $this->db->where('id_administrator', $id)->get('administrator');
    if($hasil->num_rows() > 0){
      return $hasil->result();
    }
    else{
      return false;
    }
  }

  public function tampil_data($table){
    return $this->db->get($table);
  }

  public function getUserAdministrator($where){
    $this->db->select('*');
		$this->db->from($this->table);
		$this->db->join($this->table1, 'user.userNumID = administrator.staffID');
		$this->db->join($this->table2, 'schools.schoolID = administrator.schoolID');
    $this->db->where($where);
		return $this->db->get();
  }

  public function getUserVolunteer($where){
    $this->db->select('*');
		$this->db->from($this->table);
		$this->db->join($this->table3, 'user.username = volunteer.username');
    $this->db->where($where);
		return $this->db->get();
  }

  public function insert_data_administrator($data, $table1){
    $this->db->insert($table1, $data);
  }

  public function insert_data_volunteer($data_a, $table3){
    $this->db->insert($table3, $data_a);
  }

  public function insert_data($data, $table){
    $this->db->insert($table, $data);
  }

  public function edit_data($where, $table){
    return $this->db->get_where($table, $where);
  }

  public function update_data_adm($where, $data_a, $table1){
    $this->db->where($where);
    $this->db->update($table1, $data_a);
  }

  public function update_data_vltr($where, $data_a, $table3){
    $this->db->where($where);
    $this->db->update($table3, $data_a);
  }

  public function update_data($where1, $data, $table){
    $this->db->where($where1);
    $this->db->update($table, $data);
  }

  public function hapus_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }

}