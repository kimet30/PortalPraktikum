<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guest extends CI_Model{
	
	//call the model induk 
	function __construct(){
		parent::__construct();
	}
	
	//insert data to table mahasiswa
	function signup($data){
		$result=$this->db->insert('mahasiswa',$data);
		if(!$result){
			
		}else{
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}	
		}
		
	}
	// Read data using username and password
	public function login($data) {
	$condition = "npm =" . "'" . $data['npm'] . "' AND " . "password =" . "'" . $data['password'] . "'";
	$this->db->select('*');
	$this->db->from('_mahasiswa');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	if ($query->num_rows() == 1) {
		return true;
	} else {
		return false;
		}
	}
	
	// Read data from database to show data in admin page
	public function read_user_information($npm) {

	$condition = "npm =" . "'" . $npm . "'";
	$this->db->select('*');
	$this->db->from('_mahasiswa');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {
		return $query->result();
		} else {
		return false;
		}
	}
}