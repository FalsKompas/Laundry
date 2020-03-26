<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_getdata extends CI_Model {
// Function Outlet
	public function id_outlet()
	{
		  $this->db->select('RIGHT(tb_outlet.id_outlet,2) as id_outlet', FALSE);
		  $this->db->order_by('id_outlet','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_outlet');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_outlet) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  } 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "CB000".$batas;  //format kode
			  return $kodetampil;  
	}
	public function getoutlet()
	{
		$get = $this->db->query("select * from tb_outlet");
		return $get;
	}
	public function getdata($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function getrow_o()
	{
		$query = $this->db->get('tb_outlet');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}

// Function Produk
	public function id_paket()
	{
		  $this->db->select('RIGHT(tb_paket.id_paket,2) as id_paket', FALSE);
		  $this->db->order_by('id_paket','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_paket');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_paket) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  } 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "PK000".$batas;  //format kode
			  return $kodetampil;  
	}
	public function getproduk()
	{
		return $this->db->get('tb_paket');
	}
	public function getbyid($where)
	{
		return $this->db->get_where('tb_paket',$where);
	}
	public function getrow_p()
	{
		$query = $this->db->get('tb_paket');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}

// Function Pengguna
	public function getpengguna()
	{
		return $this->db->get('tb_user');
	}
	public function id_user()
	{
		  $this->db->select('RIGHT(tb_user.id_user,2) as id_user', FALSE);
		  $this->db->order_by('id_user','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_user');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_user) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  } 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "USER00".$batas;  //format kode
			  return $kodetampil;  
	}
	public function getuser($id)
	{
		return $this->db->get_where('tb_user',$id);
	}
	public function getrow_u()
	{
		$query = $this->db->get('tb_user');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}

// Function Member
	public function getmember()
	{
		return $this->db->get('tb_member');
	}
	public function id_member()
	{
		  $this->db->select('RIGHT(tb_member.id_member,2) as id_member', FALSE);
		  $this->db->order_by('id_member','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_member');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_member) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  } 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "M000".$batas;  //format kode
			  return $kodetampil;  
	}
	public function getrow_m()
	{
		$query = $this->db->get('tb_member');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}
	public function getdatabyid($id)
	{
		return $this->db->get_where('tb_member', $id);
	}

// Function Order
	public function getdata_byid($id_member)
	{
		$hsl = $this->db->query(" SELECT * FROM tb_member WHERE id_member = '$id_member' ");
		return $hsl;
	}
	public function kodeinvoice()
	{
		  $this->db->select('RIGHT(tb_transaksi.kode_invoice,2) as kode_invoice', FALSE);
		  $this->db->order_by('kode_invoice','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_transaksi');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->kode_invoice) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  } 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "KI".date('dmY').$batas;  //format kode
			  return $kodetampil;  
	}
}