<?php

Class Booking_Model extends CI_Model {


	//Tarik data sesuai waktu yang dimau
	public function cek_ruang($data) {

		$condition = "username =" . "'" . $data['username'] . "'";

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			foreach ($query->result() as $row) {
				# code...
				$hash = $row->password;
			}

			//cek password cocok ga
			if(password_verify($data['password'], $hash))
			{
				return true;
			}
			else
			{
				return false;
			}
			
		} 
		else 
		{
			return false;
		}
	}
}

?>