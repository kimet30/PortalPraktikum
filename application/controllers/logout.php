<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
//Load Induk dari CI, model dan helper
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('text');
	}
	public function index()
	{
		$sess_array = array(
		'npm' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		redirect('Page');
	}
	public function admin()
	{
		$sess_array = array(
		'id_assistant' => ''
		);
		$this->session->unset_userdata('logged_admin', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		redirect('wp_admin');
	}
}