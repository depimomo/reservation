<?php

Class ListBooking_Model extends CI_Model {

	public function lets_filter($data)
	{
		//terima data yang dikirim dari controller
		//dimasukin session biar bisa nongol di view from-to nya
		$date1 = $data['date1'];
		$_SESSION['date1'] = $date1;

		$date2 = $data['date2'];
		$_SESSION['date2'] = $date2;


		//mulai kueri pencarian ke view invoice_view yang ada di database
		$condition = "date_book >=" . "'" . $date1 . "' AND date_book <=" . "'" . $date2 . "'";

		$this->db->select('*');
		$this->db->from('invoice_view');
		$this->db->where($condition);

		$query = $this->db->get();

		//kasi penahan biar ga berantakan pas tampil
		if($query)
		{
			//sekarang udah pake cara pinter, jadi kirimnya langsung dalam bentuk array aja
			//ini dia balikinnya ke controller lagi hasil filternya
			return $query->result_array();
		}
		else
		{
			//kalau ga ada ruangan yang terpesan di hari itu, balikinnya false
			return false;
		}

	}

}

?>