<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('diskominfo');
	}

    

	public function proseslogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $ceklogin = $this->diskominfo->proseslogin($email,$password);

        if($ceklogin){
            foreach ($ceklogin as $row) {
                 $this->session->set_userdata('id_petugas', $row->id_petugas);
                 $this->session->set_userdata('nama', $row->nama);
                 $this->session->set_userdata('email', $row->email);
                 $this->session->set_userdata('akses_level', $row->akses_level);

                 if($this->session->userdata('akses_level')=="petugas"){
                    redirect('back/index');
                 }
            }
        }else{
            $data['title'] = "LOGIN | Dinas Komunikasi dan Informatika Kota Singkawang";
            $data['pesan'] = "Maaf, Email atau Password anda Salah! Silahkan Coba Lagi";
            $this->load->view('front/login', $data);
            
        }
    }
	
    

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */