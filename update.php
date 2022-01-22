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
            header("location:santri.php");
        }
    }

 }
 ?>