<?php 
session_start();
if(!isset($_SESSION['Login'])){
	header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./desain/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/sticky-footer-navbar/">

    <title>Aplikasi Pembayaran Uang Bulanan Santri</title>

    <!-- Bootstrap core CSS -->
    <link href="./desain/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./desain/style.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>
<body>
	 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Aplikasi Pembayaran Uang Bulanan Santri</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="petugas.php">Data Petugas</a></li>
            <li><a href="kelas.php">Data Kelas</a></li>
            <li><a href="santri.php">Data Santri</a></li>
            <li><a href="bayar.php">Data Transaksi</a></li>
            <li><a href="transaksi.php">Transaksi</a></li>
            <li><a href="laporan.php">Laporan</a></li>
            <li><a href="logout.php">Log Out</a></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>