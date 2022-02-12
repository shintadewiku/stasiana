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
<div id="body" > <br> <br>
  <?php require 'keluar.php' ?> <br>
<div class="container">
	<!-- <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" style="background-color: navy; opacity: 0.8; color: white;">DATA LAPORAN</a>
</nav> -->
	<!-- <a href="laporan" class="btn btn-lg" style="background-color: white; color: #2262cc;">DATA LAPORAN</a> --> <br> <br> <br>
	<!-- <tr><h2 style="text-align: left; color: black; background-color: white;">DATA LAPORAN</h2></tr> -->
	<div class="table-responsive">
	<h2 style="color: white">Data Laporan Terverifikasi</h2> <br>
		<table style="background-color: white; opacity: 0.9; text-align: center; border-color: white;" class="table table-hover"; border="0.5"> 
			<tr style="background-color: #2262cc; opacity: 0.9; text-align: center; color: white; font-size: 14px; ">
			<th style="text-align: center; white-space: nowrap;">Kode Laporan</th>
			<th style="text-align: center; white-space: nowrap;">Nama Lengkap</th>
			<th style="text-align: center; white-space: nowrap;">Nomor KTP</th>
			<th style="text-align: center; white-space: nowrap;">Email</th>
			<th style="text-align: center; white-space: nowrap;">Nomor Telepon</th>
			<th style="text-align: center; white-space: nowrap;">Jenis Bencana</th>
			<th style="text-align: center; white-space: nowrap;">Provinsi</th>
			<th style="text-align: center; white-space: nowrap;">Kabupaten/Kota</th>
			<th style="text-align: center; white-space: nowrap;">Kecamatan</th>
			<th style="text-align: center; white-space: nowrap;">Alamat Lengkap</th>
			<th style="text-align: center; white-space: nowrap;">Kode Pos</th>
			<th style="text-align: center; white-space: nowrap;">Lokasi</th>
			<th style="text-align: center; white-space: nowrap;">Deskripsi Laporan</th>
			<th style="text-align: center; white-space: nowrap;">Bukti Laporan (Foto)</th>
			<th style="text-align: center; white-space: nowrap;" colspan="2">Action</th>
			</tr>

			<?php

			if( ! empty($data_laporan)){
			$no = 1;
			foreach ($data_laporan as $data) {
			echo "<tr>";
				// echo "<td>".$no++; "</td>";
				echo "<td>".$data->no."</td>";
				echo "<td>".$data->nama."</td>";
				echo "<td>".$data->ktp."</td>";
				echo "<td>".$data->email."</td>";
				echo "<td>".$data->tel."</td>";
				echo "<td>".$data->jenis."</td>";
				echo "<td>".$data->kota."</td>";
				echo "<td>".$data->kec."</td>";
				echo "<td>".$data->provinsi."</td>";
				echo "<td>".$data->alamat."</td>";
				echo "<td>".$data->pos."</td>";
				echo "<td>".$data->lokasi."</td>";
				echo "<td>".$data->deskripsi."</td>";
				echo "<td><img src='".base_url("images/".$data->bukti)."'width='100' height='100'></td>";
				echo "<td><a href=".site_url('Welcome/valid/').$data->no.">Divalidasi</a></td>";
				echo "<td><a href=".site_url('Welcome/validTolak/').$data->no.">Validasi Ditolak</a></td>";
					echo "</tr>";
			
 }
 } 
 ?>
		</table>
		
	</div>

</div>
</div>
</div>

</body> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php require 'footer.php' ?>
</html>