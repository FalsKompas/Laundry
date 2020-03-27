<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class pindah extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_getdata');
	}
// Function Outlet
	public function outlet()
	{
		$data['getoutlet'] = $this->M_getdata->getoutlet()->result();
		$this->load->view('admin/outlet/outlet',$data);
	}
	public function addoutlet()
	{
		$data['id_outlet'] = $this->M_getdata->id_outlet();
		$this->load->view('admin/outlet/addoutlet',$data);
	}
	public function editoutlet($id)
	{
		$where = array('id_outlet'=>$id);	
		$data['getdata'] = $this->M_getdata->getdata($where, 'tb_outlet')->result();
		$this->load->view('admin/outlet/editoutlet', $data);
	}

// Function Produk
	public function Produkcucian()
	{
		$data['getproduk'] = $this->M_getdata->getproduk()->result();
		$this->load->view('admin/produk/produk', $data);
	}
	public function addproduk()
	{
		$data['getdata'] = $this->M_getdata->getoutlet()->result();
		$data['getid'] = $this->M_getdata->id_paket();
		$this->load->view('admin/produk/addproduk', $data);
	}
	public function editproduk($id)
	{
		$where = array('id_paket' => $id);
		$data['getdatabyid'] = $this->M_getdata->getbyid($where)->result();
		$this->load->view('admin/produk/editproduk', $data);
	}

// Function Pengguna
	public function pengguna()
	{
		$data['getdata'] = $this->M_getdata->getpengguna()->result();
		$this->load->view('admin/pengguna/pengguna',$data);
	}
	public function addpengguna()
	{
		$data['getdata'] = $this->M_getdata->getoutlet()->result();
		$data['getid'] = $this->M_getdata->id_user();
		$this->load->view('admin/pengguna/addpengguna', $data);
	}
	public function edituser($id)
	{
		$id = array('id_user' => $id);
		$data['getdata'] = $this->M_getdata->getoutlet()->result();
		$data['databyid'] = $this->M_getdata->getuser($id)->result();
		$this->load->view('admin/pengguna/editpengguna', $data);
	}

// Function Member
	public function member()
	{
		$data['getdata'] = $this->M_getdata->getmember()->result();
		$this->load->view('admin/member/member',$data);
	}
	public function addmember()
	{
		$data['getid'] = $this->M_getdata->id_member();
		$this->load->view('admin/member/addmember', $data);
	}
	public function editmember($id)
	{
		$id = array('id_member' => $id);
		$data['data'] = $this->M_getdata->getdatabyid($id)->result();
		$this->load->view('admin/member/editmember', $data);
	}

// Function Order
	public function order()
	{
		$data['getid'] = $this->M_getdata->getidtransaksi();
		$data['getdetail'] = $this->M_getdata->getiddetail();
		$data['getoutlet'] = $this->M_getdata->getoutlet()->result();
		$data['kodeinvoice'] = $this->M_getdata->kodeinvoice();
		$data['getproduk'] = $this->M_getdata->getproduk()->result();
		$this->load->view('admin/order/order',$data);
	}
	public function getdata()
	{
		$this->load->view('admin/order/ajax');
	}
	public function getpaket()
	{
		$this->load->view('admin/order/paket');
	}

}