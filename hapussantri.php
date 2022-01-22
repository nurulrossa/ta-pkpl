<?php 
session_start();
if(isset($_SESSION['Login'])){
include "connect.php";
$idsantri=$_GET['idsantri'];

$hapus = mysqli_query($koneksi, "DELETE FROM santri WHERE idsantri='$idsantri'");

	if ($hapus) {
		header("location:santri.php?pesan=hapussantri");
	}else{
		echo "Hapus Data Gagal,.."; ?>
		<a href="santri.php"><<< Kembali</a>
		<?php 
	}
}else{
	echo "Anda tidak memiliki akses ke halaman ini!!!";
}
 ?>