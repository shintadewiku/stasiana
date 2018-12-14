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
      <li  class="active"><a style="color: black" href="<?php echo site_url('welcome/berita')?>">Berita</a></li>
      <li><a style="color: white" href="<?php echo site_url('welcome/bantuan')?>">Kontak</a></li>
    </ul>
  </div>
</nav>
<div id="body" >


<div class="wrapper">
<header>
<h3 class="ticker"><span>Membagikan berita terbaru </span> mengenai bencana yang terjadi di sekitar anda</h3>
<div class="published">
<time>Rabu, 19 Desember 2018</time>
<p>Teknik Informatika</p>
<p><strong>Fakultas Teknologi Industri</strong></p>
<p><strong>Universitas Islam Indonesia</strong></p>
</div>
<header>
<h1 class="title"><span>STASIANA</span> NEWS</h1> <br>
<h2 class="website">triplex</h2>
</header>
</header>
<div class="break"></div>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active"> <a href="https://tirto.id/bmkg-hujan-lebat-waspadai-banjir-dan-longsor-di-jawa-hingga-ntt-daua">
        <img src="https://mmc.tirto.id/image/2018/11/15/rumah-tertimbun-longsor-antarafoto_ratio-16x9.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>Tanah Longsor</h3>
          <p>Tasikmalaya, Jawa Barat</p>
        </div> </a>
      </div>

      <div class="item"> <a href="http://suryamalang.tribunnews.com/2018/12/11/galeri-foto-dampak-banjir-bandang-yang-mengerikan-di-probolinggo">
        <img src="http://cdn2.tstatic.net/suryamalang/foto/bank/images/kedaton-lawang-kedaton-andung-sari-dan-andung-biru-di-kecamatan-tiris.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>Banjir</h3>
          <p>Probolinggo, Jawa Timur</p>
        </div> </a>
      </div>
    
      <div class="item"> <a href="https://www.cnnindonesia.com/nasional/20170731091121-20-231375/titik-api-kebakaran-hutan-di-kalbar-meluas">
        <img src="https://awsimages.detik.net.id/visual/2017/07/26/d3b72d0f-290d-47d4-8c37-3a27bab07350_169.jpg?w=650" style="width:100%;">
        <div class="carousel-caption">
          <h3>Kebakaran Hutan</h3>
          <p>Pontianak, Kalimantan Barat</p>
        </div> </a>
      </div>

      <div class="item"> <a href="http://jambi.tribunnews.com/2018/12/13/gempa-hari-ini-mamasa-diguncang-gempa-bumi-3-kali-kamis-1312-siang">
        <img src="http://cdn2.tstatic.net/jambi/foto/bank/images/02102018_gempa_20181002_110538.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>Gempa Bumi</h3>
          <p>Mamasa, Sulawesi Barat</p>
        </div> </a>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> 
<br> <br>

<div class="teaser-block"> <a href="https://regional.kompas.com/read/2018/12/05/06155401/diterjang-angin-ribut-11-rumah-di-madiun-rusak">
<div class="student teasers">
<h1 style="color: white">Angin Ribut</h1>
<h2 style="color: white; font-size: 14px">Madiun, Jawa Timur</h2>
<figure class="background"><img src="http://img.okeinfo.net/content/2013/03/20/56/778767/HrTfM1zvEG.jpg"></figure> </a>
</div>

<div class="teaser-block"> <a href="http://surabaya.tribunnews.com/2018/12/13/bangkalan-rapatkan-barisan-siaga-bencana-alam">
<div class="student teasers">
<h1 style="color: white">Pasukan Siaga Bencana</h1>
<h2 style="color: white; font-size: 14px">Bangkalan, Madura</h2>
<figure class="background"><img src="http://www.channeltujuh.com/images_news/4633Ini-Alasan-Pangdam-Bukit-Barisan,-Bentuk-Peleton-Siaga-Bencana-Alam.jpg"></figure> </a>
</div>

<div class="teaser-block"> <a href="https://mediamadura.com/2018/12/13/melihat-semangat-tim-gabungan-latihan-penanggulangan-bencana-alam-di-pamekasan/">
<div class="student teasers">
<h1 style="color: white">Tim Gabungan Latihan Penanggulangan Bencana</h1>
<h2 style="color: white; font-size: 14px">Pamekasan, Madura</h2>
<figure class="background"><img src="https://i2.wp.com/mediamadura.com/wp-content/uploads/2018/12/IMG-20181213-WA0136.jpg?resize=1024%2C687&ssl=1"></figure> </a>
</div>

