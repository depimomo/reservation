<?php

Class AddNew_Model extends CI_Model {

	public function get_nama_kelas($data)
	{
		//cari nama kelas berdasar id yang ada
		$condition = "id = '".$data."'";

		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->where($condition);
		$this->db->limit(1);

		$query = $this->db->get();

		//balikin nama kelasnya ke controller
		foreach ($query->result() as $row) 
		{
			return $row->nama_kelas;
		}
	}

	public function input_reservation($data) 
	{

		//ganti garis miring di date jadi strip
		$date1 = strtr($data['datebook'], '/', '-');
		
		$values = array(
			'date_now' => date("Y-m-d"),
			'date_book' => date('Y-m-d', strtotime($date1)),
			'class_id' => $data['selected_class_id'],
			'booker_name' => $data['booker_name'],
			'purpose' => $data['purposes'],
			'user_id' => $_SESSION['id_logged_in']
			);
		
		$this->db->insert('trh', $values);

		//ini id yang baru dimasukin
		$myid = $this->db->insert_id();

		foreach ($data['timeslot'] as $row) 
		{
			$values = array(
			
			'TRH_id' => $myid,
			'slot_id' => $row
			
			);

			$this->db->insert('trd', $values);
		}
		
		echo "<script>window.location='".base_url()."index.php/Invoice/invoicelagi/".$myid."';</script>";

	}
}

?>