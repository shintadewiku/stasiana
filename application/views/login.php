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
      <a class="navbar-brand" style="color: white" href="<?php echo site_url('Welcome/index')?>">STASIANA</a>
      <br><br>
      <h6>Sistem Pelaporan Lokasi Rawan Bencana</h6>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="color: white" href="<?php echo site_url('Welcome/index')?>">Beranda</a></li>
      <li><a style="color: white" href="<?php echo site_url('Welcome/lacak')?>">Lacak</a></li>
      <li><a style="color: white" href="<?php echo site_url('Welcome/berita')?>">Berita</a></li>
      <li><a style="color: white" href="<?php echo site_url('Welcome/bantuan')?>">Kontak</a></li>
    </ul>
  </div>
</nav>
<div id="body" >
  
<div class="container">
<div class = "text-center">

<div><h2 class="badge badge-pill badge-dark" style="color: white; font-weight: bold; font-size: 30px;" >LOGIN SEBAGAI</h2>  </div> <br>

<a class= "btn btn-danger btn-lg btn-block" style = "color: white; font-weight: bold;" href="<?php echo site_url('Welcome/login_masyarakat')?>">MASYARAKAT
      <p style="font-size: 16px; color: #e5d7d7;">Pelapor</p></a>

<a class="btn btn-warning btn-lg btn-block" style = "color: white; font-weight: bold" href="<?php echo site_url('Welcome/login_bnpb')?>">BNPB 
      <p style="font-size: 16px; color: #e5d7d7;">Badan Nasional Penanggulangan Bencana</p> </a>

<a class="btn btn-success btn-lg btn-block" style = "color: white; font-weight: bold" href="<?php echo site_url('Welcome/login_bpbd')?>">BPBD 
      <p style="font-size: 16px; color: #e5d7d7;"">Badan Penanggulangan Bencana Daerah</p> </a>

<a class="btn btn-info btn-lg btn-block" style = "color: white; font-weight: bold" href="<?php echo site_url('Welcome/login_dinas')?>">DINAS PUPR
      <p style="font-size: 16px; color: #e5d7d7;">Dinas Pekerjaan Umum dan Penataan Ruang</p> </a>
<br> <br>

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