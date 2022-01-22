<?php 
	include "header.php"
 ?>
<div class="container">
 	<div class="page-header">
		<h3>Data Santri</h3>
	</div>
		<p><a class="btn btn-primary" style="margin-bottom: 10px" href="tambahsantri.php">Tambah data Santri</a></p>
		<br>
	<table class="table table-bordered table-striped">
	    <tr>
	    	<th><center>No</center></th>
	        <th><center>NIS</center></th>
	        <th><center>Nama Santri</center></th>
	        <th><center>Kode Kelas</center></th>
	        <th><center>Kategori</center></th>
	        <th><center>Tahun Ajaran</center></th>
	        <th><center>Biaya</center></th>
	        <th><center>Aksi</center></th>
	    </tr>
	    <?php 

			include "connect.php";
			$koneksi = mysqli_query($koneksi,"SELECT * from santri");
			$no = 1;
			foreach ($koneksi as $data) {
		?>
			<tr>
				<td width="40px" align="center"><?php echo $no++; ?></td>
				<td><?php echo $data['NIS']; ?></td>
				<td><?php echo $data['Nama']; ?></td>
				<td><?php echo $data['kd_kelas']; ?></td>
				<td><?php echo $data['jenis_santri']; ?></td>
				<td><?php echo $data['tahunajaran']; ?></td>
				<td><?php echo $data['biaya']; ?></td>
				<td width="190px" align="center">
					<a class="btn btn-warning btn-sm" href="edit_santri.php?idsantri=<?php echo $data['idsantri']; ?>">Edit</a>
					<a class="btn btn-danger btn-sm" href="hapussantri.php?idsantri=<?php echo $data['idsantri']; ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<p>Menghapus siswa berarti juga mengahpus tagihan siswa..</p>
</div>
<?php 
	include "footer.php"
 ?>