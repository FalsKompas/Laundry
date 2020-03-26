<?php 

include 'koneksi.php';
$id = $_GET['id_member'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_member WHERE id_member= '$id'");
$hasil = mysqli_fetch_array($query);
$data = array(
			'nama' => $hasil['nama'],
			'alamat' => $hasil['alamat'],
			'jenis_kelamin' => $hasil['jenis_kelamin'],
			'tlp' => $hasil['tlp'],
		);

echo json_encode($data);

 ?>