<?php
session_start();
	class Kelola_pelanggan extends CI_Controller
	{
		public function __cosntruct()		
		{
			parent::__cosntruct();
			if(!empty($this->sesssion->userdata('admin')))
			{
				$this->load->model('dataMember');			
			}
			else
			{
				redirect('login');
			}

		}
		 public function form_tambah()
		{
			$this->load->view('style');
			$this->load->view('admin/form_tambah');
		}
		public function tambah()
		{
			$this->dataMember->add();
			$this->session->set_flashdata('pesan','Data Berhasil Di Tambah!');
			redirect('admin/Kelola_pelanggan/tabel_pelanggan');
		}
		public function form_edit($id_pelanggan)
		{

			$data['member']=$this->dataMember->one($id_pelanggan);
			$this->load->view('style');
			$this->load->view('admin/form_edit',$data);
		}
		public function tabel_pelanggan()
		{
			$data['member']=$this->dataMember->all();
			$this->load->view('style');
			$this->load->view('admin/tabel_pelanggan',$data);
		}
		public function update_data()
		{
			$this->dataMember->update();
			$this->session->set_flashdata('pesan','Data Berhasil Di Update!');
			redirect('admin/Kelola_pelanggan/tabel_pelanggan');
		}
		public function hapus($id_pelanggan)
		{
			$this->dataMember->delete($id_pelanggan);
			$this->session->set_flashdata('pesan','Data Berhasil Di Hapus!');
			redirect('admin/Kelola_pelanggan/tabel_pelanggan');
		}
		public function tambah_nilai($id_pelanggan)
		{
			$data['member']=$this->dataMember->one($id_pelanggan);
			$data['nilai']=$this->dataMember->nilai_lama($id_pelanggan);
			$this->load->view('style');
			$this->load->view('admin/tambah_nilai',$data);
		}
		public function nilai()
		{
			$this->dataMember->plus();
			$this->session->set_flashdata('pesan','Data Berhasil Di Update!');
			redirect('admin/Kelola_pelanggan/tabel_pelanggan');
		}
	}