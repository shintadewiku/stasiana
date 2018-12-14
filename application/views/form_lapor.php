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

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	fieldset {
		object-position: justify;
		background-color: white;
		opacity: 0.9;
		width: 800px;
		margin: 3px auto;
	}
	</style>


</head>
<body>
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
      <li><a style="color: white"; href="<?php echo site_url('welcome/lacak')?>">Lacak</a></li>
      <li><a style="color: white"; href="<?php echo site_url('welcome/berita')?>">Berita</a></li>
      <li><a style="color: white"; href="<?php echo site_url('welcome/bantuan')?>">Kontak</a></li>
    </ul>
  </div>
</nav>
<br> <br>
<button type="button" class="btn btn-success"><a style="color: white" href="<?php echo site_url('welcome/login')?>"> <span style="text-align:left"> Kembali </a> </button> <br> <br>

<div id="container">
<fieldset>
<legend style="background-color: #2262cc; color: white;"><h2 style="text-align: center;">Form Pelaporan Lokasi Rawan Bencana</h2></legend>
<hr style="border-color: #2262cc; border-width: 10px"> <br> <br>

	<div id="body">
		<form action="<?php echo site_url('welcome/insert')?>" method="post" enctype="multipart/form-data">

		<fieldset>
		<legend style="border-color: #2262cc">IDENTITAS</legend>
		<form>
  <div class="form-row">
    <div class="col"> Nama Lengkap
      <input type="text" onkeypress="return huruf(event)" name="nama" maxlength="30" required class="form-control" placeholder="Nama Lengkap">
      		<script>
			function huruf(evt) {
				var charCode = (evt.which) ? evt.which : event.keyCode
				if ((charCode < 65) || (charCode == 32))
					return false;
					return true; }
			</script>
    </div>

  <div class="col"> Nomor Kartu Tanda Penduduk (KTP)
      <input type="text" onkeypress="return angka(event)" maxlength="25" name="ktp" required class="form-control" placeholder="Nomor KTP">
      		<script>
    		function angka(evt) {
      			var charCode = (evt.which) ? evt.which : event.keyCode
       			if (charCode > 31 && (charCode < 48 || charCode > 57))
        			return false;
        			return true; }
    		</script>
    </div>

    <div class="col"> Email
      <input type="email" maxlength="30" name="email" required class="form-control" placeholder="Email">
    </div>

    <div class="col"> Nomor Telepon
      <input type="text" onkeypress="return angka(event)" maxlength="13" name="tel" required class="form-control" placeholder="Nomor Telepon">
      		<script>
    		function angka(evt) {
      			var charCode = (evt.which) ? evt.which : event.keyCode
       			if (charCode > 31 && (charCode < 48 || charCode > 57))
        			return false;
        			return true; }
    		</script>
    </div>

</fieldset> <br> <br>


	<fieldset>
	<legend style="border-color: #5998ff">INFORMASI BENCANA</legend>
	<div class="col"> Jenis Bencana
      <input type="text" onkeypress="return huruf(event)" maxlength="30" name="jenis" required class="form-control" placeholder="Jenis Bencana">
      <script>
			function huruf(evt) {
				var charCode = (evt.which) ? evt.which : event.keyCode
				if ((charCode < 65) || (charCode == 32))
					return false;
					return true; }
			</script>
    </div>

 	<div class="col"> Alamat Lengkap
      <input type="text" maxlength="100" name="alamat" required class="form-control" placeholder="Alamat Lengkap">
    </div>
    
    <div class="col"> Provinsi
      <select type="text" name="provinsi" class="form-control">
      		<option>Pilih Provinsi</option>
      		<option>Aceh</option>
			<option>Bali</option>
			<option>Banten</option>
			<option>Bengkulu</option>
			<option>Gorontalo</option>
			<option>Jakarta</option>
			<option>Jambi</option>
			<option>Jawa Barat</option>
			<option>Jawa Tengah</option>
			<option>Jawa Timur</option>
			<option>Kalimantan Barat</option>
			<option>Kalimantan Selatan</option>
			<option>Kalimantan Tengah</option>
			<option>Kalimantan Timur</option>
			<option>Kalimantan Utara</option>
			<option>Kepulauan Bangka Belitung</option>
			<option>Kepulauan Riau</option>
			<option>Lampung</option>
			<option>Maluku</option>
			<option>Maluku Utara</option>
			<option>Nusa Tenggara Barat</option>
			<option>Nusa Tenggara Timur</option>
			<option>Papua</option>
			<option>Papua Barat</option>
			<option>Riau</option>
			<option>Sulawesi Barat</option>
			<option>Sulawesi Selatan</option>
			<option>Sulawesi Tengah</option>
			<option>Sulawesi Tenggara</option>
			<option>Sulawesi Utara</option>
			<option>Sumatera Barat</option>
			<option>Sumatera Selatan</option>
			<option>Sumatera Utara</option>
			<option>Yogyakarta</option>
		</select>
    </div>

    <div class="col"> Kode Pos
      <input type="text" onkeypress="return angka(event)" maxlength="5" name="pos" required class="form-control" placeholder="Kode Pos">
      		<script>
    		function angka(evt) {
      			var charCode = (evt.which) ? evt.which : event.keyCode
       			if (charCode > 31 && (charCode < 48 || charCode > 57))
        			return false;
        			return true; }
    		</script>
    </div>   

    <div class="col"> Lokasi
      <input type="text" maxlength="50" name="lokasi" required class="form-control" placeholder="Lokasi">
    </div>

    <div class="col"> Deskripsi 
      <input type="text" maxlength="300" name="deskripsi" required class="form-control" placeholder="Deskripsi">
    </div>

    <div class="col"> Bukti
    <td>(pilih gambar untuk diunggah)</td>
      <input type="file" name="input_gambar" id="bukti" class="form-control">
    </div>
    <input type="submit" name="upload" value="upload image">
    <input type="submit" name="submit" value="Kirim Laporan">
</form>
</fieldset>
</fieldset>

</body>
<?php require 'footer.php' ?>
</html>
