<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function index()
	{
		echo "test";
	}
	public function panggil(){

	}
	public function data_profil(){
		$npm="140810140016";
		$this->load->model("m_test");
		//ambil mahasiswa
		$result=$this->m_test->get_mahasiswa($npm);
		$query['_mahasiswa']=$result['_data'];
		//ambil mengambil
		$result=$this->m_test->get_mengambil();
		$query['_mengambil']=$result['_data'];
		//ambil mata kuliah
		$result=$this->m_test->get_matakuliah();
		$query['_matakuliah']=$result['_data'];
		//mengambil semester
		$result=$this->m_test->get_semester();
		$query['_semester']=$result['_data'];
		//mengambil nilai
		$result=$this->m_test->get_nilai();
		$query['_nilai']=$result['_data'];
		//mengambil absen
		$result=$this->m_test->get_absen();
		$query['_absen']=$result['_data'];
		//mengambil mengerjakan
		$result=$this->m_test->get_mengerjakan_tugas();
		$query['_mengerjakan_tugas']=$result['_data'];
		//mengambil mengerjakan
		$result=$this->m_test->get_tugas();
		$query['_tugas']=$result['_data'];
		$this->load->view('welcome_message',$query);
	}
	public function get_matakuliah(){
		$this->load->model("m_test");		
		$result=$this->m_test->get_matkul();
		$query['_mengambil']=$result['_data'];
        $this->load->view('hasil',$query);
			
		//echo $id_matkul;
	}
}
