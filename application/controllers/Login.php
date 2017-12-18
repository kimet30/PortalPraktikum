<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
//Load Induk dari CI, model dan helper
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('text');
	}
	public function index()
	{
		$this->form_validation->set_rules('npm', 'Npm', 'required|min_length[11]|max_length[13]');
		$this->form_validation->set_rules('password', 'Password','required|min_length[8]|max_length[13]');
		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				
				$this->load->view('header-logged-in');
				$this->load->view('home');
			}else
			{
				$this->load->view('header-login');
				$this->load->view('login');
				$this->load->view('footer');

			}
		} 
		else 
		{
			$data = array(
			'npm' => $this->input->post('npm'),
			'password' => md5($this->input->post('password',TRUE))
			);
			$result = $this->m_guest->login($data);
			if ($result == TRUE) 
			{
				$npm = $this->input->post('npm');
				$result = $this->m_guest->read_user_information($npm);
				if ($result != false) 
				{
					$session_data = array(
					'npm' => $result[0]->npm,
					'nama' => $result[0]->nama,
					'logged_in'=>TRUE,
					);
				// Add user data in session
					$this->session->set_userdata( $session_data);
					redirect('Page');
				}else 
				{
					echo 'false';
					$data = array(
					'error_message' => 'Invalid NPM or Password'
					);
					$this->load->view('header-login');
					$this->load->view('login');
					$this->load->view('footer');
				}
			}
			else{
				$this->load->view('header-login');
				$this->load->view('login');
				$this->load->view('footer');
			}
		}
	}
}