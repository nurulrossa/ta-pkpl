<?php 
session_start();
if(isset($_SESSION['Login'])){
include "connect.php";
$kd_kelas=$_GET['kd_kelas'];

$hapus = mysqli_query($koneksi, "DELETE FROM kelas WHERE kd_kelas='$kd_kelas'");

	if ($hapus) {
		header("location:kelas.php?pesan=hapus");
	}else{
		echo "Hapus Data Gagal, Data Kelas digunakan di tabel Santri"; ?>
		<a href="kelas.php"><<< Kembali</a>
		<?php 
	}
}else{
	echo "Anda tidak memiliki akses ke halaman ini!!!";
}
 ?>