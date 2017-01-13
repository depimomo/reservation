<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('invoice_model');
	}

	public function index()
	{
		$this->load->view('booking_invoice');
	}

	public function invoicelagi($id)
	{
		//terima id dari halaman invoice

		//lalu kirim ke model (invoice_model) dengan cara
		$hasil = $this->invoice_model->tampil_invoice($id);

		$data['hasil'] = $hasil;

		$this->load->view('booking_invoice', $data);
	}

}
