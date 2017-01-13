<?php

Class Invoice_Model extends CI_Model 
{
	public function tampil_invoice($id)
	{
		//cari nama kelas berdasar id yang ada
		$condition = "TRH_id = '".$id."'";

		$this->db->select('*');
		$this->db->from('invoice_view');
		$this->db->where($condition);

		$query = $this->db->get();

		//balikin hasilnya
		return $query->result_array();
	}

}

?>