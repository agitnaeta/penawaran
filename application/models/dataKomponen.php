<?php
	class DataKomponen extends CI_Model
	{
		public function all()
		{
			$query=$this->db->get('komponen');
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
			$kode_produk=$this->input->post('kode_produk');
			$query=$this->db->query("select max(id_komponen) as max_id from komponen where kode_produk ='$kode_produk'");
			if ($query->num_rows()>0) 
			{
				foreach ($query->result() as $key) 
				if (strlen($key->max_id)<1) 
				{
						$satu=1;
						$max_id="$kode_produk$satu";
				}
				else
				{
					$max_id=$key->max_id + 1;
				}		
				$data=array(
					'kode_produk'=>$this->input->post('kode_produk'),
					'id_komponen'=>$max_id,
					'nama_komponen'=>$this->input->post('nama_komponen'),
					'jumlah'=>$this->input->post('jumlah')
					);
				$this->db->insert('komponen',$data);
			}
			else
			{
				return false;
				echo "Gagal";
			}
		}
		public function one($id_komponen)
		{
			$this->db->where('id_komponen',$id_komponen);
			$query=$this->db->get('komponen');
			if ($query) {
					return $query;
			}
			else
			{
				return null;
			}
		}
		public function one_produk($kode_produk)
		{
			$this->db->where('kode_produk',$kode_produk);
			$query=$this->db->get('komponen');
			if ($query->num_rows()>0) 
			{
					return $query;
			}
			else
			{
				return null;
			}
		}
		public function update()
		{
			$id_komponen=$this->input->post('id_komponen');
			$data=array(
					'kode_produk'=>$this->input->post('kode_produk'),
					'id_komponen'=>$this->input->post('id_komponen'),
					'nama_komponen'=>$this->input->post('nama_komponen'),
					'jumlah'=>$this->input->post('jumlah')
					);
			$this->db->where('id_komponen',$id_komponen);
			$this->db->update('komponen',$data);
		}
		public function delete($id_komponen)
		{
			$this->db->where('id_komponen',$id_komponen);
			$this->db->delete('komponen');
		}
	}