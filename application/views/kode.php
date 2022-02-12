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

<style type="text/css">
  .modal {
   position: absolute;
   top: 150px;
   right: 100px;
   bottom: 0;
   left: 100px;
   z-index: 10040;
   overflow: auto;
   overflow-y: auto;
}
</style>

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
<div class="modal fade account-modal in" id="step1" data-backdrop="true" aria-hidden="false" style="display:block; object-position: bottom;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 50px; text-align: center; background-color: ">ID LAPORAN ANDA</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-feedback-out " role="form" > <br>
                    <div class="form-group has-feedback" style="font-size: 80px; text-align: center; color: #245cb7">
                    <?php

      if( ! empty($data_laporan)){
        // $no = 1;
          echo "<tr>";
            echo "<td>".$data_laporan->no."</td>";
              echo "</tr>";
      } 
 ?>
                        
</div>
<a href="<?php echo site_url('Welcome/index')?>" class="btn btn-lg btn-danger pull-right">Keluar</a> <br> <br>
</div>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<?php 
require 'footer.php'; 
?>
</html>



