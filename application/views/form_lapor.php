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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Include the above in your HEAD tag -->

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
      <a class="navbar-brand" style="color: white" href="<?php echo site_url('Welcome/index')?>">STASIANA</a>
      <br><br>
      <h6>Sistem Pelaporan Lokasi Rawan Bencana</h6>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="color: white" href="<?php echo site_url('Welcome/index')?>">Beranda</a></li>
      <li><a style="color: white"; href="<?php echo site_url('Welcome/lacak')?>">Lacak</a></li>
      <li><a style="color: white"; href="<?php echo site_url('Welcome/berita')?>">Berita</a></li>
      <li><a style="color: white"; href="<?php echo site_url('Welcome/bantuan')?>">Kontak</a></li>
    </ul>
  </div>
</nav>
<br> <br>
<button type="button" class="btn btn-info"><a style="color: white" href="<?php echo site_url('Welcome/login')?>"> <span style="text-align:left"> Kembali </a> </button>


<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div style="font-size: 20px;" class="panel-title">FORM PELAPORAN LOKASI RAWAN BENCANA</div>
                    </div> 
                    <div id="body">
                    <form action="<?php echo site_url('Welcome/insert')?>" method="post" enctype="multipart/form-data">    

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>


                        <legend style="border-color: #baecff;">IDENTITAS</legend>    
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="nama" maxlength="40" required class="form-control" placeholder="Nama Lengkap">                                  
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                        <input type="text" onkeypress="return angka(event)" maxlength="25" name="ktp" required class="form-control" placeholder="Nomor KTP">
                                        <script>
                                        function angka(evt) {
                                          var charCode = (evt.which) ? evt.which : event.keyCode
                                          if (charCode > 31 && (charCode < 48 || charCode > 57))
                                            return false;
                                          return true; }
                                          </script>
                                    </div>
                              
                              <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="email" maxlength="30" name="email" required class="form-control" placeholder="Email">
                              </div>

                              <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                        <input type="text" onkeypress="return angka(event)" maxlength="13" name="tel" required class="form-control" placeholder="Nomor Telepon">
                                        <script>
                                        function angka(evt) {
                                          var charCode = (evt.which) ? evt.which : event.keyCode
                                          if (charCode > 31 && (charCode < 48 || charCode > 57))
                                            return false;
                                          return true; }
                                          </script>
                              </div>

                              <legend style="border-color: #baecff;">INFORMASI BENCANA</legend>

                              <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tree-deciduous"></i></span>
                                        <input type="text" onkeypress="return huruf(event)" maxlength="30" name="jenis" required class="form-control" placeholder="Jenis Bencana">
                                        <script>
                                        function huruf(evt) {
                                          var charCode = (evt.which) ? evt.which : event.keyCode
                                          if ((charCode < 65) || (charCode == 32))
                                            return false;
                                          return true; }
                                          </script>
                              </div>

                              
                              <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
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
                                        <option>Nusa Tenggara Timur</option>
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

                                        <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input type="text" maxlength="100" name="kota" required class="form-control" placeholder="Kabupaten/Kota">
                              </div>

                                        <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input type="text" maxlength="100" name="kec" required class="form-control" placeholder="Kecamatan">
                              </div>

                                        <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input type="text" maxlength="100" name="alamat" required class="form-control" placeholder="Alamat Lengkap">
                              </div>

                              

                              <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-send"></i></span>
                                        <input type="text" onkeypress="return angka(event)" maxlength="5" name="pos" required class="form-control" placeholder="Kode Pos">
                                        <script>
                                        function angka(evt) {
                                          var charCode = (evt.which) ? evt.which : event.keyCode
                                          if (charCode > 31 && (charCode < 48 || charCode > 57))
                                            return false;
                                          return true; }
                                          </script>
                              </div>

                              <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                        <input type="text" maxlength="50" name="lokasi" class="form-control" placeholder="Lokasi (URL)">
                              </div>

                              <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"> </i></span>
                                        <input type="textarea" maxlength="300" name="deskripsi" required class="form-control" placeholder="Deskripsi">
                              </div>

                              <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                        <input type="file" name="input_gambar" id="bukti" class="form-control">
                              </div>

                              <!-- <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                              </div> -->
                              <input class="btn btn-success btn-lg btn-block" type="submit" name="submit" value="Kirim Laporan">
                                                            
                              <!-- <button type="submit" class="btn btn-primary">Primary</button> -->
                                
                                
                            </form>
                         </div>
                    </div>
                
         </div> 
    </div>
    </form>
  </div> 

</body>
<?php require 'footer.php' ?>
</html>