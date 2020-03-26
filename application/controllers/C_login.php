<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function _construct()
	{
		session_start();
		parent::__construct();
		$this->load->model('M_getdata');
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
	public function authenticated()
	{
		if ($this->uri->segment(1) != 'auth' && $this->uri->segment(1) !='') {
			if (! $this->session->userdata('authenticated')) {
				redirect('auth');
			}
		}
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('C_login/login');
	}
	public function admin()
	{
		$data['getrow_o'] = $this->M_getdata->getrow_o();
		$data['getrow_p'] = $this->M_getdata->getrow_p();
		$data['getrow_u'] = $this->M_getdata->getrow_u();
		$data['getrow_m'] = $this->M_getdata->getrow_m();
		$this->load->view('admin/index',$data);
	}
	public function kasir()
	{
		$this->load->view('kasir/index');
	}
}