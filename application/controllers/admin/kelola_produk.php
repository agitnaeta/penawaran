<?php
	session_start();
	class Kelola_produk extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) {
				$this->load->model('dataProduk');
				$this->load->model('dataKomponen');
			}
			else
			{
				redirect('login');
			}
		}

		public function index()
		{
			$data['produk']=$this->dataProduk->all();
			$this->load->view('style');
			$this->load->view('admin/tabel_produk',$data);
		}
		public function tambah()
		{
			$this->load->view('style');
			$this->load->view('admin/form_tambah_produk');			
		}
		public function tambah_data()
		{
			$this->dataProduk->add();
			$this->session->set_flashdata('pesan','Data Berhasil Di Tambah!');
			redirect('admin/kelola_produk');
		}
		public function form_edit_produk($kode_produk)
		{
			$data['produk']=$this->dataProduk->one($kode_produk);
			$this->load->view('style');
			$this->load->view('admin/form_edit_produk',$data);
		}
		public function update_data()
		{
			$this->dataProduk->update();
			$this->session->set_flashdata('pesan','Data Berhasil Di Update!');
			redirect('admin/kelola_produk');
		}
		public function hapus($kode_produk)
		{
			$this->dataProduk->delete($kode_produk);
			$this->session->set_flashdata('pesan','Data Berhasil Di Hapus!');
			redirect('admin/kelola_produk');
		}
		public function lihat_detail($kode_produk)
		{
			$data['produk']=$this->dataProduk->one($kode_produk);
			$dataProduk=$data['produk'];
			foreach ($dataProduk->result() as $key)
			$data['nama_produk']=$key->nama_produk;
			$data['komponen']=$this->dataKomponen->one_produk($kode_produk);
			$this->load->view('style');
			$this->load->view('admin/detail_produk',$data);
		}
	}
