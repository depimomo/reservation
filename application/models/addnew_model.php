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

	//Apa yang mau dilakukan di sini?
	public function input_reservation($data) 
	{
		//$data adalah array $values yang ada di controller AddNew
		//cara ambilnya $data['datebook']

		//di sini, masukin data satu-satu ke TRH dulu, setelah itu TRD
		//yang perlu diperhatikan:
		
		//TRH_id autoincrement, jadi tidak usah ditulis tidak apa-apa
		//INSERT INTO `trh`(`date_now`, `date_book`, `user_id`, `class_id`, `booker_name`, `purpose`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])

		//TRD_id juga autoincrement
		//INSERT INTO `trd`(`TRH_id`, `slot_id`) VALUES ([value-1],[value-2])

		//di tabel TRD perlu TRH_id data yang baru dimasukin, makanya perlu disimpen nomor TRH terakhir yang baru dimasukkin
		//baca di http://stackoverflow.com/questions/14170656/get-last-inserted-auto-increment-id-in-mysql

		//good luck :D

	}
}

?>