<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dataProduk');
		$this->load->model('dataKomponen');
		$this->load->model('dataMember');
		$this->load->model('dataHarga');
	}
	public function index()
	{
		$this->load->view('style');
		$this->load->view('welcome_message');
		$data['produk']=$this->dataProduk->all();
		$this->load->view('form_penawaran',$data);
	}
	public function bantuan()
	{
		$this->load->view('style');
		$this->load->view('welcome_message');
	
		$this->load->view('help');
	}
	public function cari()
	{
		$kode_produk=$this->input->post('kode_produk');
		$data=$this->dataProduk->one($kode_produk);
		$dataProduk=$data->result();
		echo json_encode($dataProduk);

	}
	function email()
	{
		$email=$this->input->post('email');
		echo($email);
	}
	function nama_perusahaan()
	{
		
		$nama_perusahaan=$this->input->post('nama_perusahaan');
		echo($nama_perusahaan);
	}
	function nama_pemesan()
	{
		
		$nama_pemesan=$this->input->post('nama_pemesan');
		echo($nama_pemesan);
	}
	function check()
	{
		echo "Yes";
	}
	function no()
	{
		echo "No";
	}
	public function cekEmail()
	{
		$data=$this->dataMember->cekEmail();
		$record=$data->result();
		echo json_encode($record);
	}
	public function print_data()
	{
		$id_pelanggan=$this->input->post('id_pelanggan');
		$produk_lain=$this->input->post('input_produk_lain');
		$email=$this->input->post('email');
		
	
		$dataMember=$this->dataMember->one($id_pelanggan);
		if ($dataMember->result()==null) 
		{

			$this->dataMember->add();
			
		}

		else
		{
		 	$this->dataMember->plus_nilai();
		}
		$kode_produk=$this->input->post('kode_produk');
		$data['produk']=$this->dataProduk->one($kode_produk);
		$data['harga']=$this->dataHarga->harga($kode_produk);
		$data['komponen']=$this->dataKomponen->one_produk($kode_produk);
		$data['member']=$this->dataMember->oneEmail($email);
		$this->load->view('style');
		$this->load->view('penawaran',$data); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */