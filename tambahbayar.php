<?php include "header.php"; ?>
<div class="container">
	<div class="page-header">
	<h3><center>Transaksi Pembayaran</center></h3>
	</div>
	<form action="simpanbayar.php" method="POST">
		<table class="table">
			<tr>
				<td>ID</td><td><input class="form-control" type="text" name="ID"></td>
			</tr>
			<tr>
				<td>NIS</td><td><input class="form-control" type="text" name="NIS"></td>
			</tr>
			<tr>
				<td>Tanggal Pembayaran</td><td><input class="form-control" type="text" name="tgl_bayar"></td>
			</tr>
			<tr>
				<td>Jumlah Pembayaran</td><td><input class="form-control" type="text" name="jumlah_bulan"></td>
			</tr>
			<tr>
				<td>Bulan</td><td><input class="form-control" type="text" name="nama_bulan"></td>
			</tr>
			<tr>
				<td>Jenis Pembayaran</td><td><input class="form-control" type="text" name="jenis_bayar"></td>
			</tr>
			<tr>
				<td>Total Pembayaran</td><td><input class="form-control" type="text" name="jumlah_bayar"></td>
			</tr>
			<tr>
				<td>Keterangan</td><td><input class="form-control" type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td>NIP</td><td><input class="form-control" type="text" name="NIP"></td>
			</tr>
			<tr>
				<td></td>
				<td><button class="btn btn-success" type="submit" value="simpan">Simpan</button></td>
			</tr>
		</table>
	</form>
</div>
<?php 
	include "footer.php"
 ?>