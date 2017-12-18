<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_test extends CI_Model{
	
	//call the model induk 
	function __construct(){
		parent::__construct();
	}
	public function get_mahasiswa($npm){
		$this->db->where('npm',$npm);
		$query=$this->db->get('_mahasiswa');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_mengambil(){
		$query=$this->db->get('_mengambil');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_matakuliah(){
		$query=$this->db->get('_matakuliah');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_absen(){
		$query=$this->db->get('_absen');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_nilai(){
		$query=$this->db->get('_nilai');
		$result['_data']=$query->result_array();
		return $result;
	}
	public function get_semester(){
		$query=$this->db->get('_semester');
		$result['_data']=$query->result_array();
		return $result;	
	}
	public function get_mengerjakan_tugas(){
		$query=$this->db->get('_mengerjakan_tugas');
		$result['_data']=$query->result_array();
		return $result;	
	}
	public function get_assistant(){
		$query=$this->db->get('_assistant');
		$result['_data']=$query->result_array();
		return $result;	
	}
	public function get_tugas(){
		$query=$this->db->get('_tugas');
		$result['_data']=$query->result_array();
		return $result;	
	}
	public function get_matkul(){
		$id_semester=$this->input->post('semester');
		$this->db->where('id_semester',$id_semester);
        $query=$this->db->get('_mengambil');
        $result['_data']=$query->result_array();
		return $result;
	}	
}