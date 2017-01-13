<?php

Class Login_Model extends CI_Model 
{


	// Read data using username and password
	public function login($data) 
	{
		$condition = "username =" . "'" . $data['username'] . "'";

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			foreach ($query->result() as $row) 
			{
				$hash = $row->password;
				$id = $row->id;
			}

			//cek password cocok ga
			if(password_verify($data['password'], $hash))
			{
				$_SESSION['id_logged_in'] = $id;
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