<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Data extends CI_Model{
	
	//call the model induk 
	function __construct(){
		parent::__construct();
	}
	public function get_mahasiswa(){

		$npm=$_SESSION['npm'];
		$condition = "npm= "."'". $npm . "'";
		$this->db->select('*');
		$this->db->from('_mahasiswa');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result_array();
		} else {
			return false;
		}
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
	public function get_semester_forabsen(){
		$id_semester=$this->input->post('semester');
		$this->db->where('id_semester',$id_semester);
		$query=$this->db->get('_semester');
		$result['_data']=$query->result_array();
		return $result;	
	}
	public function get_mengerjakan_tugas(){
		$query=$this->db->get('_mengerjakan_tugas');
		$result['_data']=$query->result_array();
		return $result;	
	}
	public function get_tugas($pencarian){
		if ($pencarian){
      		$this->db->like('nama_tugas',$pencarian);
    	}
    	$this->db->order_by("id_tugas", "desc");
		$query=$this->db->get('_tugas');
		$result['_data']=$query->result_array();
		return $result;	
	}

	public function get_tugas_post($id_tugas){
		
      	$this->db->where('id_tugas',$id_tugas);
		$query=$this->db->get('_tugas');
		$result['_data']=$query->result_array();
		return $result;	
	}

	public function get_ruangan(){
		$query=$this->db->get('_ruangan');
		$result['_data']=$query->result_array();
		return $result;	
	}
	public function get_menempati(){
		$query=$this->db->get('_menempati');
		$result['_data']=$query->result_array();
		return $result;	
	}
	public function get_assistant(){
		$query=$this->db->get('_assistant');
		$result['_data']=$query->result_array();
		return $result;	
	}
	public function get_mengajar(){
		$query=$this->db->get('_mengajar');
		$result['_data']=$query->result_array();
		return $result;	
	}

	public function get_matkul(){
		$npm=$_SESSION['npm'];
		$id_semester=$this->input->post('semester');
		$query = $this->db->get_where('_mengambil', array('npm' => $npm,'id_semester'=>$id_semester));
        $result['_data']=$query->result_array();
		return $result;
	}	
	public function get_mengerjakan_notice(){
		$npm=$_SESSION['npm'];
		$id_semester=$this->input->post('semester');
		$query = $this->db->get_where('_mengerjakan_tugas', array('npm' => $npm,'id_semester'=>$id_semester));
        $result['_data']=$query->result_array();
		return $result;
	}
}