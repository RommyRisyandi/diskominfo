<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('diskominfo');
		$this->load->library('session');
		
		if($this->session->userdata('akses_level')!="petugas") {
			redirect('front/login', 'refresh');
		}
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
	public function edit_profil($id_petugas)
	{

		$data['title'] = "Ubah Profil | Dinas Komunikasi dan Informatika Kota Singkawang";
		$data['r'] = $this->diskominfo->select('petugas', array('id_petugas' => $id_petugas))->row();
		$this->data['diskominfo'] = $this->db->get('berita')->result_array();
		$this->load->view('back/layout/head3', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/edit_profil');
		$this->load->view('back/layout/footer3');	
	}

	public function aedit_profil()
	{
		$config['upload_path'] 		= './assets/upload/foto/';
      	$config['allowed_types'] 	= 'gif|jpg|png|';
      	$config['max_size']  		= '2400';// dalam KB
      	$config['max_width']  		= '8000';
      	$config['max_height']  		= '8000';
      
      	$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload()){
      	$this->session->set_flashdata('gagal', 'Mohon Maaf Upload Foto Gagal, Silahkan Coba Lagi!(Max:2mb)');
		redirect('back/edit_profil','refresh');
		

		}else{
		$gambar = array('upload_data' => $this->upload->data());
		// Create Thumbnail Gambar
		$config['image_library'] = 'gd2';
		$config['source_image'] = './assets/upload/foto/'.$gambar['upload_data']['file_name'];
		// Lokasi Folder Thumbnail
		$config['new_image'] = './assets/upload/foto/thumbs/'; 
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 250; //pixel
		$config['height'] = 250; //pixel
		$config['thumb_marker'] ='';

	   $this->load->library('image_lib', $config);

	   $id_petugas = array('id_petugas' => $this->input->post('id_petugasa'));
	   $data = array('nama'            	=> $this->input->post('nama'),
	   				 'email'            => $this->input->post('email'),
	   				 'username'         => $this->input->post('username'),
	   				 'password'         => $this->input->post('password'),
	   				 'akses_level'      => $this->input->post('akses_level'),
	   				 'gambar'       	=> $gambar['upload_data']['file_name']);
      
      $query = $this->diskominfo->insert('petugas', $data);
      $this->session->set_flashdata('sukses', 'Upload Petugas Berhasil!');
      redirect('back/edit_profil', 'refresh');
		
		}
	}

	// End Edit Profile

	//Berita
	public function berita()
	{
		$data['title'] = "Data Berita | Dinas Komunikasi dan Informatika Kota Singkawang";
		$data['berita'] = $this->diskominfo->get_petugas_query();
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
	
	public function atambah_b()
	{
		$config['upload_path'] 		= './assets/upload/gambar/';
      	$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
      	$config['max_size']  		= '2400';// dalam KB
      	$config['max_width']  		= '8000';
      	$config['max_height']  		= '8000';
      
      	$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload()){
      	$this->session->set_flashdata('gagal', 'Mohon Maaf Upload Gambar Gagal, Silahkan Coba Lagi!(Max:2mb)');
		$data['title'] = "Tambah Berita | Dinas Komunikasi dan Informatika Kota Singkawang";
		redirect('back/tambah_b', $data);
		

		}else{
		$gambar = array('upload_data' => $this->upload->data());
		// Create Thumbnail Gambar
		$config['image_library'] = 'gd2';
		$config['source_image'] = './assets/upload/gambar/'.$gambar['upload_data']['file_name'];
		// Lokasi Folder Thumbnail
		$config['new_image'] = './assets/upload/gambar/thumbs/'; 
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 250; //pixel
		$config['height'] = 250; //pixel
		$config['thumb_marker'] ='';

	   $this->load->library('image_lib', $config);

	   $this->image_lib->resize();
	   
	   $data = array(
		'id_petugas'	=> $this->session->userdata('id_petugas'),
		'judul'      	=> $this->input->post('judul'),
		'jenis'    		=> $this->input->post('jenis'),
		'isi'        	=> $this->input->post('isi'),
		'gambar'       	=> $gambar['upload_data']['file_name']);
		$query = $this->diskominfo->insert('berita', $data);
		$this->session->set_flashdata('sukses', 'Berita Berhasil ditambah!');
		redirect('back/berita','refresh');
		
		}

	}
	
	public function edit_b($id_berita)
	{
		$data['title'] = "Ubah Berita | Dinas Komunikasi dan Informatika Kota Singkawang";
		$data['r'] = $this->diskominfo->select('berita', array('id_berita' => $id_berita))->row();
		$this->data['diskominfo'] = $this->db->get('berita')->result_array();
		$this->load->view('back/layout/head3', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/edit_b');
		$this->load->view('back/layout/footer3');
	}

	public function aedit_b()
	{
		$config['upload_path'] 		= './assets/upload/gambar/';
      	$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
      	$config['max_size']  		= '2400';// dalam KB
      	$config['max_width']  		= '8000';
      	$config['max_height']  		= '8000';
      
      	$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload()){
      	$this->session->set_flashdata('gagal', 'Mohon Maaf Upload Gambar Gagal, Silahkan Coba Lagi!(Max:2mb)');
		$data['r'] = $this->diskominfo->select('berita', array('id_berita' => $id_berita))->row();
		$this->data['diskominfo'] = $this->db->get('berita')->result_array();
		redirect('back/edit_b','refresh', $data);

		}else{
		$gambar = array('upload_data' => $this->upload->data());
		// Create Thumbnail Gambar
		$config['image_library'] = 'gd2';
		$config['source_image'] = './assets/upload/gambar/'.$gambar['upload_data']['file_name'];
		// Lokasi Folder Thumbnail
		$config['new_image'] = './assets/upload/gambar/thumbs/'; 
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 250; //pixel
		$config['height'] = 250; //pixel
		$config['thumb_marker'] ='';

	   $this->load->library('image_lib', $config);

	   $this->image_lib->resize();
	   $id_berita = array('id_berita' => $this->input->post('id_beritaa'));
	   $data = array(
		'id_petugas'	=> $this->input->post('id_petugas'),
		'judul'      	=> $this->input->post('judul'),
		'jenis'    		=> $this->input->post('jenis'),
		'isi'        	=> $this->input->post('isi'),
		'gambar'       	=> $gambar['upload_data']['file_name']);
		$query = $this->diskominfo->update('berita', $data, $id_berita);
		$this->session->set_flashdata('sukses', 'Berita Berhasil diubah!');
		redirect('back/berita','refresh');
		
		}
		
	}
	
	public function hapus_b($id_berita)
	{
		$data = array('id_berita' => $id_berita);
		$query = $this->diskominfo->delete('berita', $data);
		$this->session->set_flashdata('sukses', 'Hapus Berita Berhasil!');
		redirect('back/berita', 'refresh');
	}
	// End Berita
	
	
	
	
	// E-Sakip
	public function esakip()
	{
		$data['title'] = "Data E-Sakip | Dinas Komunikasi dan Informatika Kota Singkawang";
		$data['esakip'] = $this->diskominfo->selectAll('esakip')->result_object();
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
	
	public function atambah_e()
	{
		$config['upload_path'] 		= './assets/upload/file/';
      	$config['allowed_types'] 	= 'pdf|jpg|png|jpeg';
      	$config['max_size']  		= '3400';// dalam KB
      
      	$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload()){
      	$this->session->set_flashdata('gagal', 'Mohon Maaf Upload File Gagal, Silahkan Coba Lagi!(Max: 3mb, bentuk file: pdf,jpeg,jpg,png)');
		$data['title'] = "Tambah E-Sakip | Dinas Komunikasi dan Informatika Kota Singkawang";
		redirect('back/tambah_e', $data);
		

		}else{
		$doc = $this->upload->data();
		$file = $doc['file_name'];

	   $data = array('judul'            => $this->input->post('judul'), 
	   				 'file'       		=> $file);
      
      $query = $this->diskominfo->insert('esakip', $data);
      $this->session->set_flashdata('sukses', 'Upload Data E-Sakip Berhasil!');
      redirect('back/esakip', 'refresh');
		
		}
	}

	public function edit_e($id_esakip)
	{
		$data['title'] = "Ubah E-Sakip | Dinas Komunikasi dan Informatika Kota Singkawang";
		$data['r'] = $this->diskominfo->select('esakip', array('id_esakip' => $id_esakip))->row();
   		$this->data['esakip'] = $this->db->get('esakip')->result_array();
		$this->load->view('back/layout/head3', $data);
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/nav');
		$this->load->view('back/edit_e');
		$this->load->view('back/layout/footer3');
	}

	public function aedit_e()
	{
		$config['upload_path'] 		= './assets/upload/file/';
      	$config['allowed_types'] 	= 'gif|jpg|png|pdf';
      	$config['max_size']  		= '3400';// dalam KB
      	
      
      	$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload()){
      	$this->session->set_flashdata('gagal', 'Mohon Maaf Upload File Gagal, Silahkan Coba Lagi!(Max:3mb)');
		$data['title'] = "Ubah E-Sakip | Dinas Komunikasi dan Informatika Kota Singkawang";
		redirect('back/edit_e', $data);
	
		}else{
		$doc = $this->upload->data();
		$file = $doc['file_name'];

	   
	   $id_esakip = array('id_esakip' 	=> $this->input->post('id_esakipa'));
	   $data = array('judul'            => $this->input->post('judul'), 
	   				 'file'       		=> $file);
      
      $query = $this->diskominfo->update('esakip', $data, $id_esakip);
      $this->session->set_flashdata('sukses', 'Ubah Data E-Sakip Berhasil!');
      redirect('back/esakip', 'refresh');
		}
	}

	public function hapus_e($id_esakip)
	{
		$data = array('id_esakip' => $id_esakip);
		$query = $this->diskominfo->delete('esakip', $data);
		$this->session->set_flashdata('sukses', 'Hapus Data E-Sakip Berhasil!');
		redirect('back/esakip', 'refresh');
	}

	// End Sakip 
	
	
	
	
	// Petugas
	public function petugas()
	{
		$data['title'] = "Data Petugas | Dinas Komunikasi dan Informatika Kota Singkawang";
		$data['petugas'] = $this->diskominfo->selectAll('petugas')->result_object();
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

	public function atambah_p()
	{
		$config['upload_path'] 		= './assets/upload/foto/';
      	$config['allowed_types'] 	= 'gif|jpg|png|';
      	$config['max_size']  		= '2400';// dalam KB
      	$config['max_width']  		= '8000';
      	$config['max_height']  		= '8000';
      
      	$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload()){
      	$this->session->set_flashdata('gagal', 'Mohon Maaf Upload Foto Gagal, Silahkan Coba Lagi!(Max:2mb)');
		$data['title'] = "Tambah Petugas | Dinas Komunikasi dan Informatika Kota Singkawang";
		redirect('back/tambah_p', $data);
		

		}else{
		$gambar = array('upload_data' => $this->upload->data());
		// Create Thumbnail Gambar
		$config['image_library'] = 'gd2';
		$config['source_image'] = './assets/upload/foto/'.$gambar['upload_data']['file_name'];
		// Lokasi Folder Thumbnail
		$config['new_image'] = './assets/upload/foto/thumbs/'; 
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 250; //pixel
		$config['height'] = 250; //pixel
		$config['thumb_marker'] ='';

	   $this->load->library('image_lib', $config);

	   $data = array('nama'            	=> $this->input->post('nama'),
	   				 'email'            => $this->input->post('email'),
	   				 'username'         => $this->input->post('username'),
	   				 'password'         => SHA1($this->input->post('password')),
	   				 'akses_level'      => $this->input->post('akses_level'),
	   				 'gambar'       	=> $gambar['upload_data']['file_name']);
      
      $query = $this->diskominfo->insert('petugas', $data);
      $this->session->set_flashdata('sukses', 'Upload Petugas Berhasil!');
      redirect('back/petugas', 'refresh');
		
		}
	}

	
	
	public function logout()
	{
		$this->session->set_userdata('email', FALSE);
		$this->session->sess_destroy();
		redirect('front/login');
	}

	// End Petugas
}

/* End of file Back.php */
/* Location: ./application/controllers/Back.php */