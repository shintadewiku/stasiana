<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo form_open("Welcome/verifTolak/".$data_laporan->no, array('enctype'=>'multipart/form-data')); ?>
		<table cellpadding="8">
			<tr>
			<td>ID</td>
			<td>:</td>
			<td><input type="text" name="no" value="<?php echo set_value('no', $data_laporan->no); ?>" readonly></td>
			</tr>
			<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="nama"value="<?php echo set_value('nama', $data_laporan->nama); ?>" readonly></td>
			</tr>
			<tr>
			<td>Jenis Bencana</td>
			<td>:</td>
			<td><input type="text" name="jenis"value="<?php echo set_value('jenis', $data_laporan->jenis); ?>" readonly></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<input type="radio" name="status" value="Tolak Diverifikasi" <?php echo set_radio('status', 'Tolak Diverifikasi'); ?>> Tolak Diverifikasi
					</td>
			</tr>
			<tr>
			<hr>
	<input type="submit" name="submit" value="Ubah">
	<a href="<?php echo base_url('Welcome/laporan'); ?>"><input type="button" value="Batal"></a>
	<?php echo form_close(); ?>

		</table>
</tr>
</body>
</html>