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
      <a class="navbar-brand" style="color: white" href="<?php echo site_url('welcome/index')?>">STASIANA</a>
      <br><br>
      <h6>Sistem Pelaporan Lokasi Rawan Bencana</h6>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="color: white" href="<?php echo site_url('welcome/index')?>">Beranda</a></li>
      <li><a style="color: white" href="<?php echo site_url('welcome/lacak')?>">Lacak</a></li>
      <li><a style="color: white" href="<?php echo site_url('welcome/berita')?>">Berita</a></li>
      <li><a style="color: white" href="<?php echo site_url('welcome/bantuan')?>">Kontak</a></li>
    </ul>
  </div>
</nav>
<div style="background-color: white; opacity: 0.9" id="body" >
  
<div class="container">
	<h1 style="text-align: center">Sistem Pelaporan Lokasi Rawan Bencana</h1> <br> <br>

	<div id="body">
		<!-- <button type="button" class="btn btn-success"><a style="color: white" href="<?php echo site_url('welcome/form_lapor')?>"> <span style="text-align:left"> Lapor </a> </button> <br> <br> -->
		<table style="text-align: center" class="table table-hover"; border="1">
			<tr style="background-color: black; opacity: 0.9; color: white">
			<td>No</td>
			<td>Nama Lengkap</td>
			<td>Nomor KTP</td>
			<td>Email</td>
			<td>Nomor Telepon</td>
			<td>Jenis Bencana</td>
			<td>Alamat Lengkap</td>
			<td>Provinsi</td>
			<td>Kode Pos</td>
			<td>Lokasi</td>
			<td>Deskripsi Laporan</td>
			<td>Bukti Laporan (Foto)</td>
			</tr>

			<?php

			if( ! empty($data_laporan)){
			$no = 1;
			foreach ($data_laporan as $data) {
			echo "<tr>";
				echo "<td>".$no++; "</td>";
				echo "<td>".$data->nama."</td>";
				echo "<td>".$data->ktp."</td>";
				echo "<td>".$data->email."</td>";
				echo "<td>".$data->tel."</td>";
				echo "<td>".$data->jenis."</td>";
				echo "<td>".$data->alamat."</td>";
				echo "<td>".$data->provinsi."</td>";
				echo "<td>".$data->pos."</td>";
				echo "<td>".$data->lokasi."</td>";
				echo "<td>".$data->deskripsi."</td>";
				//echo "<td>".$data->bukti."</td>";
				echo "<td><img src='".base_url("images/".$data->bukti)."'width='100' height='100'></td>";
					echo "</tr>";
			
 }
 } 
 ?>
		</table>
		
	</div>

</div>
</div>
</div>

</body>
	<?php require 'footer.php' ?>
</html>