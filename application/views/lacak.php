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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

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

   <br />
   <br />
   <h2 align="center" class="page-header" style="color:yellow; text-shadow: 1px 0.5px #ccc7c7; border-color: white; border-width: 5px; font-weight: bold;">LACAK LAPORAN</h2><br /> <br>
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon" style="background-color: #7a7a76; color: white; font-weight: bold;">Cari</span>
     <input type="text" style="background-color: #faff9e;" name="search_text" id="search_text" placeholder="Lacak Laporan dengan Kode Laporan" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  </div>
  </div>
  <div style="clear:both"></div>
  <br />
  <br />
  <br />
  <br />
  <br> <br> <br>
 </body>

<?php 
require 'footer.php'; 
?>

</html>