<div class="teaser-block"> <a href="https://www.beritasatu.com/nasional/527680-ojk-diminta-dorong-percepatan-pemulihan-korban-bencana.html">
<div class="student teasers">
<h1 style="color: white">Percepatan Pemulihan Korban Bencana</h1>
<h2 style="color: white; font-size: 14px">Palu, Sulawesi Tengah</h2>
<figure class="background"><img src="https://img.beritasatu.com/cache/beritasatu/910x580-2/1542079023.jpg"></figure> </a> </div>
<div class="break"></div> 
</div>


<div class="columns2 van-dyck"> 
<h2><span>Bencana tanah longsor </span>Merenggut 8 korban tewas</h2>

<figure><img src="http://cdn2.tstatic.net/wow/foto/bank/images/bencana-tanah-longsor-toba-samosir.jpg"><figcaption>Bencana tanah longsor melanda empat rumah warga di Desa Halado, Kecamatan Pintu Pohan, Kabupaten Toba Samosir, Sumatera Utara pada Kamis (13/12/2018). 

</figcaption></figure>

</div>

<div class="columns2 slavery last just"><article>
<h3>8 Orang Tewas Akibat Bencana Longsor di Toba Samosir, 2 Warga Belum Ditemukan</h3>
<div class="byline">Tribunwow.com</div> 

<p>TRIBUNWOW.COM - Sebanyak 8 orang tewas akibat bencana tanah longsor yang melanda empat rumah warga di Desa Halado, Kecamatan Pintu Pohan, Kabupaten Toba Samosir, Sumatera Utara pada Kamis (13/12/2018).
Hal itu disampaikan Kepala Pusat Data Informasi dan Humas Badan Nasional Penanggulangan Bencana (BNPB) Sutopo Purwo Nugroho melalui akun Twitternya, @Sutopo_PN, Kamis (13/12/2018).</p>

<p>Selain 8 orang tewas, Sutopo menyebut 2 orang hilang akibat tertimbun tanah longsor itu. Jalur Sumbar- Riau Tak Bisa Dilewati karena Tertutup Longsor, Polisi Ungkap Hujan Turun sejak Pagi. Sementara, dua orang lainnya mengalami luka-luka. Dikatakannya, tim SAR gabungan akan melanjutkan pencarian korban pada esok pagi dan 5 alat berat akan dikerahkan. Sutopo juga mengimbau agar masyarakat waspada terhadap bencana tanah longsor dikarenakan intensitas hujan terus meningkat. "8 orang tewas, 2 orang hilang, 2 orang luka-luka & 4 rumah rusak berat akibat tertimbun longsor di Toba Samosir.</p>

<p>Tim SAR gabungan melanjutkan pencarian korban besok pagi. 5 alat berat dikerahkan untuk mencari korban. Masyarakat dihimbau waspada longsor. Hujan terus meningkat," tulis Sutopo Purwo Nugroho.</p>

<div class="cont"><a href="http://wow.tribunnews.com/2018/12/13/8-orang-tewas-akibat-bencana-longsor-di-toba-samosir-2-warga-belum-ditemukan"> </div> Lanjutkan membaca >> </a>
</article>
</div>
<div class="break"></div>
</div>

</body>
<?php 
require 'footer.php'; 
?>
</html>


<style type="text/css">
  body {
background: rgb(214, 187, 161);
}
h1, h2, h3 {
font-family: georgia, serif;
}

header h3.ticker {
margin: 0;
color: rgb(143, 141, 141);
font-size: 32px;
padding: 0 0 8px 0;
border-bottom: 1px solid #bbb;
}

header h3.ticker span {
color: rgb(255, 112, 0);
}

h1.headline {
font-weight: normal;
font-size: 65px;
margin: 0 0 58px 0;
}
.slavery h1 {
text-align: left;
font-weight: normal;
font-size: 43px;
margin: 0 0 1em 0;
}

h2.subhead {
font-weight: bold;
font-size: 26px;
}


.wrapper {
background: rgb(247, 246, 240);
position: relative;
margin: 0 auto;
width: 1250px;

padding: 10px 30px;
}

