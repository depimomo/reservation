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

	// Buat fungsi set ke tampilannya
	public function setContent() 
	{}
}