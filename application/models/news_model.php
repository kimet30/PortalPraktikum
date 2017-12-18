<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_news()
	{
		$query=$this->db->get('news');
		if($query->num_rows()>0){
			return $query->result_array();


		}else{
			return array();
		}

	}
	public function read_more($id){
		$this->db->where('id_tugas',$id);
		$query=$this->db->get('_tugas');
		if($query->num_rows()==1)
		{
			return $query->result_array();
		}else{
			echo 'ngaco';
		}
	}
}