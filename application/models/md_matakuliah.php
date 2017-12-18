<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class md_matakuliah extends CI_Model
{
  public function __construct() {
    parent::__construct();
  }

  function get_data($id_matkul){
      $this->db->where('id_matkul',$id_matkul);
      $query = $this->db->get('mata_kuliah');
      return $query->result_array(); 
   }
}