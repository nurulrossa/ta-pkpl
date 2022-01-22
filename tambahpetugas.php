<?php include "header.php"; ?>
<style>
	.error {color: #FF0000;}
</style>
<div class="container">
	<div class="page-header">
	<h3><center>Menambah Data Petugas</center></h3>
	</div>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>NIP<span class="error">*</span></td><td><input class="form-control" type="text" name="NIP"></td>
			</tr>
			<tr>
				<td>Nama Petugas<span class="error">*</span></td><td><input class="form-control" type="text" name="nama_ptgs"></td>
			</tr>
			<tr>
				<td>Username<span class="error">*</span></td><td><input class="form-control" type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password<span class="error">*</span></td><td><input class="form-control" type="text" name="password"></td>
			</tr>
			<tr>
				<td>Status<span class="error">*</span></td><td><input class="form-control" type="text" name="status"></td>
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
	$NIP = $_POST['NIP'];
	$nama_ptgs = $_POST['nama_ptgs'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = $_POST['status'];

	if($NIP==''){
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}elseif ($nama_ptgs=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}elseif ($username=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}elseif ($password=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}elseif ($status=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}else{
		$simpan = mysqli_query($koneksi, "INSERT INTO petugas(NIP,nama_ptgs,username,password,status) VALUES('$NIP','$nama_ptgs','$username','$password','$status')");
		if (!$simpan) {
			echo "Simpan data gagal!!";
		}else{
			header('location:petugas.php');
		}
	}
}
 ?>

</div>
<?php 
	include "footer.php"
 ?>