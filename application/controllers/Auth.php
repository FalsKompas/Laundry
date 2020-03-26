<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function _construct()
	{
		session_start();
		parent::__construct();
		$this->load->model('Auth_model');

		$this->authenticated();
	}
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
	public function ceklogin()
	{
		if (isset($_POST['login'])) {
			$user = $this->input->post('username',True);
			$pass = $this->input->post('password',True);
			$cek = $this->Auth_model->proseslogin($user,$pass);
		}
	}
	public function index()
	{
		if ($this->session->userdata('authenticated')) {
			if ($_SESSION['role'] = 'Admin') {
				redirect('C_login/admin','refresh');
			}elseif ($_SESSION['role'] = 'Kasir') {
				redirect('C_login/kasir','refresh');
			}
		}else{
			redirect('C_login/login');
		}
	}
}
