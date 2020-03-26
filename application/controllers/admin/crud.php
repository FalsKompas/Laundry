<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('M_crud');

	}
// Functoion Outlet
	public function add()
	{
		$id = $_POST['id_outlet'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$notlp = $_POST['notlp'];

		$data = array(
			'id_outlet' => $id,
			'nama' => $nama,
			'alamat' => $alamat,
			'tlp' => $notlp
		);
		$q = $this->db->insert('tb_outlet', $data);
		if ($q) {
			redirect('admin/pindah/outlet','refresh');
		} else {
			redirect('admin/pindah/addoutlet','refresh');
		}
		
	}

	//Update one item
	public function update( $id = NULL )
	{
		$id_outlet = $_POST['id_outlet'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$notlp = $_POST['notlp'];

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'tlp' => $notlp
		);
		$q = $this->M_crud->edit($data,$id_outlet);
		redirect('admin/pindah/outlet','refresh');
	}

	//Delete one item
	public function hapus_outlet($id)
	{
		$where = array('id_outlet' => $id);
		$q = $this->M_crud->hapus_outlet($where,'tb_outlet');
		redirect('admin/pindah/outlet','refresh');
	}

// Function Produk
	// Add a new item
	public function addproduk()
	{
		$id = $_POST['id_paket'];
		$id_outlet = $_POST['id_outlet'];
		$jenis = $_POST['jenis'];
		$namapaket = $_POST['namapaket'];
		$harga = $_POST['harga'];

		$data = array(
			'id_paket' => $id,
			'id_outlet' => $id_outlet,
			'jenis' => $jenis,
			'nama_paket' => $namapaket,
			'harga' => $harga
		);
		$q = $this->M_crud->addproduk($data);
		redirect('admin/pindah/Produkcucian','refresh');
	}
	
	//Update one item
	public function update_produk()
	{
		$id = $_POST['id_paket'];
		$id_outlet = $_POST['id_outlet'];
		$jenis = $_POST['jenis'];
		$namapaket = $_POST['namapaket'];
		$harga = $_POST['harga'];

		$data = array(
			'id_outlet' => $id_outlet,
			'jenis' => $jenis,
			'nama_paket' => $namapaket,
			'harga' => $harga
		);
		$this->db->set($data);
		$this->db->where('id_paket', $id);
		$this->db->update('tb_paket');
		redirect('admin/pindah/Produkcucian','refresh');
	}
	
	//Delete one item
	public function hapus_produk( $id )
	{
		$id = array('id_paket' => $id);
		$this->M_crud->hapus_produk($id);
		redirect('admin/pindah/Produkcucian','refresh');
	}

// Function Pengguna
	
	// Add a new item
	public function addpengguna()
	{
		$id = $_POST['id_user'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id_outlet = $_POST['id_outlet'];
		$role = $_POST['role'];

		$config['upload_path'] = './assets/images';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|PNG|JPEG';
		$config['max_size']  = 0;
		$config['max_width']  = 0;
		$config['max_height']  = 0;
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$_data = array('upload_data' => $this->upload->data());
			$data = array(
				'id_user' => $id,
				'gambar' => $_data['upload_data']['file_name'],
				'nama' => $nama,
				'username' => $username,
				'password' => $password,
				'id_outlet' => $id_outlet,
				'role' => $role
			);
			$q = $this->db->insert('tb_user', $data);
			if ($q) {
				redirect('admin/pindah/pengguna','refresh');
			} else {
				redirect('admin/pindah/addpengguna','refresh');
			}
			
		}
	}
	
	//Update one item
	public function editpengguna()
	{
		$id = $_POST['id_user'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id_outlet = $_POST['id_outlet'];
		$role = $_POST['role'];

		$data = array(
				'nama' => $nama,
				'username' => $username,
				'password' => $password,
				'id_outlet' => $id_outlet,
				'role' => $role
			);
			$q = $this->db->update('tb_user', $data);
			if ($q) {
				redirect('admin/pindah/pengguna','refresh');
			} else {
				redirect('admin/pindah/editpengguna','refresh');
			}
	}
	
	//Delete one item
	public function hapus_user($id)
	{
		$where = array('id_user' => $id);
		$this->M_crud->hapus_pengguna($where);
		redirect('admin/pindah/pengguna','refresh');
	}

// Function Member
	public function addmember()
	{
		$id = $_POST['id_member'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jk'];
		$tlp = $_POST['tlp'];

		$data = array(
				'id_member' => $id,
				'nama' => $nama,
				'alamat' => $alamat,
				'jenis_kelamin' => $jk,
				'tlp' => $tlp
			);
		$this->M_crud->addmember($data);
		redirect('admin/pindah/member','refresh');
	}
	public function editmember()
	{
		$id = $_POST['id_member'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jk'];
		$tlp = $_POST['tlp'];

		$data = array(
				'id_member' => $id,
				'nama' => $nama,
				'alamat' => $alamat,
				'jenis_kelamin' => $jk,
				'tlp' => $tlp
			);
		$this->M_crud->editmember($data,$id);
		redirect('admin/pindah/member','refresh');
	}
	public function hapus_member($id)
	{
		$id = array('id_member' => $id);
		$this->M_crud->hapus_member($id);
		redirect('admin/pindah/member','refresh');
	}
}

/* End of file crud.php */
/* Location: ./application/controllers/admin/crud.php */
