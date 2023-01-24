<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('diskominfo');
	}

	//Dashboard
	public function index()
	{
		$data['title'] = "Dashboard | Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('back/layout/head', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/index');
		$this->load->view('back/layout/footer');	
	}
	// End Dashboard
	

	//Edit Profile
	public function edit_profil()
	{
		$data['title'] = "Edit Profil | Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('back/layout/head3', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/edit_profil');
		$this->load->view('back/layout/footer3');	
	}
	// End Edit Profile

	//Berita
	public function berita()
	{
		$data['title'] = "Data Berita | Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('back/layout/head2', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/berita');
		$this->load->view('back/layout/footer2');
	}

	public function tambah_b()
	{
		$data['title'] = "Tambah Berita | Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('back/layout/head3', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/tambah_b');
		$this->load->view('back/layout/footer3');
	}
	
	// End Berita
	// E-Sakip
	public function esakip()
	{
		$data['title'] = "Data E-Sakip | Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('back/layout/head2', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/esakip');
		$this->load->view('back/layout/footer2');
	}

	public function tambah_e()
	{
		$data['title'] = "Tambah E-Sakip | Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('back/layout/head3', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/tambah_e');
		$this->load->view('back/layout/footer3');
	}
	// End Sakip 
	// Petugas
	public function petugas()
	{
		$data['title'] = "Data Petugas | Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('back/layout/head2', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/petugas');
		$this->load->view('back/layout/footer2');
	}

	public function tambah_p()
	{
		$data['title'] = "Tambah Petugas | Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('back/layout/head3', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/tambah_p');
		$this->load->view('back/layout/footer3');
	}
	// End Petugas
}

/* End of file Back.php */
/* Location: ./application/controllers/Back.php */