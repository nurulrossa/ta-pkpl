<?php include "headerr.php"; ?>

<?php 
include "connect.php";
$sqlEdit = mysqli_query($koneksi,"SELECT * FROM santri WHERE idsantri='$_GET[idsantri]'");
$e = mysqli_fetch_array($sqlEdit); 
 ?>

<div class="container">
 <div class="page-header">
    <h3><center>Edit Data Santri</center></h3>
    </div>
    <form method="POST" action="">
        <input type="hidden" name="idsantri" value="<?php echo $e['idsantri']; ?>">
        <table class="table">
            <tr>
                <td>NIS</td><td><input class="form-control" type="text" name="NIS" value="<?php echo $e['NIS']; ?>" maxlength="10"></td>
            </tr>
            <tr>
                <td>Nama Santri</td><td><input class="form-control" type="text" name="Nama" value="<?php echo $e['Nama'] ?>"></td>
            </tr>
            </tr>
            <td>Kelas</td>
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
                <td>Kategori Santri</td>
                <td><select name="jenis_santri">
                    <option class="form-control" value="" selected>-Pilih Kategori-</option>
                    <option value="PUTRA">PUTRA</option>
                    <option value="PUTRI">PUTRI</option></select>
                </td>
            </tr>
            <tr>
                <td>Tahun Ajaran</td>
                <td><input class="form-control" type="text" name="tahunajaran" value="<?php echo $e['tahunajaran'] ?>" readonly=""></td>
            </tr>
            <tr>
                <td>Biaya Uang BUlanan</td>
                <td><input class="form-control" type="text" name="biaya" value="<?php echo $e['biaya'] ?>" readonly=""></td>
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

<!-- Proses edit data -->
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $idsantri = $_POST['idsantri'];
    $NIS = $_POST['NIS'];
    $Nama = $_POST['Nama'];
    $kd_kelas = $_POST['kd_kelas'];
    $jenis_santri = $_POST['jenis_santri'];
    $tahunajaran = $_POST['tahunajaran'];
    $biaya = $_POST['biaya'];

    if($NIS==''){
        echo "Form Belum Lengkap!!!";
    }elseif ($Nama=='') {
        echo "Form Belum Lengkap!!!";
    }elseif ($jenis_santri=='') {
        echo "Form Belum Lengkap!!!";
    }elseif ($kd_kelas=='') {
        echo "Form Belum Lengkap!!!";
    }else{
        $update = mysqli_query($koneksi, "UPDATE santri SET NIS='$NIS',Nama='$Nama',kd_kelas='$kd_kelas',jenis_santri='$jenis_santri',tahunajaran='$tahunajaran',biaya='$biaya' WHERE idsantri='$idsantri'");
        
        if(!$update){
            echo "Update data gagal...";
        }else{
            header('location:santri.php');
        }
    }

 }
 ?>
</div>
<?php include "footer.php"; ?>