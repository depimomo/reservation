<?php

Class Booking_Model extends CI_Model {


	//Tarik data sesuai waktu yang dimau
	public function cek_ruang($data) {

		//simpan data yang diterima dari form ke variabel
		$datebook = $data['datebook'];
		$_SESSION['datebook'] = $datebook;

		$from = $data['from'];
		$to = $data['to'];

		//cek from sama to nya itu sebenernya berapa slot, 
		//karena satu slot 2 jam kita liat dia selisihnya 2 ga

		$min = $to - $from;

		if($min === 2)
		{
			$slot = "'".$from."to".$to."'";

			//ini udah bisa handle 8to10, 10to12, 13to15, 15to17

			//yang belom kehandle 8to12, 8to15, 8to17
			//10to15, 10to17, 13to17

		}
		else if($min === 4)
		{
			//handle yang 4 jam, kemungkinan cuma 8to12 sama 13to17

			switch ($from) {
				case 8:
					$slot = "'8to10','10to12'";
					break;
				
				default:
					$slot = "'13to15','15to17'";
					break;
			}
		}
		else if($min === 7)
		{
			//handle yang selisihnya 7, cuma 8to15 sama 10to17

			switch ($from) {
				case 8:
					$slot = "'8to10','10to12','13to15'";
					break;
				
				default:
					$slot = "'10to12','13to15','15to17'";
					break;
			}
		}
		else if($min === 5)
		{
			$slot = "'10to12','13to15'";
		}
		else
		{
			$slot = "'8to10','10to12','13to15','15to17'";
		}

		$_SESSION['slot'] = $slot;

		//kay, karena udah dapet key buat slotnya, sekarang kita bisa pilih dari view
		//ruangan mana aja yang udah ke book di hari n slot segitu

		$condition = "date_book =" . "'" . $data['datebook'] . "' AND slot_id IN (".$slot.")";

		$this->db->distinct();
		$this->db->select('class_id');
		$this->db->from('list_booked_class');
		$this->db->where($condition);

		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			//di sini kita udah dapet daftar kelas yang kebook di jam segitu
			//simpen di array

			foreach ($query->result() as $row) 
			{
				$class[] = $row->class_id;
			}

			//masukin session for simplicity

			$_SESSION['booked_class'] = $class;

			return true;
					
		} 
		else 
		{
			return false;
		}
	}
}

?>