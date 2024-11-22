<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class M_user extends CI_Model{

	public function cek_user(){
		$user = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		$pass = md5(htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES));

		$this->db->where('nama', $user);
		$this->db->where('password', $pass);
		$hasil = $this->db->get('siswa');

		return $hasil->num_rows();
	}

	public function ambil_user(){
		$user = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		$pass = md5(htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES));

		$this->db->where('nama', $user);
		$this->db->where('password', $pass);
		$hasil = $this->db->get('siswa');

		return $hasil->row();
	}

	public function ambil_data(){
		return $this->db->get('siswa')->result();
	}

	public function ambil_datalaki(){
		$this->db->where('jk','Laki Laki');
		return $this->db->get('siswa')->result();
	}

	public function simpan_data(){
		$data['id_user']=uniqid();
		$data['nis']=$this->input->post('nis');
		$data['nama']=$this->input->post('nama');
		$data['tgl']=$this->input->post('tgl');
		$data['jk']=$this->input->post('jk');
		$data['alamat']=$this->input->post('alamat');
		$data['kota_asal']=$this->input->post('kota_asal');
		$data['level']=2;
		$hasil=$this->db->insert('siswa', $data);
		return $hasil;
	}

	public function ubah_data(){
		$id_user=$this->input->post('id_user');

		$data['nis']=$this->input->post('nis');
		$data['nama']=$this->input->post('nama');
		$data['tgl']=$this->input->post('tgl');
		$data['jk']=$this->input->post('jk');
		$data['alamat']=$this->input->post('alamat');
		$data['kota_asal']=$this->input->post('kota_asal');

		$this->db->where('id_user', $id_user);
		$hasil=$this->db->update('siswa', $data);
		return $hasil;
	}

	public function hapus_data(){
		$id_user=$this->input->post('id_user');

		$this->db->where('id_user',$id_user);
		$hasil=$this->db->delete('siswa');
		return $hasil;
	}

	public function ambil_laki(){

		$this->db->where('jk', 'Laki Laki');
		$laaki=$this->db->get('siswa');
		$laki=$laaki->num_rows();
		return $laki;

	}

	public function ambil_laki_1(){

		return $this->db->query('select * from siswa inner join kota on siswa.kota_asal = kota.id where siswa.jk = "Laki Laki"')->result();

	}

	public function ambil_pr_2(){

		return $this->db->query('select * from siswa inner join kota on siswa.kota_asal = kota.id where siswa.jk = "Perempuan"')->result();

	}

	public function ambil_pr(){
	$this->db->where('jk', 'Perempuan');
		$pr=$this->db->get('siswa');
		$perempuan=$pr->num_rows();
		return $perempuan;
	}

	public function ambil_semua(){
		$query=$this->db->get('siswa');
		$hasil=$query->num_rows();
		return $hasil;
	}

}