<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller {
	
//Load Induk dari CI, model dan helper
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('md_news');
		$this->load->model('news_model');
		$this->load->library('pagination');
	}
	public function index($offset=0)
	{
		$this->load->helper('url');
		if (isset($this->session->userdata['logged_in'])) {
			$profil['row']=$this->md_news->getProfil();
			$this->load->view('header-logged-in',$profil);
			$this->load->view('mata_kuliah');
		}else{
			$this->load->view('header');
			$this->load->view('mata_kuliah');
		}  
	}
	public function mata_kuliah(){
		$profil['row']=$this->md_news->getProfil();
		$this->load->view('header-logged-in',$profil);
		$this->load->view('mata_kuliah');
	}

}