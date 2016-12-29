<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('booking_model');
	}

	public function index()
	{
		$this->load->view('booking');
	}

	// Buat fungsi set ke tampilannya
	public function setContent() {

		//mau ngirim array data ke model
		$data = array(
			'datebook' => $this->input->post('datebook'),
			'from' => $this->input->post('from'),
			'to' => $this->input->post('to')
			);

		//kirim $data ke booking_model fungsi cek_ruang
		$result = $this->booking_model->cek_ruang($data);

		if ($result == TRUE) 
		{
			echo "<script>window.location = '../booking'</script>";
		} 
		else 
		{
			echo "<script>window.location = '../booking'</script>";
		}

	}
}
