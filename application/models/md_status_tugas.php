<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Md_status_tugas extends CI_Model
{
  	public function __construct() {
    	parent::__construct();
  	}

  	function update_tugas($id_tugas,$name,$ext){
  		$npm=$_SESSION['npm'];
  		$start_date=date('Y-m-d');
      	$data = array('status' => 1,'tanggal_kirim'=>$start_date,'file'=>$name,'file_ext'=>$ext);
      	$where = array('npm' =>$npm,'id_tugas'=>$id_tugas);
      	$this->db->where($where);
      	$this->db->update('_mengerjakan_tugas', $data);
   	}
}