<?php 
session_start();
if(isset($_SESSION['Login'])){
	include "connect.php";
}
?>

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
	<h3>Laporan Data Santri</h3>
	<hr/>
	<table width="100%" border="1" cellspacing="0" cellpadding="4">
		<tr>
			<th>No.</th>
			<th>NIS</th>
			<th>Nama Santri</th>
			<th>Kategori</th>
			<th>Tahun Ajaran</th>
			<th>Kelas</th>
		</tr>
		<?php 
		include "connect.php";
		$sqlsantri = mysqli_query($koneksi, "SELECT * FROM santri INNER JOIN kelas ON santri.kd_kelas=kelas.kd_kelas ORDER BY santri.kd_kelas ASC");
		$no=1;
		$total=0;
		while ($d=mysqli_fetch_array($sqlsantri)) {
		echo "<tr>
			<td align='center'>$no</td>
			<td align='center'>$d[NIS]</td>
			<td align='center'>$d[Nama]</td>
			<td align='center'>$d[jenis_santri]</td>
			<td align='center'>$d[tahunajaran]</td>
			<td align='center'>$d[nama_kls]</td>
		</tr>";
		$no++;
	}
	 ?>
	 <tr>
	 	<td colspan="6" align="center"><b>Total Santri   <?php echo $no-1; ?></b></td>
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
	<a href="#" class="no-print" onclick="window.print();" class="btn btn-primary" style="margin-bottom: 10px">Cetak</a>

</body>
</html>