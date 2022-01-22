<?php include "header.php"; ?>

<?php  
    include "connect.php";
    $kd_kelas = $_GET['kd_kelas'];
    $koneksi = mysqli_query($koneksi,"SELECT * FROM kelas WHERE kd_kelas='$kd_kelas'");
    foreach ($koneksi as $data) {
?>

<div class="container">
    <div class="page-header">
    <h3><center>Edit Data Kelas</center></h3>
    </div>
    <form method="POST" action="">
        <table class="table">
            <tr>
                <td>Jenjang Sekolah</td>
                <td>
                    <input type="hidden" name="kd_kelas" value="<?php echo $data['kd_kelas'] ?>">
                    <input class="form-control" type="text" name="jenjang_sekolah" value="<?php echo $data['jenjangsekolah'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Kelas</td>
                <td>
                    <input type="hidden" name="kd_kelas" value="<?php echo $data['kd_kelas'] ?>">
                    <input class="form-control" type="text" name="nama_kls" value="<?php echo $data['nama_kls'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kapasitas</td>
                <td>
                    <input type="hidden" name="kd_kelas" value="<?php echo $data['kd_kelas'] ?>">
                    <input class="form-control" type="text" name="kapasitas" value="<?php echo $data['kapasitas'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <input type="hidden" name="kd_kelas" value="<?php echo $data['kd_kelas'] ?>">
                    <input class="form-control" type="text" name="jenis_kelas" value="<?php echo $data['jenis_kelas'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
<?php } ?>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $jenjang_sekolah = $_POST['jenjang_sekolah'];
    $nama_kls = $_POST['nama_kls'];
    $kapasitas = $_POST['kapasitas'];
    $jenis_kelas = $_POST['jenis_kelas'];
    
    if ($jenjang_sekolah=='') {
        echo "Form Belum Lengkap!!!";
    }elseif ($nama_kls=='') {
        echo "Form Belum Lengkap!!!";
    }elseif ($kapasitas=='') {
        echo "Form Belum Lengkap!!!";
    }elseif ($jenis_kelas=='') {
        echo "Form Belum Lengkap!!!";
    }else{
        $simpan = mysqli_query($koneksi, "UPDATE kelas SET jenjangsekolah='$jenjang_sekolah',nama_kls='$nama_kls',kapasitas='$kapasitas',jenis_kelas='$jenis_kelas' WHERE kd_kelas = '$kd_kelas'");
        if (!$simpan) {
            echo "Edit data gagal!!";
        }else{
            header('location:kelas.php');
        }
    }
}
 ?>

</div>
<?php 
    include "footer.php"
 ?>