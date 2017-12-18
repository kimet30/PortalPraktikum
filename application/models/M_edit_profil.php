<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_edit_profil extends CI_Model{
	
	//call the model induk 
	function __construct(){
		parent::__construct();
	}
	
public function update_db_user_info($npm, $imgdata) {
       $imgdata = $imgdata['file_name'];//get the content of the image using its path
       $data = array(
           'password' => md5($this->input->post('password',TRUE)),
           'email' => $this->input->post('email'),
           'noHp' => $this->input->post('noHp'),
           'alamat' => $this->input->post('alamat'),
           'image' => $imgdata,
       );
       $this->db->where('npm', $npm);
       $this->db->update('_mahasiswa', $data);
   } 
}