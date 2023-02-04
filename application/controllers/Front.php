<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('text');
		$this->load->model('diskominfo');
	}

	public function index()
	{
		$data['title'] = "Dinas Komunikasi dan Informatika Kota Singkawang";
		$data['berita'] = $this->diskominfo->get_petugas_query();
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/index');
		$this->load->view('front/layout/footer');
	}

	public function login()
	{
		$data['title'] = "LOGIN | Sistem Informasi Manajemen Donor Darah";
		$this->load->view('front/login', $data);
		
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
		$data['berita'] = $this->diskominfo->get_petugas_query();
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/berita');
		$this->load->view('front/layout/footer');
	}
	public function detail($id_berita)
	{
		$data['title'] = "Detail Berita - Dinas Komunikasi dan Informatika Kota Singkawang";
		$data['r'] = $this->diskominfo->select('berita', array('id_berita' => $id_berita))->row();
		$data['berita'] = $this->diskominfo->get_petugas_query();
		$this->data['diskominfo'] = $this->db->get('berita')->result_array();
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/detail');
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
		$data['berita'] = $this->diskominfo->get_by_siaran();
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/siaran_pers');
		$this->load->view('front/layout/footer');
	}

	public function infografis()
	{
		$data['title'] = "Infografis - Dinas Komunikasi dan Informatika Kota Singkawang";
		$data['berita'] = $this->diskominfo->get_by_infografis();
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
		$data['esakip'] = $this->diskominfo->get_by_esakip();
		$this->load->view('front/layout/head', $data);
		$this->load->view('front/layout/nav');
		$this->load->view('front/esakip');
		$this->load->view('front/layout/footer');
	}

	public function download($id_esakip)
	{
		$data = array('id_esakip'=>$id_esakip);
		$this->load->helper('download');
		$fileInfo = $this->diskominfo->download($id_esakip);
		$r = 'assets/upload/file/'.$fileInfo['file'];
		force_download($r, NULL);
		
	}

}

/* End of file front.php */
/* Location: ./application/controllers/front.php */