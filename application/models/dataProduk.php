<?php
	class DataProduk extends CI_Model
	{
		public function all()
		{
			$query=$this->db->get('produk');
			if ($query) {
					return $query;
			}
			else
			{
				return null;
			}
		}
		public function add()
		{
			$data=array(
				'kode_produk'=>$this->input->post('kode_produk'),
				'nama_produk'=>$this->input->post('nama_produk'),
				);
			$this->db->insert('produk',$data);
		}
		public function one($kode_produk)
		{
			$this->db->where('kode_produk',$kode_produk);
			$query=$this->db->get('produk');
			if ($query) {
					return $query;
			}
			else
			{
				return null;
			}
		}
		public function update()
		{
			$data=array(
				'kode_produk'=>$this->input->post('kode_produk'),
				'nama_produk'=>$this->input->post('nama_produk'),
				);
			$kode_produk=$this->input->post('kode_produk');
			$this->db->where('kode_produk',$kode_produk);
			$this->db->update('produk',$data);
		}
		public function delete($kode_produk)
		{
			$this->db->where('kode_produk',$kode_produk);
			$this->db->delete('produk');
		}
	}