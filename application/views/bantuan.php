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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<style> 
#t1 {
  -moz-tab-size: 4; /* Firefox */
  -o-tab-size: 4; /* Opera 10.6-12.1 */
  tab-size: 4;
}

#t2 {
  -moz-tab-size: 16; /* Firefox */
  -o-tab-size: 16; /* Opera 10.6-12.1 */
  tab-size: 16;
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
      <li class="active"><a style="color: black"; href="<?php echo site_url('welcome/bantuan')?>">Kontak</a></li>
    </ul>
  </div>
</nav>

    <h1 class="text-center">Tentang Kami</h1>

  
  <div class="container">
  <div class="row">
  
  <!--team-1-->
  <div class="col-lg-6">
  <div class="our-team-main">
  
  <div class="team-front">
  <img src="http://1.bp.blogspot.com/-vGwfUEcu2kk/UPLGcZJ4SSI/AAAAAAAALYw/bmllfIVBuQs/s1600/LOGO+BADAN+NASIONAL+PENANGGULANGAN+BENCANA.png" class="img-fluid" />
  <h3>Badan Nasional Penanggulangan Bencana</h3>
  <p>BNPB</p>
  </div>
  
  <div class="team-back">
  <span>
  <pre id="t1">
  <i class='fas fa-map-marker-alt' style='font-size:12px'></i>  <tr>  Graha BNPB - Jl. Pramuka Kav.38 Jakarta Timur 13120</tr> <br>
  <i class='fas fa-mobile-alt' style='font-size:12px'></i> <tr> </tr> <tr> 021-29827793</tr> <br>
  <i class='fas fa-fax' style='font-size:12px'></i>  <tr> 021-21281200</tr> <br>
  <i class='fas fa-envelope' style='font-size:12px'></i> <tr>  contact@bnpb.go.id</tr> <br>
  <i class='fas fa-globe-asia' style='font-size:12px'></i> <tr> <a href="https://bnpb.go.id/"> bnpb.go.id/ </a> </tr>
  </span>
  </div>
  
  </div>
  </div>
  <!--team-1-->
  
  <!--team-3-->
  <div class="col-lg-6">
  <div class="our-team-main">
  
  <div class="team-front">
  <img src="https://albert.sukmono.web.id/wp-content/uploads/2015/04/bpbd.png" class="img-fluid" />
  <h3>Badan Penanggulangan Bencana Daerah</h3>
  <p>BPBD</p>
  </div>
  
  <div class="team-back">
  <span>
  <pre id="t1">
  <i class='fas fa-map-marker-alt' style='font-size:12px'></i>  <tr>  Graha BNPB - Jl. Pramuka Kav.38 Jakarta Timur 13120</tr> <br>
  <i class='fas fa-mobile-alt' style='font-size:12px'></i> <tr> </tr> <tr> 021-29827793</tr> <br>
  <i class='fas fa-fax' style='font-size:12px'></i>  <tr> 021-21281200</tr> <br>
  <i class='fas fa-envelope' style='font-size:12px'></i> <tr>  contact@bnpb.go.id</tr> <br>
  <i class='fas fa-globe-asia' style='font-size:12px'></i> <tr> <a href="https://bnpb.go.id/bpbd-provinsi"> bpbd website link </a> </tr>
  </span>
  </div>
  
  </div>
  </div>
  <!--team-3-->
  
  <!--team-4-->
  <div class="col-lg-6">
  <div class="our-team-main">
  
  <div class="team-front">
  <img src="https://seeklogo.com/images/D/Departemen_Pekerjaan_Umum-logo-7E29323DFE-seeklogo.com.png" class="img-fluid" />
  <h3>Dinas Pekerjaan Umum dan Penataan Ruang</h3>
  <p>DPUPR</p>
  </div>
  
  <div class="team-back">
  <span>
  <pre id="t1">
  <i class='fas fa-map-marker-alt' style='font-size:12px'></i>  <tr>  Kementerian PUPR - Jl. Pattimura No. 20 Kebayoran Baru</tr>
  <tr>     Jakarta Selatan 12110</tr> <br>
  <i class='fas fa-mobile-alt' style='font-size:12px'></i> <tr> </tr> <tr> (021) 7228497</tr> <br>
  <i class='fas fa-envelope' style='font-size:12px'></i> <tr>  informasi@pu.go.id</tr> <br>
  <i class='fas fa-globe-asia' style='font-size:12px'></i> <tr> <a href="https://www.pu.go.id/"> pu.go.id/ </a> </tr>
  </span>
  </div>
  
  </div>
  </div>
  <!--team-4-->
  
  <!--team-5-->
  <div class="col-lg-6">
  <div class="our-team-main">
  
  <div class="team-front">
  <img src="https://dshintadewi.files.wordpress.com/2018/12/logos.png" class="img-fluid" />
  <h3>TRIPLEX</h3>
  <p>Pengembang</p>
  </div>
  
  <div class="team-back">
  <span>
  <pre id="t1">
  <i class='fas fa-user' style='font-size:12px'></i> <tr> </tr> <tr> Shinta Dewi Kusumaningrum</tr>
  <i class='fas fa-envelope' style='font-size:12px'></i> <tr>  17523004@students.uii.ac.id</tr> <br>
  <i class='fas fa-user' style='font-size:12px'></i> <tr> </tr> <tr> Rifki Among Hastari</tr>
  <i class='fas fa-envelope' style='font-size:12px'></i> <tr>  17523124@students.uii.ac.id</tr> <br>
  <i class='fas fa-user' style='font-size:12px'></i> <tr> </tr> <tr> Annisa Nauli Hasibuan</tr>
  <i class='fas fa-envelope' style='font-size:12px'></i> <tr>  17523189@students.uii.ac.id</tr> <br>
  </span>
  </div>
  
  </div>
  </div>
  <!--team-5-->
  
  
  </div>
  </div>

</body>
<?php require 'footer.php' ?>
</html>

<style type="text/css">
body
{
  background:white;
}

h1
{
  color:#fff;
  margin:40px 0 60px 0;
  font-weight:300;
}

.our-team-main
{
  width:100%;
  height:auto;
  border-bottom:5px #323233 solid;
  background:#fff;
  text-align:center;
  border-radius:10px;
  overflow:hidden;
  position:relative;
  transition:0.5s;
  margin-bottom:28px;
}


.our-team-main img
{
  border-radius:50%;
  margin-bottom:20px;
  width: 90px;
}

.our-team-main h3
{
  font-size:20px;
  font-weight:700;
}

.our-team-main p
{
  margin-bottom:0;
}

.team-back
{
  width:100%;
  height:auto;
  position:absolute;
  top:0;
  left:0;
  padding:5px 15px 0 15px;
  text-align:left;
  background:#fff;
  
}

.team-front
{
  width:100%;
  height:auto;
  position:relative;
  z-index:10;
  background:#fff;
  padding:15px;
  bottom:0px;
  transition: all 0.5s ease;
}

.our-team-main:hover .team-front
{
  bottom:-200px;
  transition: all 0.5s ease;
}

.our-team-main:hover
{
  border-color:#777;
  transition:0.5s;
}

/*our-team-main*/


  
</style>