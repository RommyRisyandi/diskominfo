<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = "Login | Dinas Komunikasi dan Informatika Kota Singkawang";
		$this->load->view('login', $data);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */