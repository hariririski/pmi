<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Darah extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct() {
        parent::__construct();
       $this->load->library('session');
    }
	public function lihat_stok_darah()
	{
		$this->load->view('lihat_stok_darah');
	}
	public function darah_a()
	{
		$this->load->view('darah_a');
	}
	public function darah_b()
	{
		$this->load->view('darah_b');
	}
	public function darah_ab()
	{
		$this->load->view('darah_ab');
	}
	public function darah_o()
	{
		$this->load->view('darah_o');
	}
	public function permintaan_darah()
	{
		$this->load->view('permintaan_darah');
	}
				
	public function tambah_stok()
	{
		$this->load->model('M_lihat_data_ukuran');
		$data['data_ukuran1'] = $this->M_lihat_data_ukuran->get_user_all();
		$this->load->model('M_lihat_data_komponen');
		$data['data_komponen1'] = $this->M_lihat_data_komponen->get_user_all();
		$this->load->model('M_lihat_data_pendonor');
		$data['data_pendonor'] = $this->M_lihat_data_pendonor->get_user_all();
		$this->load->view('tambah_stok', $data);
	}
	function proses_tambah_stok(){ 
			$this->load->model('M_tambah_stok');
			$cek=$this->M_tambah_stok->proses();
			if($cek){
				$data2="<script> alert('Data Berhasil di Input')</script>";
				$this->session->set_flashdata('pesan', $data2);
				redirect('darah/lihat_stok_darah');
			}else{
				$data2="<script> alert('Input Data Gagal')</script>";
				$this->session->set_flashdata('pesan', $data2);
				//$this->tambah_gagal();
				redirect('darah/tambah_stok');
			}

		}
	
}


