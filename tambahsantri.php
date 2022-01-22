<?php include "header.php"; ?>
<style>
	.error {color: #FF0000;}
</style>
<div class="container">
	<div class="page-header">
	<h3><center>Menambah Data Santri</center></h3>
	</div>
	<form method="POST" action="">
		<table class="table">
			<tr>
				<td>NIS<span class="error">*</span></td><td><input class="form-control" type="text" name="NIS" maxlength="10"></td>
			</tr>
			<tr>
				<td>Nama Santri<span class="error">*</span></td><td><input class="form-control" type="text" name="Nama"></td>
			</tr>
			<td>Kelas<span class="error">*</span></td>
				<td>
					<select name="kd_kelas">
						<option class="form-control" value="" selected>-Pilih Kelas-</option>
						<?php  
					    include "connect.php";
					    $koneksi = mysqli_query($koneksi,"SELECT * FROM kelas ORDER BY kd_kelas");
					    foreach ($koneksi as $data) {
					  ?>
					  <option class="form-control" value=<?php echo $data['kd_kelas'] ?>><?php echo $data['kd_kelas']; ?></option>
  					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kategori Santri<span class="error">*</span></td>
				<td><select name="jenis_santri">
					<option value="PUTRA">PUTRA</option>
					<option value="PUTRI">PUTRI</option></select>
				</td>
			</tr>
			<tr>
			<tr>
				<td>Tahun Ajaran</td>
				<td><input class="form-control" type="text" name="tahunajaran" value="2020/2021" readonly=""></td>
			</tr>
			<tr>
				<td>Biaya Uang BUlanan</td>
				<td><input class="form-control" type="text" name="biaya" value="500000" readonly=""></td>
			</tr> 
			<tr>
				<td>Jatuh Tempo Pertama</td>
				<td><input class="form-control" type="text" name="jatuhtempo" value="2020-07-10"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-success" type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>

<!-- Simpan data -->
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connect.php';
	$NIS = $_POST['NIS'];
	$Nama = $_POST['Nama'];
	$kd_kelas = $_POST['kd_kelas'];
	$jenis_santri = $_POST['jenis_santri'];
	$tahunajaran = $_POST['tahunajaran'];
	$biaya = $_POST['biaya'];
	$awaltempo =$_POST['jatuhtempo'];

	$bulanIndo = array(
		'01' => 'Januari',
		'02' => 'Februari',
		'03' => 'Maret',
		'04' => 'April',
		'05' => 'Mei',
		'06' => 'Juni',
		'07' => 'Juli',
		'08' => 'Agustus',
		'09' => 'September',
		'10' => 'Oktober',
		'11' => 'November',
		'12' => 'Desember'
	);

	if($NIS==''){
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}elseif ($Nama=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}elseif ($jenis_santri=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}elseif ($kd_kelas=='') {
		echo "<span class=error>* Form Belum Lengkap!!!</span>";
	}else{
		$simpan = mysqli_query($koneksi, "INSERT INTO santri(NIS,Nama,jenis_santri,tahunajaran,biaya,kd_kelas) VALUES('$NIS','$Nama','$jenis_santri','$tahunajaran','$biaya','$kd_kelas')");
		if (!$simpan) {
			echo "Simpan data gagal!!";
		}else{
			//ambil data terakhir
			$ds = mysqli_fetch_array(mysqli_query($koneksi,"SELECT idsantri FROM santri ORDER BY idsantri DESC LIMIT 1"));
			$idsantri = $ds['idsantri'];

			for($i=0; $i<12; $i++){
				$jatuhtempo = date("Y-m-d", strtotime("+$i month", strtotime($awaltempo)));
				$bulan = $bulanIndo[date('m', strtotime($jatuhtempo))]." ".date('Y',strtotime($jatuhtempo));

				mysqli_query($koneksi,"INSERT INTO pembayaran(idsantri,jatuhtempo,bulan,jumlah_bayar) VALUES ('$idsantri','$jatuhtempo','$bulan','$biaya')");
			}
			header('location:santri.php');
		}
	}
}
 ?>

</div>
<?php 
	include "footer.php"
 ?>