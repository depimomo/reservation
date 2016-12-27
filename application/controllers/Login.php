<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('index');
	}

	// Buat fungsi loginnya
	public function lets_login() {


		if(isset($_SESSION['logged_in']))
		{
			echo "<script>window.location = '../booking'</script>";
		}
		else 
		{
			//mau ngirim array data ke model
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);

			$result = $this->login_model->login($data);

			if ($result == TRUE) 
			{
				$username = $this->input->post('username');

				$_SESSION['logged_in'] = $username;

				echo "<script>window.location = '../booking'</script>";
			} 
			else 
			{
				$_SESSION['invalid'] = "Invalid username or password";
				echo "<script>window.location = '../..'</script>";
			}
		}
	}

	// Buat fungsi logoutnya
	public function logout() {

		$this->session->sess_destroy();
		echo "<script>window.location = '../..'</script>";
	}
}
