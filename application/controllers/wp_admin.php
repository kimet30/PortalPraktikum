<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wp_admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('md_wpadmin');
		$this->load->helper('date');

	}
	public function index()
	{
		if(isset($this->session->userdata['logged_admin'])){
			$result=$this->md_wpadmin->get_assistant();
			$data['_assistant']=$result['_data'];

			$result=$this->md_wpadmin->get_mengajar();
			$data['_mengajar']=$result['_data'];

			$result=$this->md_wpadmin->get_matakuliah();
			$data['_matakuliah']=$result['_data'];
			$this->load->view('header-dashboard',$data);
			$this->load->view('dashboard');
			$this->load->view('footer');
		}
		else{
			$this->load->view('header-login');
			$this->load->view('login_admin');
			$this->load->view('footer');	
		}
	}
	public function add_new(){
		$result=$this->md_wpadmin->get_assistant();
		$data['_assistant']=$result['_data'];

		$result=$this->md_wpadmin->get_mengajar();
		$data['_mengajar']=$result['_data'];

		$result=$this->md_wpadmin->get_matakuliah();
		$data['_matakuliah']=$result['_data'];

		$this->load->view('header-dashboard',$data);
		$this->load->view('forms');
		$this->load->view('footer');
	}
	public function all_post(){
		$result=$this->md_wpadmin->get_assistant();
		$data['_assistant']=$result['_data'];

		$result=$this->md_wpadmin->get_mengajar();
		$data['_mengajar']=$result['_data'];

		$result=$this->md_wpadmin->get_tugas();
		$data['_tugas']=$result['_data'];

		$result=$this->md_wpadmin->get_matakuliah();
		$data['_matakuliah']=$result['_data'];

		$this->load->view('header-dashboard',$data);
		$this->load->view('all_post');
		$this->load->view('footer');
	}

	public function login(){
		$this->form_validation->set_rules('id_assistant', 'id_assistant', 'required|min_length[13]|max_length[13]');
		$this->form_validation->set_rules('password', 'Password','required|min_length[8]|max_length[13]');
		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_admin'])){		
				$this->load->view('header-dashboard');
				$this->load->view('dashboard');
				$this->load->view('footer');
			}else{
				$this->load->view('header-login');
				$this->load->view('login');
				$this->load->view('footer');
			}
		} 
		else 
		{
			$data = array(
			'id_assistant' => $this->input->post('id_assistant'),
			'password' => md5($this->input->post('password',TRUE))
			);
			$result = $this->md_wpadmin->login($data);
			if ($result == TRUE) 
			{
				$id_assistant = $this->input->post('id_assistant');
				$result = $this->md_wpadmin->read_user_information($id_assistant);
				if ($result != false) 
				{
					$session_data = array(
					'id_assistant' => $result[0]->id_assistant,
					'nama_assistant' => $result[0]->nama,
					'logged_admin'=>TRUE,
					);
				// Add user data in session
					$this->session->set_userdata( $session_data);
					redirect('wp_admin');
				}else 
				{
					$data = array(
					'error_message' => 'Invalid Id or Password'
					);
					$this->load->view('header-login');
					$this->load->view('login');
					$this->load->view('footer');
				}
			}
		}
	}
	public function edit_tugas(){
		$folder_matkul=$this->input->post('id_matkul');
		$config['upload_path']	="./assets/uploads/mahasiswa/".$folder_matkul."/";
		$config['allowed_types']='zip|pptx|rar|pdf|docx';
		$config['max_size']		=2048000;
		$config['max_width']	=1024;
		$config['max_height']	=768;
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('userfiles')){
			
			//$data1=array('message'=>$this->upload->display_errors());
			//$this->load->view('header-logged-in',$data);
			//$this->load->view('Post',$data1);
			//$this->load->view('footer');
			$data=array(
			'id_assistant'=>$this->session->userdata['id_assistant'],
			'id_matkul'=>$this->input->post('id_matkul'),
			'nama_tugas'=>$this->input->post('nama_tugas'),
			'teks_ket'=>$this->input->post('teks_ket'),
			'kategori'=>$this->input->post('kategori'),
			'id_semester'=>$this->input->post('id_semester'),
			'tanggal_tugas'=>date('Y-m-d H:i:s'),
			'deadline'=>$this->input->post('deadline')
		);
		$result=$this->md_wpadmin->tugas($data);
		$result=$this->md_wpadmin->insert_tugas($data);
		redirect('wp_admin/all_post');	
		}
		else{

			$data = $this->upload->data();
			$data1=array('upload_data'=>$this->upload->data());
			

			$data=array(
			'id_assistant'=>$this->session->userdata['id_assistant'],
			'id_matkul'=>$this->input->post('id_matkul'),
			'nama_tugas'=>$this->input->post('nama_tugas'),
			'teks_ket'=>$this->input->post('teks_ket'),
			'file'=>$data['file_name'],
			'file_ext'=>$data['file_ext'],
			'kategori'=>$this->input->post('kategori'),
			'id_semester'=>$this->input->post('id_semester'),
			'tanggal_tugas'=>date('Y-m-d H:i:s'),
			'deadline'=>$this->input->post('deadline')
		);
		$result=$this->md_wpadmin->tugas($data);
		$result=$this->md_wpadmin->insert_tugas($data);
		redirect('wp_admin/all_post');	
		}

		
	}
	public function mata_kuliah(){
		$id_matkul = $this->uri->segment(3, 0);
		$result=$this->md_wpadmin->get_assistant();
		$data['_assistant']=$result['_data'];

		$result=$this->md_wpadmin->get_mengajar();
		$data['_mengajar']=$result['_data'];

		$result=$this->md_wpadmin->get_matakuliah();
		$data['_matakuliah']=$result['_data'];

		$result=$this->md_wpadmin->get_absen($id_matkul);
		$data['_absen']=$result['_data'];

		$result=$this->md_wpadmin->get_mengambil_with_condition($id_matkul);
		$data['_mengambil']=$result['_data'];

		$result=$this->md_wpadmin->get_mahasiswa();
		$data['_mahasiswa']=$result['_data'];

		$this->load->view('header-dashboard',$data);
		$this->load->view('wp_matkul');
		$this->load->view('footer');
	}
}
