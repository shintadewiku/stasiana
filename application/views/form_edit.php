<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD dengan Framework Codeigniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Form Edit</h1>

	<div id="body">
		<a href="<?php echo site_url('welcome/index')?>">Kembali </a>
		<?php if($dataEdit){
			$id = $dataEdit->kode_user;
			$nama = $dataEdit->nama_lengkap;
			$alamat = $dataEdit->alamat;
			$kode = $dataEdit->kode_jurusan;
			$NIM = $dataEdit->NIM;
			}else{
			$nama = "";
			$alamat = "";	
			$kode = "";
			$NIM = "";
				} ?>
		<form action="<?php echo site_url('welcome/update/'.$id)?>" method="POST">
			Nama Lengkap <br>
			<input type="text" name="nama" value="<?php echo $nama ?>" /><br>
			Alamat Lengkap <br>
			<input type="text" name="alamat" value="<?php echo $alamat ?>" /><br>
			Kode Jurusan <br>
			<select name="kode_jurusan">
			<?php
			$no = 1;
			foreach ($hasil as $r) { ?>
				<option value="<?php echo $r['kode_jurusan']?>" <?php if($r['kode_jurusan']==$kode) echo "selected" ?>><?php echo $r['kode_jurusan']?></option>
			<?php } ?>
			</select> </br>
			NIM <br>
			<input type="text" name="NIM" value="<?php echo $NIM ?>" /><br>
			<input type="submit" name="simpan" value="Simpan"/>
		</form>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>