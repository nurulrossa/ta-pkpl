<?php 
	include "header.php"
 ?>
 <div class="container">
 	<div class="page-header">
		<h3>Data Kelas</h3>
	</div>
		<p><a class="btn btn-primary" style="margin-bottom: 10px" href="tambahkelas.php">Tambah Data Kelas</a></p>
		<br>
	<table class="table table-bordered table-striped">
	    <tr>
	    	<th><center>No</center></th>
	        <th><center>Kelas</center></th>
	        <th><center>Jenjang Sekolah</center></th>
	        <th><center>Kapasitas</center></th>
	        <th><center>Jenis</center></th>
	        <th><center>Aksi</center></th>
	    </tr>
	    <?php 

			include "connect.php";
			$koneksi = mysqli_query($koneksi,"SELECT * FROM kelas");
			$no = 1;
			foreach ($koneksi as $data) {
		?>
			<tr>
				<td width="40px" align="center"><?php echo $no++; ?></td>
				<td><?php echo $data['nama_kls']; ?></td>
				<td><?php echo $data['jenjangsekolah']; ?></td>
				<td><?php echo $data['kapasitas']; ?></td>
				<td><?php echo $data['jenis_kelas']; ?></td>
				<td width="190px" align="center">
					<a class="btn btn-warning btn-sm" href="editkelas.php?kd_kelas=<?php echo $data['kd_kelas']; ?>">Edit</a>
					<a class="btn btn-danger btn-sm" href="hapuskelas.php?kd_kelas=<?php echo $data['kd_kelas']; ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		
</div>
<?php 
	include "footer.php"
 ?>