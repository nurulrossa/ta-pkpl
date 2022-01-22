<?php 
session_start();
if(!isset($_SESSION['Login'])){
	header('location:login.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Pembayaran SPP</title>
	<style type="text/css">
		body{
		font-family: Arial;
		}

		@media print{
			.no-print{
				display: none;
			}
		}

		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="page-header">
	<h3><center>PONDOK PESANTREN HARISUL KHAIRA'AT BUMI HIJRAH TIDORE<br/>LAPORAN PEMBAYARAN UANG BULANAN SANTRI</center></h3>
	<hr/>
	<p>Dari Tanggal : <?php echo $_GET['tgl1']." - ".$_GET['tgl1']; ?></p>
</div>
<hr/>
<table class="table table-bordered table-striped" width="100%" border="1" cellspacing="0" cellpadding="4">
	<tr>
		<th>No</th>
		<th>NIS</th>
		<th>Nama Santri</th>
		<th>Kelas</th>
		<th>Sekolah</th>
		<th>Kategori</th>
		<th>Bulan</th>
		<th>Nomor Pembayaran</th>
		<th>Jumlah</th>
		<th>Keterangan</th>
	</tr>
	<?php 
	include "connect.php";
	$sqlPembayaran = mysqli_query($koneksi, "SELECT pembayaran.*,santri.NIS,santri.Nama,santri.jenis_santri,kelas.nama_kls,kelas.jenjangsekolah,petugas.nama_ptgs FROM pembayaran INNER JOIN petugas ON pembayaran.idpetugas=petugas.idpetugas INNER JOIN santri ON pembayaran.idsantri=santri.idsantri INNER JOIN kelas ON santri.kd_kelas=kelas.kd_kelas WHERE tgl_bayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' ORDER BY nobayar ASC");
	$no=1;
	$total = 0;
	while ($d=mysqli_fetch_array($sqlPembayaran)) {
		echo "<tr>
			<td align='center'>$no</td>
			<td align='center'>$d[NIS]</td>
			<td align='center'>$d[Nama]</td>
			<td align='center'>$d[nama_kls]</td>
			<td align='center'>$d[jenjangsekolah]</td>
			<td align='center'>$d[jenis_santri]</td>
			<td align='center'>$d[bulan]</td>
			<td align='center'>$d[nobayar]</td>
			<td align='right'>$d[jumlah_bayar]</td>
			<td align='center'>$d[keterangan]</td>
		</tr>";
		$no++;
		$total += $d['jumlah_bayar'];
	}
	 ?>
	 <tr>
	 	<td colspan="8" align="center"><b>Total</b></td>
	 	<td align="right"><b><?php echo $total; ?></b></td>
	 	<td></td>
	 </tr>
</table>

<table width="100%">
	<tr>
		<td></td>
		<td width="300px">
			<br/>
			<p>Kota Tidore Kepulauan, <?php echo date('d/m/Y'); ?><br/>Operator,</p>
			<br/>
			<br/>
			<p>____________________________</p>
		</td>
	</tr>
</table>
</div>
<a href="#" class="no-print" onclick="window.print();" class="btn btn-primary" style="margin-bottom: 10px">Cetak</a>

</body>
</html>


 <?php 
	include "footer.php"
 ?>