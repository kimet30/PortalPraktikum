<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('header-dashboard');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
}
