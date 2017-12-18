<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Md_News extends CI_Model
{
  public function __construct() {
    parent::__construct();
  }
  function list_data($pencarian,$offset,$total){
    $id_semester=$this->input->post('semester');
    if($id_semester==NULL)
    {
      $id_semester=4;
    }
    if ($pencarian){
      $this->db->like('nama_tugas',$pencarian);
    }     
    $result['total_rows'] = $this->db->count_all_results('_tugas');
    if ($pencarian){
      $this->db->like('nama_tugas',$pencarian);
    }
    $this->db->where('id_semester',$id_semester);
    $this->db->order_by("id_tugas", "desc");
    $query = $this->db->get('_tugas',$total,$offset);
    $result['data'] = $query->result_array(); 
    return $result;
   }
   function getProfil(){
      //$sql="SELECT * FORM mahasiswa where npm=?";
      $npm=$_SESSION['npm'];
      $condition = "npm= "."'". $npm . "'";
      //$this->db->query($sql,$condition);
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
}