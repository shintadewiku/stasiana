<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('index.php/welcome/logoutt'); ?>">Logout</a>
</body>
</html>