<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Produk extends CI_Controller {

	public function index()
	{$this->load->helper('url');
  $this->load->library('pagination');//1
  $this->load->database();//memanggil pengaturan database dan mengaktifkannya
        $this->load->model('m_data_produk');//memanggil model m_data_produk
         
  $pencarian = $this->input->post('pencarian');
  $offset = $this->uri->segment(2, 0);
  $total = 5;
  $result = $this->m_data_produk->list_data($pencarian,$offset,$total);
  $config['uri_segment'] = 2;
  $config['base_url'] = site_url('data_produk');
  $config['per_page'] = $total;
  $config['total_rows'] = $result['total_rows'];
  $this->pagination->initialize($config); 
  $data['pagination'] =  $this->pagination->create_links();
  $data['data_produk'] = $result['data'];
   
  $this->load->view('v_data_produk',$data);
	}
}
