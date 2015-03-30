<?php
	class DataHarga extends CI_Model
	{
		public function harga($kode_produk)
		{
			$this->db->where('kode_produk',$kode_produk);
			$query=$this->db->get('level_harga');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
	}