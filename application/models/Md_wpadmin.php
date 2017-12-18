<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_Wpadmin extends CI_Model{
	
	//call the model induk 
	function __construct(){
		parent::__construct();
	}
	
	//insert data to table mahasiswa
	public function tugas($data){
		$result=$this->db->insert('_tugas',$data);
		if(!$result){
			
		}else{
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}	
		}
	}
	public function read_user_information($id_assistant) {

	$condition = "id_assistant =" . "'" . $id_assistant . "'";
	$this->db->select('*');
	$this->db->from('_assistant');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {
		return $query->result();
		} else {
		return false;
		}
	}
	public function insert_tugas($data){
		$query1 = $this->db->get_where('_tugas', array('tanggal_tugas' => $data['tanggal_tugas'],'id_assistant'=>$data['id_assistant']));
		foreach ($query1->result_array() as $key => $tugas) {
			$query = $this->db->get_where('_mengambil', array('id_matkul' => $data['id_matkul'],'id_semester'=>$data['id_semester']));
				foreach ($query->result_array() as $key => $mengambil) {
					$input=array(
						'npm'=>$mengambil['npm'],
						'id_semester'=>$mengambil['id_semester'],
						'id_tugas'=>$tugas['id_tugas'],
						'status'=>0,
					);
					$this->db->insert('_mengerjakan_tugas',$input);
				}
		}
	}
	public function get_mengajar(){
		$query=$this->db->get('_mengajar');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_absen($id_matkul){
		$this->db->where('id_matkul',$id_matkul);
		$query=$this->db->get('_absen');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_assistant(){
		$id_assistant=$this->session->userdata['id_assistant'];
		$this->db->where('id_assistant',$id_assistant);
		$query=$this->db->get('_assistant');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_matakuliah(){
		$query=$this->db->get('_matakuliah');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_mahasiswa(){
		$query=$this->db->get('_mahasiswa');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_mengambil_with_condition($id_matkul){
		$this->db->where('id_matkul',$id_matkul);
		$query=$this->db->get('_mengambil');
		$result['_data']=$query->result_array();
		return $result;
	}

	public function get_semester(){
		$query=$this->db->get('_semester');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_tugas(){
		$query=$this->db->get('_tugas');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function login($data) {
	$condition = "id_assistant =" . "'" . $data['id_assistant'] . "' AND " . "password =" . "'" . $data['password'] . "'";
	$this->db->select('*');
	$this->db->from('_assistant');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	if ($query->num_rows() == 1) {
		return true;
	} else {
		return false;
		}
	}
}