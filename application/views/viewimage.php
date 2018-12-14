<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if (count($images)): ?>
	<?php foreach ($images as $img):?>
		<img src=<?php echo $img->avatar; ?>>
	<?php endforeach;?>
<?php else: ?>
	<p>No Image Found</p>
<?php endif ?>
</body>
</html>