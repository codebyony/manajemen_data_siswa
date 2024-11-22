<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index(){
		$data['judul_browser']='Data Siswa | Log in';
		$this->load->view('vlogin',$data);
	}

	public function cek_login(){
		$cek_user = $this->M_user->cek_user();
		$ambil_user = $this->M_user->ambil_user();

		if($cek_user>0){
			$data['judul_browser']='Data Siswa | Admin';
			$this->load->view("swal",$data);
			$this->session->set_userdata('masuk', TRUE);
				$this->session->set_userdata('level','Administrator');
				$this->session->set_userdata('id',$ambil_user->id_user);
				$this->session->set_userdata('nama',$ambil_user->nama);
		}else{
			redirect('halaman');
		}
	}

	public function swalgagal(){
		$data['judul_browser']='Data Siswa | Log in';
		$this->load->view('swalgagal',$data);
	}

	public function tampil_data(){
		$data = $this->M_user->ambil_data();
		echo json_encode($data);

	}

	public function tampil_datalaki(){
		$data = $this->M_user->ambil_laki_1();
		echo json_encode($data);

	}

	public function tampil_dataperempuan(){
		$data = $this->M_user->ambil_pr_2();
		echo json_encode($data);

	}

	public function simpan(){
		$data=$this->M_user->simpan_data();
		echo json_encode($data);
	}

	public function update(){
		$data=$this->M_user->ubah_data();
		echo json_encode($data);
	}

	public function hapus(){
		$data=$this->M_user->hapus_data();
		echo json_encode($data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	public function tampil_laki(){
		$data = $this->M_user->ambil_laki();
		echo json_encode($data);

	}

	public function tampil_pr(){
		$data = $this->M_user->ambil_pr();
		echo json_encode($data);

	}

	public function tampil_semua(){
		$data = $this->M_user->ambil_semua();
		echo json_encode($data);

	}

	public function laki(){
		$data['judul_browser']='Data Siswa | Data Siswa';
		$this->load->view('laki',$data);
	}

	
}