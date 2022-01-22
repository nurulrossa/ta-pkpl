<?php include "header.php" ?>
<style>
	.error {color: #FF0000;}
</style>

<div class="container">
 	<div class="page-header">
		<h3>Transaksi Pembayaran Uang Bulanan Santri</h3>
	</div>
	<form method="GET" action="">
	<table class="table">
	<tr>
		<td>NIS<span class="error">*</span></td><td><input class="form-control" type="text" name="NIS"></td>
	</tr>
	<tr>
		<td></td>
		<td><input class="btn btn-success" type="submit" name="cari" value="Cari Santri"></td>
	</tr>
	</table>	
	</form>

<?php 
include "connect.php";
if(isset($_GET['NIS']) && $_GET['NIS']!=''){
	$sqlsantri = mysqli_query($koneksi, "SELECT * FROM santri WHERE NIS='$_GET[NIS]'");
	$ds = mysqli_fetch_array($sqlsantri);
	$NIS = $ds['NIS'];
?>

<h3>Biodata Santri</h3>
<table class="table table-striped">
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td><?php echo $ds['NIS']; ?></td>
	</tr>
	<tr>
		<td>Nama Santri</td>
		<td>:</td>
		<td><?php echo $ds['Nama']; ?></td>
	</tr>
	<tr>
		<td>Kode Kelas</td>
		<td>:</td>
		<td><?php echo $ds['kd_kelas']; ?></td>
	</tr>
	<tr>
		<td>Tahun Ajaran</td>
		<td>:</td>
		<td><?php echo $ds['tahunajaran']; ?></td>
	</tr>
</table>

<h3>Tagihan Uang Bulanan Santri</h3><br>
<table class="table table-bordered table-striped">
	<tr>
		<th>No</th>
		<th>Bulan</th>
		<th>Jatuh Tempo</th>
		<th>No. Pembayaran</th>
		<th>Tanggal Bayar</th>
		<th>Jumlah</th>
		<th>Keterangan</th>
		<th>Bayar</th>
	</tr>

	<?php 
	include "connect.php";
	$koneksi = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE idsantri='$ds[idsantri]' ORDER BY jatuhtempo ASC");
	$no=1;
	foreach ($koneksi as $data) {
		?>
			<tr>
				<td width="40px" align="center"><?php echo $no++; ?></td>
				<td><?php echo $data['bulan']; ?></td>
				<td><?php echo $data['jatuhtempo']; ?></td>
				<td><?php echo $data['nobayar']; ?></td>
				<td><?php echo $data['tgl_bayar']; ?></td>
				<td><?php echo $data['jumlah_bayar']; ?></td>
				<td><?php echo $data['keterangan']; ?></td>
				<td align="center">
					<?php 
					if($data['nobayar']==''){
						?>
						<a href="proses_transaksi.php?NIS=<?php echo $NIS; ?> &act=bayar&id=<?php echo $data['idspp']; ?>">Bayar</a>
						<?php
					}else{
						echo "-";
					} 
					 ?>
				</td>
			</tr>
			<?php } ?>
		</table>

<?php
}else{
	echo "<span class=error>* NIS belum diisi!!!</span>";
}
 ?>

<p style="color: red">* Pembayaran Uang Bulanan Santri dilakukan dengan cara <br> mencari tagihan santri dengan NIS melalui form di atau <br>   kemudian proses pembayaran </p>
</div>

<?php include "footer.php" ?>