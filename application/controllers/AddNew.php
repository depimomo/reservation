<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddNew extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('addnew_model');
	}

	public function index()
	{
		$this->load->view('booking_input');
	}

	// Buat fungsi masukin hal yang dilempar dari halaman sebelumnya
	public function autoFill($selected_class) 
	{
		//masukin idnya buat dikirim ke view booking_input
		$data['selected_class_id'] = $selected_class;

		//ambil nama kelasnya, minta dari model
		$data['selected_class_name'] = $this->addnew_model->get_nama_kelas($selected_class);

		$this->load->view('booking_input',$data);
	}

	// Buat Fungsi Nambahin ke databasenya
	public function addReservation()
	{
		//Tangkep dulu semua inputan yang ada di halaman booking_input.php
		$datebook = $this->input->post('datebook');
		$selected_class_id = $this->input->post('selected_class_id');
		$selected_class_name = $this->input->post('selected_class_name');
		$booker_name = $this->input->post('booker_name');
		$purposes = $this->input->post('purposes');

		//ambil timeslot yang di checkbox
	    foreach($_POST['timeslot'] as $check) 
	    {
	        $timeslot[] = $check;
	    }

		//kalau udah diambil semuanya, masukin ke dalam array
		//biar bisa dikirim ke model buat diolah
		//deklarasinya:
		
		$values = array(
			'datebook' => $datebook,
			'selected_class_id' => $selected_class_id,
			'selected_class_name' => $selected_class_name,
			'booker_name' => $booker_name,
			'purposes' => $purposes,
			'timeslot' => $timeslot			
			);
		

		//lalu kirim ke model (addnew_model) dengan cara
		$this->addnew_model->input_reservation($values);
	}
	
}
