<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('md_wpadmin');
	}

	public function index()
	{
		//ambil mengajar
		$result=$this->m_data->get_mengajar();
		$data['_mengajar']=$result['_data'];

		$this->load->view('header-dashboard');
		$this->load->view('forms');
		$this->load->view('footer');
	}
}
