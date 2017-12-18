<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('text');
	}

	public function index($offset=0)
	{	
		$id=$this->uri->segment(2);
		$offset = $this->uri->segment(2, 0);
		$data['news']=$this->news_model->read_more($id);
		if (isset($this->session->userdata['logged_in'])) {
			$this->load->view('header-logged-in',$data);
			$this->load->view('Post');
		}else{
			$this->load->view('header',$data);
			$this->load->view('login');
		}	
	}
	
}
