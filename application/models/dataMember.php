<?php 
	class DataMember extends CI_Model
	{
		public function all()
		{
			$query=$this->db->get('pelanggan');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}

		public function one($id_pelanggan)
		{
			$this->db->where('id_pelanggan',$id_pelanggan);
			$query=$this->db->get('pelanggan');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function oneEmail($email)
		{
			$this->db->where('email',$email);
			$query=$this->db->get('pelanggan');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function update()
		{
			$id=$this->input->post('id_pelanggan');
			$data=array(
				'id_pelanggan'=>$this->input->post('id_pelanggan'),
				'nama_perusahaan'=>$this->input->post('nama_perusahaan'),
				'nama_pemesan'=>$this->input->post('nama_pemesan'),
				'email'=>$this->input->post('email')
			);
			$this->db->where('id_pelanggan',$id);
			$query=$this->db->update('pelanggan',$data);
		
		}
		public function add()
		{
				$data=array(
				'nama_perusahaan'=>$this->input->post('nama_perusahaan'),
				'nama_pemesan'=>$this->input->post('nama_pemesan'),
				'email'=>$this->input->post('email')
				);
				
				$query=$this->db->insert('pelanggan',$data);
		}
		public function delete($id_pelanggan)
		{
			$this->db->where('id_pelanggan',$id_pelanggan);
			$this->db->delete('pelanggan');
		}
		public function plus()
		{
			$id_pelanggan=$this->input->post('id_pelanggan');
			$data=array(
				'id_pelanggan'=>$id_pelanggan,
				'nilai_penawaran'=>$this->input->post('nilai_penawaran')
			);
			$this->db->where('id_pelanggan',$id_pelanggan);
			$this->db->update('nilai_pelanggan',$data);
			
		}
		public function plus_nilai()
		{
			$id_pelanggan=$this->input->post('id_pelanggan');
			$nilai_penawaran=$this->input->post('nilai_penawaran');
			$data=array(
				'id_pelanggan'=>$id_pelanggan,
				'nilai_penawaran'=>$nilai_penawaran+1
			);
			$this->db->where('id_pelanggan',$id_pelanggan);
			$this->db->update('nilai_pelanggan',$data);
		}
		public function nilai_lama($id_pelanggan)
		{
			$this->db->where('id_pelanggan',$id_pelanggan);
			$query=$this->db->get('nilai_pelanggan');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function cekEmail()
		{
			$email=$this->input->post('email');
			$query=$this->db->query("select pelanggan.id_pelanggan, nilai_penawaran,nama_perusahaan,nama_pemesan 
									from pelanggan,nilai_pelanggan
									where email='$email' and pelanggan.id_pelanggan =nilai_pelanggan.id_pelanggan;");
			if ($query->num_rows()>0) 
			{
				return $query;
			}
			else
			{
				return false;
			}
		}
	}