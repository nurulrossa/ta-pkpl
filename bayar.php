<?php 
	include "header.php"
 ?> 
 <div class="container">
 	<div class="page-header">
		<h3>Data Transaksi</h3>
	</div>
	<table class="table table-bordered table-striped">    
		<tr>
	    	<th>No</th>
	        <th>NIS</th>
	        <th>Nama</th>
	        <th>Kelas</th>
	        <th>Sekolah</th>
	        <th>Kategori</th>
	        <th>Jatuh Tempo</th>
	        <th>Bulan</th>
	        <th>Nomor Pembayaram</th>
	        <th>Tanggal Bayar</th>
	        <th>Jumlah</th>
	        <th>Keterangan</th>
	        <th>Petugas</th>
	        <th>Aksi</th>
	    </tr>
	    <?php 

			include "connect.php";
			$koneksi = mysqli_query($koneksi,"SELECT pembayaran.*,santri.NIS,santri.Nama,santri.jenis_santri,kelas.nama_kls,kelas.jenjangsekolah,petugas.nama_ptgs FROM pembayaran INNER JOIN petugas ON pembayaran.idpetugas=petugas.idpetugas INNER JOIN santri ON pembayaran.idsantri=santri.idsantri INNER JOIN kelas ON santri.kd_kelas=kelas.kd_kelas ORDER BY nobayar ASC");
			$no = 1;
			$total = 0;
			foreach ($koneksi as $data) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['NIS']; ?></td>
				<td><?php echo $data['Nama']; ?></td>
				<td><?php echo $data['nama_kls']; ?></td>
				<td><?php echo $data['jenjangsekolah'] ?></td>
				<td><?php echo $data['jenis_santri'] ?></td>
				<td><?php echo $data['jatuhtempo'] ?></td>
				<td><?php echo $data['bulan'] ?></td>
				<td><?php echo $data['nobayar'] ?></td>
				<td><?php echo $data['tgl_bayar'] ?></td>
				<td><?php echo $data['jumlah_bayar'] ?></td>
				<td><?php echo $data['keterangan'] ?></td>
				<td><?php echo $data['nama_ptgs'] ?></td>
				<td>
					<a class="btn btn-warning btn-sm" href="editbayar.php?ID=<?php echo $data['idspp']; ?>">Edit</a>
					<a class="btn btn-danger btn-sm" href="hapusbayar.php?ID=<?php echo $data['idspp']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
				$total += $data['jumlah_bayar'];
			 } ?>
			<tr>
	 			<td colspan="10" align="center"><b>Total</b></td>
			 	<td align="right"><b><?php echo $total; ?></b></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
	 		</tr>
		</table>
		</div> 
<?php 
	include "footer.php"
 ?>