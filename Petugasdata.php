<?php 
include "header.php"; ?>

<?php
include "connect.php";

$result = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY idpetugas ASC"); ?>


    <div class="container mt-4">
    <h1>Data Petugas</h1>

    <div class="row">
 <div class="col">
 <a href="petugasCreate.html">
 <button type="button" class="btn btn-primary mt-4">Tambah data</button>
 </a>
 </div>
 <div class="col-xs">
 <form class="form-inline my-2 my-lg-0 " action="index.php" method="get">
 <input class="form-control mr-sm-2 mt-4" type="search"
 placeholder="Search by name" aria-label="Search" name="cari">
 <button class="btn btn-outline-success mt-4"
type="submit">Search</button>
 </form>
 <br>
 <?php
 if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "Hasil pencarian : ".$cari."";
 }
 ?>
 </div>
 </div>


<table class="table mt-4">
    <thead class="thead-dark">
        <tr>
            <th scope="col">NIP</th>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
        </tr>
    </thead>
    <tbody>

    <?php 
    if(isset($_GET['cari'])){
$cari = $_GET['cari'];

 $result = mysqli_query($koneksi, "SELECT * FROM petugas
 WHERE nama_ptgs like '%".$cari."%'
 ");
}else{
$result = mysqli_query($koneksi, "SELECT * FROM petugas
ORDER BY idpetugas ASC");
 }


 
    while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['NIP']."</td>";
		echo "<td>".$res['nama_ptgs']."</td>";
		echo "<td>".$res['username']."</td>";	
		echo "<td>".$res['password']."</td>";
		echo "<td><a href=\"petugasEdit.php?idpetugs=$res[idpetugs]\">Edit</a> | <a href=\"deletePetugas.php?idpetugs=$res[idpetugs]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
    </tbody>
</table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    </div>
</body>

</html>