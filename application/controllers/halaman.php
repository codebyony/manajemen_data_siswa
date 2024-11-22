<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Halaman extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk')!=TRUE){
			$this->session->set_flashdata('pesan','Anda Tidak Berhak Masuk Aplikasi');
			redirect('login/swalgagal');
		}
	}


	public function index(){

		$query=$this->db->get('siswa');
		$hasil=$query->num_rows();

		$this->db->where('jk', 'Laki Laki');
		$laaki=$this->db->get('siswa');
		$laki=$laaki->num_rows();

		$this->db->where('jk', 'Perempuan');
		$pr=$this->db->get('siswa');
		$perempuan=$pr->num_rows();

		
		$data['row']= $this->db->get('siswa')->result();
		$data['perempuan']=$perempuan;
		$data['laki']=$laki;
		$data['hasil']=$hasil;
		$data['judul_browser']='Data Siswa | Admin';
		$this->load->view('vmenu', $data);
	}

	public function laki(){

		$query=$this->db->get('siswa');
		$hasil=$query->num_rows();

		$this->db->where('jk', 'Laki Laki');
		$laaki=$this->db->get('siswa');
		$laki=$laaki->num_rows();

		$this->db->where('jk', 'Perempuan');
		$pr=$this->db->get('siswa');
		$perempuan=$pr->num_rows();

		
		$data['row']= $this->db->get('siswa')->result();
		$data['perempuan']=$perempuan;
		$data['laki']=$laki;
		$data['hasil']=$hasil;
		$data['judul_browser']='Data Siswa | Admin';
		$this->load->view('laki', $data);
	}

	public function perempuan(){

		$query=$this->db->get('siswa');
		$hasil=$query->num_rows();

		$this->db->where('jk', 'Laki Laki');
		$laaki=$this->db->get('siswa');
		$laki=$laaki->num_rows();

		$this->db->where('jk', 'Perempuan');
		$pr=$this->db->get('siswa');
		$perempuan=$pr->num_rows();

		
		$data['row']= $this->db->get('siswa')->result();
		$data['perempuan']=$perempuan;
		$data['laki']=$laki;
		$data['hasil']=$hasil;
		$data['judul_browser']='Data Siswa | Admin';
		$this->load->view('perempuan', $data);
	}

	public function chart(){
		$query=$this->db->get('siswa');
		$hasil=$query->num_rows();

		$this->db->where('jk', 'Laki Laki');
		$laaki=$this->db->get('siswa');
		$laki=$laaki->num_rows();

		$this->db->where('jk', 'Perempuan');
		$pr=$this->db->get('siswa');
		$perempuan=$pr->num_rows();

		$aa= $this->db->like('tgl','1991','after')->get('siswa')->num_rows();
		$ab= $this->db->like('tgl','1992','after')->get('siswa')->num_rows();
		$ac= $this->db->like('tgl','1993','after')->get('siswa')->num_rows();
		$ad= $this->db->like('tgl','1994','after')->get('siswa')->num_rows();
		$ae= $this->db->like('tgl','1995','after')->get('siswa')->num_rows();
		$af= $this->db->like('tgl','1996','after')->get('siswa')->num_rows();
		$ag= $this->db->like('tgl','1997','after')->get('siswa')->num_rows();
		$ah= $this->db->like('tgl','1998','after')->get('siswa')->num_rows();

		$this->db->where('kota_asal',1);
		$kota1 = $this->db->get('siswa');
		$kota_asal1 = $kota1->num_rows();

		$this->db->where('kota_asal',2);
		$kota2 = $this->db->get('siswa');
		$kota_asal2 = $kota2->num_rows();

		$this->db->where('kota_asal',3);
		$kota3 = $this->db->get('siswa');
		$kota_asal3 = $kota3->num_rows();

		$this->db->where('kota_asal',4);
		$kota4 = $this->db->get('siswa');
		$kota_asal4 = $kota4->num_rows();

		$this->db->where('kota_asal',5);
		$kota5 = $this->db->get('siswa');
		$kota_asal5 = $kota5->num_rows();

		$this->db->where('kota_asal',6);
		$kota6 = $this->db->get('siswa');
		$kota_asal6 = $kota6->num_rows();

		$this->db->where('kota_asal',7);
		$kota7 = $this->db->get('siswa');
		$kota_asal7 = $kota7->num_rows();

		$this->db->where('kota_asal',8);
		$kota8 = $this->db->get('siswa');
		$kota_asal8 = $kota8->num_rows();

		$this->db->where('kota_asal',9);
		$kota9 = $this->db->get('siswa');
		$kota_asal9 = $kota9->num_rows();

		$this->db->where('kota_asal',10);
		$kota10 = $this->db->get('siswa');
		$kota_asal10 = $kota10->num_rows();


		$data['aa']=$aa;
		$data['ab']=$ab;
		$data['ac']=$ac;
		$data['ad']=$ad;
		$data['ae']=$ae;
		$data['af']=$af;
		$data['ag']=$ag;
		$data['ah']=$ah;
		$data['perempuan']=$perempuan;
		$data['laki']=$laki;
		$data['hasil']=$hasil;
		$data['kota_asal1']=$kota_asal1;
		$data['kota_asal2']=$kota_asal2;
		$data['kota_asal3']=$kota_asal3;
		$data['kota_asal4']=$kota_asal4;
		$data['kota_asal5']=$kota_asal5;
		$data['kota_asal6']=$kota_asal6;
		$data['kota_asal7']=$kota_asal7;
		$data['kota_asal8']=$kota_asal8;
		$data['kota_asal9']=$kota_asal9;
		$data['kota_asal10']=$kota_asal10;

		$data['judul_browser']='Data Siswa | Chart';
		$this->load->view('chart', $data);
	}

	
}