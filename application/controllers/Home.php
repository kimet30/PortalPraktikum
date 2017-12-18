<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
//Load Induk dari CI, model dan helper
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('md_news');
		$this->load->library('pagination');
	}
	public function index($offset=0)
	{
		 $offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3): 0);
	    $config['total_rows'] = $this->md_news->total_count();;
	    $config['per_page']= 2;
	    $config['first_link'] = 'First';
	    $config['last_link'] = 'Last';
	    $config['uri_segment'] = 3;
	    $config['base_url']= base_url().'/Home/index';
	    $config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
	  //  $config['base_url']= base_url();
	    $this->pagination->initialize($config);
	    $this->data['paginglinks'] = $this->pagination->create_links();
	    if($this->data['paginglinks']!= '') {
      		//$this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->pagination->total_rows;
      		//echo 'ok';
    	}
	        // Showing total rows count 
	    $this->data['result'] = $this->md_news->get_News($config["per_page"], $offset);  

	    if (isset($this->session->userdata['logged_in'])) {
			$this->load->view('header-logged-in',$this->data);
			$this->load->view('home');			
		}else{
			$this->load->view('header',$this->data);
			$this->load->view('home');
		}
		$config['base_url']= 'localhost/natasya';		
	}
}