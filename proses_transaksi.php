<?php 
session_start();
if(isset($_SESSION['Login'])){
	include "connect.php";
	if($_GET['act']=='bayar'){

		$idspp = $_GET['id'];
		$NIS = $_GET['NIS'];

		//membuat no pembayaran
		$today = date("ymd");
		$query = mysqli_query($koneksi, "SELECT max(nobayar) AS last FROM pembayaran WHERE nobayar LIKE '$today%'");
		$data = mysqli_fetch_array($query);
		$lastNoBayar = $data['last'];
		$lastNoUrut	= substr($lastNoBayar, 6, 4);
		$nextNoUrut = $lastNoUrut + 1;
		$nextNoBayar = $today.sprintf('%04s', $nextNoUrut);

		//tanggal bayar
		$tglBayar = date('Y-m-d');

		//id admin
		$admin = $_SESSION['id'];

		mysqli_query($koneksi, "UPDATE pembayaran SET nobayar='$nextNoBayar',tgl_bayar='$tglBayar',keterangan='LUNAS',idpetugas='$admin' WHERE idspp='$idspp'");

		header('location:transaksi.php?NIS='.$NIS);
	}
}
 ?>
