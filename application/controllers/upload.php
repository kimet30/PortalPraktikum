<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('md_status_tugas');
		$this->load->model('md_news');
		$this->load->model('m_data');

	}
	public function index()
	{

	}
	public function do_upload($id)
	{
		$this->db->where('id_tugas',$id);
		$query1=$this->db->get('_tugas');
		$temp="";
		foreach ($query1->result_array() as $key => $tugas_folder) {
			$temp=$tugas_folder['id_matkul'];
		}
		$config['upload_path']	="./assets/uploads/".$temp."/";
		$config['allowed_types']='zip|pptx|rar|pdf|docx';
		$config['max_size']		=2048000;
		$config['max_width']	=1024;
		$config['max_height']	=768;
		//$config['file_name']=$_FILES['userfiles']['name'];
		//$config['file_name']    ="".$id."_".$_SESSION['npm']."";
		//$config['file_ext']    =strtolower(end(explode('.', $config['file_name'])));

		$this->load->library('upload',$config);
		

		$result=$this->m_data->get_assistant();
		$data['_assistant']=$result['_data'];

		$pencarian = $this->input->post('pencarian');
		$result=$this->m_data->get_mengambil();
		$data['_mengambil']=$result['_data'];
		//ambil mata kuliah
		$result=$this->m_data->get_matakuliah();
		$data['_matakuliah']=$result['_data'];
		//mengambil semester
		$result=$this->m_data->get_semester();
		$data['_semester']=$result['_data'];
		//mengambil nilai
		$result=$this->m_data->get_nilai();
		$data['_nilai']=$result['_data'];
		//mengambil absen
		$result=$this->m_data->get_absen();
		$data['_absen']=$result['_data'];
		//mengambil mengerjakan
		$result=$this->m_data->get_mengerjakan_tugas();
		$data['_mengerjakan_tugas']=$result['_data'];
		//mengambil mengerjakan
		$result=$this->m_data->get_tugas($pencarian);
		$data['_tugas']=$result['_data'];

		$data['_mahasiswa']=$this->m_data->get_mahasiswa();
		$id=$this->uri->segment(3);
		$result=$this->m_data->get_tugas_post($id);

		$data['_post']=$result['_data'];
		if(!$this->upload->do_upload('userfiles'))
		{

			$data1=array('message'=>$this->upload->display_errors());
			$this->load->view('header-logged-in',$data);
			$this->load->view('Post',$data1);
			$this->load->view('footer');
		}
		else{
			$data = $this->upload->data();
			$name=$data['file_name'];
			$ext=$data['file_ext'];
			$this->md_status_tugas->update_tugas($id,$name,$ext);
			$data1=array('upload_data'=>$this->upload->data());
			
			$this->load->view('header-logged-in',$data);
			$this->load->view('sukses',$data1);
			$this->load->view('footer');
		}
	}
}
?>