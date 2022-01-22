<?php include "header.php"; ?>

<?php  
    include "connect.php";
    $idpetugas = $_GET['idpetugas'];
    $koneksi = mysqli_query($koneksi,"SELECT * FROM petugas WHERE idpetugas='$idpetugas'");
    foreach ($koneksi as $data) {
?>

<div class="container">
    <div class="page-header">
    <h3><center>Edit Data Petugas</center></h3>
    </div>
    <form method="POST" action="">
        <table class="table">
            <tr>
                <td>NIP</td>
                <td>
                    <input type="hidden" name="idpetugas" value="<?php echo $data['idpetugas'] ?>">
                    <input class="form-control" type="text" name="NIP" value="<?php echo $data['NIP'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Petugas</td>
                <td>
                    <input type="hidden" name="idpetugas" value="<?php echo $data['idpetugas'] ?>">
                    <input class="form-control" type="text" name="nama_ptgs" value="<?php echo $data['nama_ptgs'] ?>">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="hidden" name="idpetugas" value="<?php echo $data['idpetugas'] ?>">
                    <input class="form-control" type="text" name="username" value="<?php echo $data['username'] ?>">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="hidden" name="idpetugas" value="<?php echo $data['idpetugas'] ?>">
                    <input class="form-control" type="text" name="password" value="<?php echo $data['password'] ?>">
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <input type="hidden" name="idpetugas" value="<?php echo $data['idpetugas'] ?>">
                    <input class="form-control" type="text" name="status" value="<?php echo $data['status'] ?>">
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
    $NIP = $_POST['NIP'];
    $nama_ptgs = $_POST['nama_ptgs'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    if($NIP==''){
        echo "Form Belum Lengkap!!!";
    }elseif ($nama_ptgs=='') {
        echo "Form Belum Lengkap!!!";
    }elseif ($username=='') {
        echo "Form Belum Lengkap!!!";
    }elseif ($password=='') {
        echo "Form Belum Lengkap!!!";
    }elseif ($status=='') {
        echo "Form Belum Lengkap!!!";
    }else{
        $simpan = mysqli_query($koneksi, "UPDATE petugas SET nama_ptgs='$nama_ptgs',username='$username',password='$password',status='$status' WHERE idpetugas = '$idpetugas'");
        if (!$simpan) {
            echo "Edit data gagal!!";
        }else{
            header('location:petugas.php');
        }
    }
}
 ?>

</div>
<?php 
    include "footer.php"
 ?>