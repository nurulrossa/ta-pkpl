<?php 
	include "header.php"
 ?>
<div class="container">
 	<div class="page-header">
		<h3>Data Petugas</h3>
	</div>
		<p><a class="btn btn-primary" style="margin-bottom: 10px" href="tambahpetugas.php">Tambah data Petugas</a></p>
		<br>
	<table class="table table-bordered table-striped">
	    <tr>
	    	<th><center>No</center></th>
	        <th><center>NIP</center></th>
	        <th><center>Nama Petugas</center></th>
	        <th><center>Username</center></th>
	        <th><center>Password</center></th>
	        <th><center>Status</center></th>
	        <th><center>Aksi</center></th>
	    </tr>
	    <?php 

			include "connect.php";
			$koneksi = mysqli_query($koneksi,"SELECT * FROM petugas");
			$no = 1;
			foreach ($koneksi as $data) {
		?>
			<tr>
				<td width="40px" align="center"><?php echo $no++; ?></td>
				<td><?php echo $data['NIP']; ?></td>
				<td><?php echo $data['nama_ptgs']; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['password']; ?></td>
				<td><?php echo $data['status']; ?></td>
				<td width="190px" align="center">
					<a class="btn btn-warning btn-sm" href="editpetugas.php?idpetugas=<?php echo $data['idpetugas']; ?>">Edit</a>
					<a class="btn btn-danger btn-sm" href="hapuspetugas.php?idpetugas=<?php echo $data['idpetugas']; ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div> 
<?php 
	include "footer.php"
 ?>