<?php

class Krs_model extends CI_Model{

  public $table = 'krs';
  public $id    = 'id_krs';

  var $table1 = 'semester';
  var $id2 = 'id_mhs';

  var $table2 = 'matakuliah';

  var $table3 = 'tahun_akademik';

  var $table4 = 'prodi';

  var $table5 = 'jumlah_sks';

  var $table6 = 'mahasiswa';

  var $table7 = 'dosen';

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

  public function cek_krs($whereck){
    return $this->db->get_where($this->table, $whereck);
  }

  public function ambil_krs($whereck){
    $this->db->select('*');
		$this->db->from($this->table);
		$this->db->join($this->table2, 'krs.id_matkul = matakuliah.id_matkul');
		$this->db->join($this->table5, 'krs.id_mhs = jumlah_sks.id_mhs and krs.id_thn_akad = jumlah_sks.id_ta_akad');
		$this->db->where($whereck);
		return $this->db->get();
  }

  public function ambil_krs_pdf($where){
    $this->db->select('*');
		$this->db->from($this->table);
		$this->db->join($this->table6, 'krs.id_mhs = mahasiswa.id');
		$this->db->join($this->table4, 'mahasiswa.nama_prodi = prodi.id_prodi');
		$this->db->join($this->table2, 'krs.id_matkul = matakuliah.id_matkul');
		$this->db->join($this->table5, 'krs.id_mhs = jumlah_sks.id_mhs and krs.id_thn_akad = jumlah_sks.id_ta_akad');
		$this->db->join($this->table3, 'krs.id_thn_akad = tahun_akademik.id_thn_akad');
		$this->db->join($this->table7, 'prodi.ketua_prodi = dosen.id_dosen');
		$this->db->where($where);
		return $this->db->get();
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