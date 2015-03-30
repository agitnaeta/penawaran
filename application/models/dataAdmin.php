<?php 
	class DataAdmin extends CI_Model
	{
		public function cekLogin($username,$password)
		{
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query=$this->db->get('admin');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
	}