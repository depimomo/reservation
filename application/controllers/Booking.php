<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('booking_model');
	}

	public function index()
	{
		$this->load->view('booking');
	}

	// Buat fungsi set ke tampilannya
	public function setContent() 
	{

		//mau ngirim array data ke model
		$values = array(
			'datebook' => $this->input->post('datebook'),
			'from' => $this->input->post('from'),
			'to' => $this->input->post('to')
			);

		//kirim $values ke booking_model fungsi cek_ruang
		$coba = $this->booking_model->cek_ruang($values);

		if($coba)
		{
			$data['booked_class'] = $coba;
			
			//simpen di array biar bisa dikirim lagi
			foreach ($data['booked_class'] as $row) 
			{
				$class[] = $row['class_id'];
			}
		}
		else
		{
			$class = false;
		}

		
		//ambil ruang kosong
		$data['unbooked_class'] = $this->booking_model->ruang_tersedia($class);

		//load viewnya sambil kirim data booked n unbooked
		$this->load->view('booking', $data);

	}
}
