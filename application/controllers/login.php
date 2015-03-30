<?php
	class Login Extends CI_Controller
	{
		function __cosntruct()
		{
			parent::__cosntruct();
			
		}
		function index()
		{
			$this->load->view('style');
			$this->load->view('login');
		}
		function cek_login()
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$cek=$this->dataAdmin->cekLogin($username,$password);
			if ($cek) 
			{
				$dataAdmin=array(
					'username'=>$username,
					'password'=>$password,
					);
				$this->session->set_userdata('admin',$dataAdmin);
				redirect('admin/beranda');
			}
			else
			{
				$this->session->flasdata('pesan','Kombinasi Login Salah!');
			}
		}
		public function logout()
		{
			$this->session->unset_userdata('admin');
			redirect('login');
		}
	}