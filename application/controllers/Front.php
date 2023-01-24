<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('diskominfo');
	}

	public function index()
	{
		$data['title'] = "Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/index');
		$this->load->view('front/layout/footer');
	}

	public function profil()
	{
		$data['title'] = "Profil - Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/profil');
		$this->load->view('front/layout/footer');
	}

	public function berita()
	{
		$data['title'] = "Berita - Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/berita');
		$this->load->view('front/layout/footer');
	}

	public function bidang()
	{
		$data['title'] = "Bidang - Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/bidang');
		$this->load->view('front/layout/footer');
	}

	public function siaran_pers()
	{
		$data['title'] = "Siaran Pers - Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/siaran_pers');
		$this->load->view('front/layout/footer');
	}

	public function infografis()
	{
		$data['title'] = "Infografis - Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/infografis');
		$this->load->view('front/layout/footer');
	}

	public function kontak()
	{
		$data['title'] = "Kontak - Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/kontak');
		$this->load->view('front/layout/footer');
	}

	public function esakip()
	{
		$data['title'] = "E-Sakip - Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/esakip');
		$this->load->view('front/layout/footer');
	}

}

/* End of file front.php */
/* Location: ./application/controllers/front.php */