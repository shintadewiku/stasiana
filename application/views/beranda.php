<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sistem Pelaporan Lokasi Rawan Bencana</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-image: url(https://images2.alphacoders.com/719/719970.jpg)">
<nav style="background: transparent; color: white; border-color: transparent;" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <!-- <img src="logo stasiana.png" > -->
      <a class="navbar-brand" style="color: white" href="<?php echo site_url('welcome/index')?>">STASIANA</a>
      <br><br>
      <h6>Sistem Pelaporan Lokasi Rawan Bencana</h6>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a style="color: black" href="<?php echo site_url('welcome/index')?>">Beranda</a></li>
      <li><a style="color: white"; href="<?php echo site_url('welcome/lacak')?>">Lacak</a></li>
      <li><a style="color: white"; href="<?php echo site_url('welcome/berita')?>">Berita</a></li>
      <li><a style="color: white"; href="<?php echo site_url('welcome/bantuan')?>">Kontak</a></li>
    </ul>
  </div>
</nav>
<div id="body" >
<div id="container">
<div class="jumbotron text-center" style="background-color: transparent; color: white">
  <h1>STASIANA</h1>
  <p>Sistem Pelaporan Lokasi Rawan Bencana</p> 
  <h5>Media pelaporan masyarakat terkait informasi potensi rawan bencana di daerah sekitar</h5> <br> <br> <br>
  <button class="btn btn-warning" style="background-color: #D2691E; "><a style="color: white" href="<?php echo site_url('welcome/login')?>">LOGIN SEBAGAI</a></button>
</div>
</div>
</div>
		
	</div>
  

</div>

</body>

<?php 
require 'footer.php'; 
?>

</html>