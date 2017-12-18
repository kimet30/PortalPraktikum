<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profil extends CI_Controller {
	public function index()
	{
		$this->load->view('header-logged-in');
		$this->load->view('edit');
	}
	public function edit_profil_user(){
		$npm = $this->session->userdata('npm');
		$this->load->model('m_edit_profil');

		$config['upload_path']	='./assets/uploads/';
		$config['allowed_types']='gif|jpg|png|zip|pptx|rar|pdf';
		$config['max_size']		=2048000;
		$config['max_width']	=1024;
		$config['max_height']	=768;

		$this->load->library('upload',$config);
		//$this->upload->do_upload();
		$this->m_edit_profil->update_db_user_info($npm, $this->upload->data());
		redirect('page');
	}
}
