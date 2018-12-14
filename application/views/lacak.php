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
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url('welcome/index')?>">STASIANA</a>
      <br><br>
      <h6>Sistem Pelaporan Lokasi Rawan Bencana</h6>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url('welcome/index')?>">Beranda</a></li>
      <li class="active"><a href="<?php echo site_url('welcome/lacak')?>">Lacak</a></li>
      <li><a href="<?php echo site_url('welcome/berita')?>">Berita</a></li>
      <li><a style="color: white"; href="<?php echo site_url('welcome/bantuan')?>">Kontak</a></li>
          </ul>
  </div>
</nav>

<div id="container">
	<h1>Lacak Laporan dengan ID Laporan</h1>

	<div id="body">
		<a href="<?php echo site_url('welcome/index')?>">Kembali </a>
		<form action="<?php echo site_url('welcome/insert')?>" method="POST">
			ID Laporan <br>
			<input type="text" name="alamat"/><br>
			<h5>Masukkan kode laporan yang anda dapatkan ketika selesai melakukan pelaporan</h5>
    <button type="submit" class="btn btn-info">
      <span class="glyphicon glyphicon-search"></span> LACAK
    </button>

		</form>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>