<!DOCTYPE html>
<html>
<head>
	<title>File 1</title>
</head>
<body>
	<?php ?>
	<?php 
		$Name = "Alex"; 
		$Position = "Support Coordinator & Manager";


		?>

		<a href="File2.php?Name=<?php echo $Name; ?>">Click</a><br>
		<a href="File2.php?Name=<?php echo $Name;?>&Position=<?php echo $Position; ?>">Click2</a><br>
		<a href="File2.php?Name=<?php echo $Name;?>&Position=<?php echo urlencode($Position); ?>">Click3</a>

</body>
</html>