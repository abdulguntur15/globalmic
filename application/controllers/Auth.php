<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->API="http:api.globalmic.co.id/public/daftar-mitra";
		$this->load->library('form_validation');
	}

	public function index()
	{
		
		$data ['title'] = 'Halaman Login';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}

	public function register()
	{
		$this->form_validation->set_rules('no_hp', 'Phone Number', 'required|trim', 'numeric');
		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('pass1', 'Password', 'required|trim|min_length[3]|matches[pass2]');
		$this->form_validation->set_rules('pass2', 'Password', 'required|trim|matches[pass1]');
		$this->form_validation->set_rules('upline', 'Upline', 'required');



		if( $this->form_validation->run() == false) {
			$data ['title'] = 'Pendaftaran Mitra Baru';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/register');
			$this->load->view('templates/auth_footer');
		} else {
			$data = array(
				'no_hp' => $this->input->post('no_hp'),
				'nama'  => $this->input->post('nama'),
				'pass'  => password_hash ($this->input->post('pass'), PASSWORD_DEFAULT),
				'upline'=> $this->input->post('upline')

				);

				$insert = $this->curl->simple_post('register', $data);
				$this->session->set_flashdata('message', '<div class="allert alert-success" role="alert">Selamat! Kamu telah terdaftar</div>');
				redirect('auth');
		}
	}
}