header {
}
div.break {
clear:both;
}
.columns1 {
margin: 0 10px;
height: 10px;
width: 264px;
float: left;

}
.columns2 {
width: 544px;
float: left;
padding-right: 6px;
border-right: 1px solid #BEB8B8;
margin-right: 6px;
position: relative;

}
article p {
margin: 0.25em 0;
line-height: 16px;
}
article.cols2 {
-moz-column-count:2; /* Firefox */
-webkit-column-count:2; /* Safari and Chrome */
column-count:2;}
.byline {
border-bottom: 1px solid;
border-top: 1px solid;
padding: 6px 0;
font-weight: bold;
padding-bottom: 20px;
}

article.cols4 {
-moz-column-count:4; /* Firefox */
-webkit-column-count:4; /* Safari and Chrome */
column-count:4;
-moz-column-rule-color:  #ccc;
       -moz-column-rule-style:  solid;
       -moz-column-rule-width:  1px;
       -webkit-column-rule-color:  #ccc;
       -webkit-column-rule-style: solid ;
       -webkit-column-rule-width:  1px;}

.cols4 figure img {
width: 100%;
border-top: 1px solid #ccc;
border-bottom: 1px solid #ccc;
}

.cols4 figure {
width: 100%;
overflow: visible;
}

.cols4 figcaption {
font-weight: normal;
font-size: 19px;
font-family: georgia;
}

.columns4 {
width: 1088px;
float: left;
padding-right: 6px;
border-right: 1px solid #BEB8B8;
margin-right: 6px;
position: relative;
}
.columns {

}

.columns div:first-child {
margin: 0 10px 0 0;
}


.columns div:last-child {
margin: 0  0 0 10px ;
}
div.teasers {
width: 460px;
background: rgb(172, 162, 122);
height: 200px;
position: relative;
margin: 5em 0;
z-index: 2;
float: left;
margin: 0 5px;
}

div.teasers h1 {
color: white;
margin: 0;
padding: 5px;
font-size: 22px;
}

div.teasers h2 {
margin: -7px 0 0 0;
padding: 5px;
font-weight: normal;
font-size: 22px;
}


header header h1.title {
color: #004A83;
text-transform: lowercase;
margin: -15px 0 0 0;
padding: 0;
font-size: 164px;


}
header header h1.title span {
color: #98BCDB;
margin-right: -0.2em;
}

header header h2.website {
margin: -35px 0 48px 0;
color: #98BCDB;
}

header header {
text-align: right;
}

div.borgen {
margin: 0 0 0 5px;
}

div.student {
margin: 0 5px 0 0 ;
}

div.teasers figure {
position: absolute;
margin: 0;
bottom: 0;
right: 0px;
width: 230px;
overflow: hidden;
}

div.teasers figure img {
height: 250px;
display: block;
}

div.teasers figure.background {
position: absolute;
left: 10;
width: 100%;
z-index: 10;
height: 126px;
}

div.teasers figure.background img {

position: absolute;
top: 5px;
}

div.pop.teasers figure {
width: 479px;
height: 160px;
}

div.pop.teasers figure img {
height: auto;
}

div.student.teasers figure.background img {
width: 100%;
}

.published {
float: left;
display: block;
margin: 7px 0 0 0;
width: 155px;
font-family: georgia, serif;
}
.published p {
margin: 4px 0 10px 0;
}

.published time {
color: #004A83;

}

div.teaser-block {
border-bottom: 8px solid black;
padding-bottom: 6px;
margin-bottom: 6px;
}

figure {
overflow: hidden;
margin: 0;
padding: 0;
}
figure img {

}

figcaption {
position: relative;
font-weight: bold;
font-size: 15px;
}

.columns2.van-dyck h3 {
position: absolute;
right: 0;
z-index: 2;
top: -67px;
background: #f1f1f1;
padding: 6px;
font-size: 24px;
font-weight: normal;
}
.just {
text-align: justify;
}

.columns1.last {
margin: 0 0 0 10px;
width: 275px;
}

.columns2.van-dyck h2 {
background: #98BCDB;
color:#004A83;
font-size: 28px;
margin: 0;
padding: 2px 0 20px 6px;
}

.columns2.van-dyck h2 span {
color: white;
}

.cont {
border-top: 1px solid #BEB8B8;
margin: 10px 0;
padding: 4px 0;
font-weight: bold;

}

div.foot {
border-top: 3px solid black;
margin-top: 1em;
}

.firstcharacter { float: left; font-size: 75px; line-height: 60px; padding-top: 4px; padding-right: 8px; padding-left: 3px; font-family: Georgia; }

img.lastad {
width: 197px;
margin-left: 32px;
}

</style>