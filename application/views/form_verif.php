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
<?php echo form_open("Welcome/verif/".$data_laporan->no, array('enctype'=>'multipart/form-data')); ?>
		<table cellpadding="8">
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

<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div style="font-size: 25px;" class="panel-title">LAPORAN PILIHAN</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
   
                        <form id="loginform" class="form-horizontal" role="form">
                        	<p style="font-size: 18px; font-weight: bold;">Kode Laporan</p>
                        	<div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input style="font-size: 17px;" type="text" name="no" value="<?php echo set_value('no', $data_laporan->no); ?>" readonly>
                            </div>
                             <p style="font-size: 18px; font-weight: bold;">Nama Lengkap</p>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               	<input style="font-size: 17px;" type="text" name="nama"value="<?php echo set_value('nama', $data_laporan->nama); ?>" readonly>
                            </div>
                            <p style="font-size: 18px; font-weight: bold;">Jenis Bencana</p>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-tree-deciduous"></i></span>
                                <input style="font-size: 17px;" type="text" name="jenis"value="<?php echo set_value('jenis', $data_laporan->jenis); ?>" readonly>
                            </div>
                            <p style="font-size: 18px; font-weight: bold;">Status</p>
                            <div style="margin-bottom: 25px; font-size: 16px;" class="input-group">
                                <input type="radio" name="status" value="Diverifikasi" <?php echo set_radio('status', 'Diverifikasi'); ?>> 
                                Diverifikasi
                            </div>

                            	<input class="btn btn-success btn-lg btn-block" type="submit" name="submit" value="Ubah">
                            	<a class= "btn btn-danger btn-lg btn-block" href="<?php echo base_url('Welcome/laporan'); ?>">Batal</a>
                            	<?php echo form_close(); ?>

		</table>
</tr>

</body>

<?php 
require 'footer.php'; 
?>

</html>