<?php 
session_start();
if(!isset($_SESSION['Login'])){
	header('location:login.php');
} 
include "connect.php";
$kd_kelas = $_GET['kd_kelas'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Kelas <?php echo $kd_kelas; ?> </title>
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
<div class="container">
 	<div class="page-header">
		<h3><center>PONDOK PESANTREN HARISUL KHAIRA'AT BUMI HIJRAH TIDORE<br/>Laporan Data Santri Kelas <?php echo $kd_kelas; ?></center></h3>
	<hr/>
	</div>
	<hr/>
	<table class="table table-bordered table-striped" width="100%" border="1" cellspacing="0" cellpadding="4">
	    <tr>
	    	<th><center>No</center></th>
	        <th><center>NIS</center></th>
	        <th><center>Nama Santri</center></th>
	        <th><center>Kategori</center></th>
	        <th><center>Tahun Ajaran</center></th>
	    </tr>
	    <?php 

			include "connect.php";
			$koneksi = mysqli_query($koneksi,"SELECT * from santri WHERE kd_kelas='$kd_kelas'");
			$no = 1;
			foreach ($koneksi as $data) {
		?>
			<tr>
				<td width="40px" align="center"><?php echo $no++; ?></td>
				<td><?php echo $data['NIS']; ?></td>
				<td><?php echo $data['Nama']; ?></td>
				<td><?php echo $data['jenis_santri']; ?></td>
				<td><?php echo $data['tahunajaran']; ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="3" align="center"><b>Total</b></td>
	 			<td align="center"><b><?php echo $no-1 ; ?></b></td>
	 			<td></td>
			</tr>
		</table>
</div>
<?php 
	include "footer.php"
 ?>