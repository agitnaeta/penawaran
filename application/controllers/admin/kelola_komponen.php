<?php
session_start();
	class Kelola_komponen extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) {
				$this->load->model('dataKomponen');
				$this->load->model('dataProduk');
			}
			else
			{
				redirect('login');
			}
		}
		public function index()
		{
			$this->load->view('style');
			$data['produk']=$this->dataProduk->all();
			$data['komponen']=$this->dataKomponen->all();
			$this->load->view('admin/tabel_komponen',$data);
		}
		public function tambah()
		{
			$kode_produk=$this->input->post('kode_produk');
			$data['produk']=$this->dataProduk->one($kode_produk);
			$data['komponen']=$this->dataKomponen->one($kode_produk);
			$this->load->view('style');
			$this->load->view('admin/form_tambah_komponen',$data);
		}
		public function tambah_data()
		{
			$this->dataKomponen->add();
			$this->session->set_flashdata('pesan','Data Berhasil Ditambah!');
			redirect('admin/Kelola_komponen');
		}
		public function form_edit_komponen($id_komponen)
		{
			$data['komponen']=$this->dataKomponen->one($id_komponen);
			$this->load->view('style');
			$this->load->view('admin/form_edit_komponen',$data);
		}
		public function hapus($id_komponen)
		{
			$this->dataKomponen->delete($id_komponen);
			$this->session->set_flashdata('pesan','Data Berhasil Dihapus!');
			redirect('admin/Kelola_komponen');
		}
		public function update_data()
		{
			$this->dataKomponen->update();
			$this->session->set_flashdata('pesan','Data Berhasil Diubah!');
			redirect('admin/Kelola_komponen');
		}
	}