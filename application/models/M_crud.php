<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {
// Function Outlet
	public function addoutlet($data)
	{
		$this->db->insert('tb_outlet', $data);
	}
	public function hapus_outlet($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit($data,$id_outlet)
	{
		$this->db->set($data);
		$this->db->where('id_outlet', $id_outlet);
		$this->db->update('tb_outlet');
	}

// Function Produk
	// List all your items
	public function index( $offset = 0 )
	{
	
	}
	
	// Add a new item
	public function addproduk($data)
	{
		$this->db->insert('tb_paket', $data);
	}
	
	//Update one item
	public function update($data,$id)
	{
		$this->db->set($data);
		$this->db->where('id_paket', $id);
		$this->db->update('tb_paket');
	}
	
	//Delete one item
	public function hapus_produk( $id )
	{
		$this->db->where($id);
		$this->db->delete('tb_paket');
	}

// Function Pengguna
	public function hapus_pengguna($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_user');
	}

// Function Member
	public function addmember($data)
	{
		$this->db->insert('tb_member', $data);
	}
	public function editmember($data,$id)
	{
		$this->db->set($data);
		$this->db->where('id_member', $id);
		$this->db->update('tb_member');
	}
	public function hapus_member($id)
	{
		$this->db->where($id);
		$this->db->delete('tb_member');
	}
}

/* End of file M_input.php */
/* Location: ./application/models/M_input.php */