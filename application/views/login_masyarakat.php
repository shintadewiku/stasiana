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

  	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
  	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  	<!-- Compiled and minified JavaScript -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>

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
      <li><a href="<?php echo site_url('welcome/index')?>">Beranda</a></li>
      <li><a href="<?php echo site_url('welcome/lacak')?>">Lacak</a></li>
      <li><a href="<?php echo site_url('welcome/berita')?>">Berita</a></li>
      <li><a href="<?php echo site_url('welcome/bantuan')?>">Bantuan</a></li>
    </ul>
  </div>
</nav> <br> <br> <br>


<div id="body" > <br> <br> <br>
<div class="container">
<div class = "text-center">
		<h4 style="opacity: 0.9; color: white">LOGIN SEBAGAI PELAPOR</h4>

		<div class="row" style="margin-top: 20px; margin-right: 250px; margin-left: 250px; margin-bottom: 50px">  <br> <br>

				<?php 
				if($this->session->userdata('sess_logged_in')==0){?>
					<a href="<?=$google_login_url?>" class="btn btn-block btn-social btn-google" style="background-color: #DD4B39" ><i class="fa fa-google"></i>Sign in with Google</a> <br> <br>
				<?php }else{?>
					<a href="<?=base_url()?>auth/logout" class="btn btn-block btn-social btn-google" style="background-color: #DD4B39" ><i class="fa fa-google"></i>Google logout</a> <br> <br>
				<?php }
				?>

  				<a class="btn btn-block btn-social btn-facebook" style="background-color: #3B5998"> 
    			<span class="fa fa-facebook"></span> Sign in with Facebook
  				</a> <br> <br>

  				<a class="btn btn-block btn-social btn-twitter" style="background-color: #55ACEE">
    			<span class="fa fa-twitter"></span> Sign in with Twitter 
  				</a> <br> <br>
	
			</div>
		</div>
		<div class="row">


			<?php if(isset($_SESSION['name'])){?>
				<div class="col s12 m6 l4 offset-l3 " >
					<div class="card ">
			            <div class="card-image waves-effect waves-block waves-light">
			              <img class="activator" src="<?=$_SESSION['profile_pic']?>">
			            </div>
			            <div class="card-content">
			             <span class="card-title activator grey-text text-darken-4"> <i class="material-icons"><?=$_SESSION['name']?></i></span>
			            </div>
						 <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?=$_SESSION['name']?><i class="material-icons right">close</i></span>
      <p>Email Id: <?=$_SESSION['email']?></p>
    </div>
			        </div>
				</div>
			<?php }?>
		</div>
	</div>
	</div>

</body>
<?php 
require 'footer.php'; 
?>

</html>
	