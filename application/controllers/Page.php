<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	
//Load Induk dari CI, model dan helper
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('md_news');
		$this->load->model('md_matakuliah');
		$this->load->model('news_model');
		$this->load->model('m_data');
		$this->load->library('pagination');
		$this->load->library('calendar');
		$this->load->helper('download');
	}
	public function index($offset=0)
	{
		$this->load->helper('url');
  		//$this->load->library('pagination');//1
        //$this->load->model('md_news');//
		/*$pencarian = $this->input->post('pencarian');
		$offset = $this->uri->segment(2, 0);
		$total = 1000;
		$result = $this->md_news->list_data($pencarian,$offset,$total);
		$config['uri_segment'] = 3;
		$config['base_url'] = site_url('page');
		$config['per_page'] = $total;
		$config['total_rows'] = $result['total_rows'];
		$this->pagination->initialize($config); 
		$data['_pagination'] =  $this->pagination->create_links();
		$data['_result'] = $result['data'];*/


		$pencarian = $this->input->post('pencarian');
		if (isset($this->session->userdata['logged_in'])) {
			//menempati
			$result=$this->m_data->get_menempati();
			$data['_menempati']=$result['_data'];
			//ambil mengambil
			$result=$this->m_data->get_mengambil();
			$data['_mengambil']=$result['_data'];
			//ambil mata kuliah
			$result=$this->m_data->get_matakuliah();
			$data['_matakuliah']=$result['_data'];
			//mengambil semester
			$result=$this->m_data->get_semester();
			$data['_semester']=$result['_data'];
			//mengambil nilai
			$result=$this->m_data->get_nilai();
			$data['_nilai']=$result['_data'];
			//mengambil absen
			$result=$this->m_data->get_absen();
			$data['_absen']=$result['_data'];
			//mengambil mengerjakan
			$result=$this->m_data->get_mengerjakan_tugas();
			$data['_mengerjakan_tugas']=$result['_data'];
			//mengambil mengerjakan
			$result=$this->m_data->get_tugas($pencarian);
			$data['_tugas']=$result['_data'];
			//ambil ruangan
			$result=$this->m_data->get_ruangan();
			$data['_ruangan']=$result['_data'];
			//ambil assistant
			$result=$this->m_data->get_assistant();
			$data['_assistant']=$result['_data'];
			//ambil menagjar
			$result=$this->m_data->get_mengajar();
			$data['_mengajar']=$result['_data'];

			$data['_mahasiswa']=$this->m_data->get_mahasiswa();
			$this->load->view('header-logged-in',$data);
			$this->load->view('mata_kuliah');
			$this->load->view('footer');
		}else{
			//ambil assistant
			$result=$this->m_data->get_assistant();
			$data['_assistant']=$result['_data'];
			
			$result=$this->m_data->get_tugas($pencarian);
			$data['_tugas']=$result['_data'];

			$this->load->view('header',$data);
			$this->load->view('home');
			$this->load->view('footer');
		}  
	}
	public function Logout()
	{
		$sess_array = array(
		'npm' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		redirect('Page');
	}
	public function Post()
	{	//ambil mengambil
		$pencarian = $this->input->post('pencarian');
			$result=$this->m_data->get_mengambil();
			$data['_mengambil']=$result['_data'];
			//ambil mata kuliah
			$result=$this->m_data->get_matakuliah();
			$data['_matakuliah']=$result['_data'];
			//mengambil semester
			$result=$this->m_data->get_semester();
			$data['_semester']=$result['_data'];
			//mengambil nilai
			$result=$this->m_data->get_nilai();
			$data['_nilai']=$result['_data'];
			//mengambil absen
			$result=$this->m_data->get_absen();
			$data['_absen']=$result['_data'];
			//mengambil mengerjakan
			$result=$this->m_data->get_mengerjakan_tugas();
			$data['_mengerjakan_tugas']=$result['_data'];
			//mengambil mengerjakan
			$result=$this->m_data->get_tugas($pencarian);
			$data['_tugas']=$result['_data'];

			$data['_mahasiswa']=$this->m_data->get_mahasiswa();

			//mengambil mengerjakan
			$result=$this->m_data->get_assistant();
			$data['_assistant']=$result['_data'];

			$id_tugas=$this->uri->segment(3);
			$result=$this->m_data->get_tugas_post($id_tugas);
			$data['_post']=$result['_data'];
			
			//$this->load->model('md_news');
			//$data['_mahasiswa']=$this->m_data->get_mahasiswa();
			$id_tugas=$this->uri->segment(3);
			//$data['news']=$this->news_model->read_more($id);
			if (isset($this->session->userdata['logged_in'])) {
				force_download('./assets/uploads/D10K-4003/6_140810140016.zip',NULL);
				$this->load->view('header-logged-in',$data);
				$this->load->view('Post');
				$this->load->view('footer');

			}else{
				$this->load->view('header-login');
				$this->load->view('login');
				$this->load->view('footer');
			}
	}
	public function mata_kuliah(){
		$id_matkul=$this->uri->segment(3);
		$data['matkul']=$this->md_matakuliah->get_data($id_matkul);
		$data['row']=$this->md_news->getProfil();
		$this->load->view('header-logged-in',$data);
		$this->load->view('mata_kuliah');
		$this->load->view('footer');
	}
	public function us(){
		if (isset($this->session->userdata['logged_in'])) {
			$this->load->view('headerguest');
			$this->load->view('contact_us');
			$this->load->view('footer');
		}else{
			$this->load->view('headerguest');
			$this->load->view('contact_us');
			$this->load->view('footer');
		}
	}
    
    public function about(){
		if (isset($this->session->userdata['logged_in'])) {
			$this->load->view('headerguest');
			$this->load->view('tentang');
			$this->load->view('footer');
		}else{
			$this->load->view('headerguest');
			$this->load->view('tentang');
			$this->load->view('footer');
		}
        
   
	}

    
     public function pengajar(){
		if (isset($this->session->userdata['logged_in'])) {
			$this->load->view('headerguest');
			$this->load->view('asisten');
			$this->load->view('footer');
		}else{
			$this->load->view('headerguest');
			$this->load->view('asisten');
			$this->load->view('footer');
		}
        
   
	}
     public function laboran(){
		if (isset($this->session->userdata['logged_in'])) {
			$this->load->view('headerguest');
			$this->load->view('labo');
			$this->load->view('footer');
		}else{
			$this->load->view('headerguest');
			$this->load->view('labo');
			$this->load->view('footer');
		}
     }
    

	public function tugas(){
		$result=$this->m_data->get_tugas();
		$data['_tugas']=$result['_data'];
	}
	public function download(){
		$id_tugas = $this->uri->segment(3);
		$this->db->where('id_tugas',$id_tugas);
		$query=$this->db->get('_mengerjakan_tugas');
		$folder='';
		$file='';
		foreach ($query->result_array() as $key => $mengerjakan) {
			if($mengerjakan['npm']==$_SESSION['npm']){
				$this->db->where('id_tugas',$id_tugas);
				$query2=$this->db->get('_tugas');
				foreach ($query2->result_array() as $key => $tugas) {
					$folder =$tugas['id_matkul'];
					$file =$mengerjakan['file'];
				}
			}
		}
		force_download('./assets/uploads/'.$folder.'/'.$file,NULL);
	}

	public function get_matakuliah(){
		/*$result=$this->m_data->get_mengambil();
		$data['_mengambil']=$result['_data'];
		//ambil mata kuliah
		$result=$this->m_data->get_matakuliah();
		$data['_matakuliah']=$result['_data'];
		//mengambil semester
		
		//mengambil nilai
		$result=$this->m_data->get_nilai();
		$data['_nilai']=$result['_data'];
		//mengambil absen
		$result=$this->m_data->get_absen();
		$data['_absen']=$result['_data'];
		//mengambil mengerjakan
		$result=$this->m_data->get_mengerjakan_tugas();
		$data['_mengerjakan_tugas']=$result['_data'];
		//mengambil mengerjakan
		$result=$this->m_data->get_tugas();
		$data['_tugas']=$result['_data'];*/
		$pencarian = $this->input->post('pencarian');
		$offset = $this->uri->segment(2, 0);
		$total = 3;
		$result = $this->md_news->list_data($pencarian,$offset,$total);
		$config['uri_segment'] = 3;
		$config['base_url'] = site_url('page');
		$config['per_page'] = $total;
		$config['total_rows'] = $result['total_rows'];
		$this->pagination->initialize($config); 
		$data['_pagination'] =  $this->pagination->create_links();
		$data['_result'] = $result['data'];	

		

		$data['_mahasiswa']=$this->m_data->get_mahasiswa();
		$data['param']=$this->input->post('semester');
		$this->load->model("m_data");		
		$result=$this->m_data->get_matkul();
		$data['_mengambil']=$result['_data'];
		$result=$this->m_data->get_matakuliah();
		$data['_matakuliah']=$result['_data'];
		$result=$this->m_data->get_semester();
		$data['_semester']=$result['_data'];
		$result=$this->m_data->get_mengerjakan_notice();
		$data['_mengerjakan_tugas']=$result['_data'];
		$result=$this->m_data->get_tugas($pencarian);
		$data['_tugas']=$result['_data'];
		//mengambil absen
		$result=$this->m_data->get_absen();
		$data['_absen']=$result['_data'];
		//for absen semester
		$result=$this->m_data->get_semester_forabsen();
		$data['_semesterf']=$result['_data'];
		//mengambil nilai
		$result=$this->m_data->get_nilai();
		$data['_nilai']=$result['_data'];
		//menempati
		$result=$this->m_data->get_menempati();
		$data['_menempati']=$result['_data'];
		//ambil ruangan
		$result=$this->m_data->get_ruangan();
		$data['_ruangan']=$result['_data'];
		//ambil assistant
		$result=$this->m_data->get_assistant();
		$data['_assistant']=$result['_data'];
		//ambil menagjar
		$result=$this->m_data->get_mengajar();
		$data['_mengajar']=$result['_data'];

        $this->load->view('hasil',$data);

	}

}