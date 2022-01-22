<?php 
session_start();
if(!isset($_SESSION['Login'])){
	header('location:login.php');
} ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Data Santri</title>
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
	<h3><center>PONDOK PESANTREN HARISUL KHAIRA'AT BUMI HIJRAH TIDORE<br/>LAPORAN DATA KELAS</center></h3>
	<hr/>
	</div>
	<hr/>
	<table class="table table-bordered table-striped" width="100%" border="1" cellspacing="0" cellpadding="4">
		<tr>
			<th>No.</th>
			<th>Kode Kelas</th>
			<th>Jenjang Sekolah</th>
			<th>Nama Kelas</th>
			<th>Kapasitas</th>
			<th>Kategori</th>
			<th class="no-print"><center>Aksi</center></th>
		</tr>
		<?php 
		include "connect.php";
		$sqlkelas = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY kd_kelas ASC");
		$no=1;
		$total=0;
		while ($d=mysqli_fetch_array($sqlkelas)) {
		echo "<tr>
			<td align='center'>$no</td>
			<td align='center'>$d[kd_kelas]</td>
			<td align='center'>$d[jenjangsekolah]</td>
			<td align='center'>$d[nama_kls]</td>
			<td align='center'>$d[kapasitas]</td>
			<td align='center'>$d[jenis_kelas]</td>"
			?>
			<td class="no-print" width="190px" align="center">
					<a class="btn btn-danger btn-sm" href="lihatkelas.php?kd_kelas=<?php echo $d['kd_kelas']; ?>">Lihat</a>
				</td>
				<?php  
		echo "</tr>";
		$no++;
		$total += $d['kapasitas'];
	}
	 ?>
	 <tr>
	 	<td colspan="4" align="center"><b>Total Santri</b></td>
	 	<td align="right"><center><b><?php echo $total; ?></b></center></td>
	 	<td></td>
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