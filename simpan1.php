<?php 
	include 'connect.php';
	$kode_mk = $_POST['kode_mk'];
	$nama_matkul = $_POST['nama_matkul'];
	$sks = $_POST['sks'];
	mysqli_query($koneksi,"INSERT INTO matakuliah VALUES('$kode_mk','$nama_matkul','$sks')");

	header("location:tampil.php?");
 ?>