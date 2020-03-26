<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function proseslogin($user, $pass)
	{
		//khusus PHP deprecated
		$u = $user;
		$p = $pass;
		$q_cek_login = $this->db->get_where('tb_user', array('username' => $u, 'password' => $p));
		if (count($q_cek_login->result()) > 0) {
			foreach ($q_cek_login->result() as $qck) {
				if ($qck->role == 'Admin') {
					$sess_data['authenticated'] = 'true';
					$sess_data['logged_in'] = 'true';
					$sess_data['role'] = 'Admin';
					$sess_data['username'] = $u;
					$_SESSION['nama'] = $qck->nama;
					$_SESSION['id_user'] = $qck->id_user;
					$_SESSION['gambar'] = $qck->gambar;
					$this->session->set_userdata($sess_data);
					echo "<script>
                    alert('Selamat, Anda telah login');
                    window.location='", site_url('C_login/admin'), "';
                </script>";
				} else if ($qck->role == 'Kasir') {
					$sess_data['authenticated'] = 'true';
					$sess_data['logged_in'] = 'yes';
					$sess_data['role'] = 'Kasir';
					$sess_data['username'] = $u;
					$_SESSION['id_user'] = $qck->id_user;
					$_SESSION['nama'] = $qck->nama;
					$_SESSION['gambar'] = $qck->gambar;
					$this->session->set_userdata($sess_data);
					echo "<script>
                    alert('Selamat, Anda telah login');
                    window.location='", site_url('C_login/kasir'), "';
                </script>";
				}elseif ($qck->role == 'Owner') {
					$sess_data['authenticated'] = 'true';
					$sess_data['logged_in'] = 'yes';
					$sess_data['role'] = 'owner';
					$sess_data['username'] = $u;
					$_SESSION['id_user'] = $qck->id_user;
					$_SESSION['nama'] = $qck->nama;
					$_SESSION['gambar'] = $qck->gambar;
					$this->session->set_userdata($sess_data);
					echo "<script>
                    alert('Selamat, Anda telah login');
                    window.location='", site_url('C_login/admin'), "';
                </script>";
				}
			}
		} else {
			echo "<script>
                    alert('Username dan Password tidak sesuai');
                    window.location='", site_url('C_login/login'), "';
                </script>";
		}
		
	}
}
?>