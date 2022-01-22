<?php 
	include "header.php"
 ?>
<div class="container">
	<h3><center>Laporan</center></h3><br/><br/>
	<li><a href="laporan_data_santri.php">Laporan Data Santri</a></li><br/>
	<li><a href="laporan_data_kelas.php">Laporan Data Kelas</a></li><br/>
	<li>
		<strong>Laporan Pembayaran</strong><br/><br/>
		<form method="GET" action="laporan_pembayaran.php" target="_blank">
			Mulai Tanggal <input type="date" name="tgl1" value="<?php echo date('Y-m-d'); ?>">
			Sampai Tanggal <input type="date" name="tgl2" value="<?php echo date('Y-m-d'); ?>">
			<input type="submit" value="tampilkan" >
		</form>
	</li>

</div>
 <?php 
	include "footer.php"
 ?>