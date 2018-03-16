<!DOCTYPE html>
<html>
<head>
	<title>File 2</title>
</head>
<body>
	<?php ?>
	<pre>
	<?php 
		print_r($_GET);

	?>
	</pre>
	<br>
	<?php 
	$Name = $_GET["Name"];
	echo $Name;
	?>


</body>
</html>