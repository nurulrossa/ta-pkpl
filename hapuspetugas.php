<?php 
session_start();
if(isset($_SESSION['Login'])){
include "connect.php";
$idpetugas = $_GET['idpetugas'];

$hapus = mysqli_query($koneksi, "DELETE FROM petugas WHERE idpetugas='$idpetugas'");

	if ($hapus) {
		header("location:petugas.php?pesan=hapus");
	}else{
		echo "Hapus Data Gagal, Data Petugas digunakan di tabel pembayaran"; ?>
		<a href="petugas.php"><<< Kembali</a>
		<?php 
	}
}else{
	echo "Anda tidak memiliki akses ke halaman ini!!!";
}
 ?>