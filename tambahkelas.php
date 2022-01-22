<?php include "header.php"; ?>
<style>
	.error {color: #FF0000;}
</style>
<div class="container">
	<div class="page-header">
	<h3><center>Menambah Data Kelas</center></h3>
	</div>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>Nama Kelas<span class="error">*</span></td><td><input class="form-control" type="text" name="nama_kls"></td>
			</tr>
			<tr>
				<td>Jenjang Sekolah<span class="error">*</span></td><td><input class="form-control" type="text" name="jenjang_sekolah"></td>
			</tr>
			<tr>
				<td>Kapasitas<span class="error">*</span></td><td><input class="form-control" type="text" name="kapasitas"></td>
			</tr>
			<tr>
				<td>Kategori Kelas<span class="error">*</span></td><td><input class="form-control" type="text" name="jenis_kelas"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-success" type="submit" value="simpan"></td>
			</tr>
		</table>
	</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connect.php';
	$jenjang_sekolah = $_POST['jenjang_sekolah'];
	$nama_kls = $_POST['nama_kls'];
	$kapasitas = $_POST['kapasitas'];
	$jenis_kelas = $_POST['jenis_kelas'];

	if($jenjang_sekolah=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}else if($nama_kls=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}else if($kapasitas=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}else if($jenis_kelas=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}else{
		$simpan = mysqli_query($koneksi, "INSERT INTO kelas(jenjangsekolah,nama_kls,kapasitas,jenis_kelas) VALUES('$jenjang_sekolah','$nama_kls','$kapasitas','$jenis_kelas')");
		if (!$simpan) {
			echo "Simpan data gagal!!";
		}else{
			header('location:kelas.php');
		}
	}
}
 ?>
</div>
<?php 
	include "footer.php"
 ?>