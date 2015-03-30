<?php
session_start();
	class Beranda extends CI_COntroller
	{
		public function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->model('dataAdmin');
				$this->load->model('dataMember');
			}
			else
			{
				redirect('login');
			}
		}
		public function index()
		{
			$dataAdmin=$this->session->userdata('admin');
			$data['nama']=$dataAdmin['username'];
			$data['member']=$this->dataMember->all();
			$this->load->view('style');
			$this->load->view('admin/beranda',$data);
		}
	}