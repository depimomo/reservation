<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListBooking extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('listbooking_model');
	}

	public function index()
	{
		$this->load->view('list_booked');
	}

	// Buat ngefilter isi tabel sesuai tanggal
	public function filter() 
	{
		//terima data yang dikirim lewat form yaitu date1 dan date2
		$date1 = $this->input->post('date1');
		$date2 = $this->input->post('date2');

		//masukin ke array buat dikirim ke model
		$values = 
		array(
			'date1' => $date1,
			'date2' => $date2
			);

		//kirim ke model dan simpan hasilnya
		$result = $this->listbooking_model->lets_filter($values);

		//simpan hasil ke $data biar bisa dikirim
		$data['filtered_results'] = $result;

		//$result ini adalah hasil filteran dalam bentuk tabel
		//sekarang kita load viewnya
		$this->load->view('list_booked', $data);
	}
}
