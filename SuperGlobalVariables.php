<!DOCTYPE html>
<html>
<head>
	<title>Super Global Variables</title>
</head>
<body>

	<?php 
	$x = 55;
	$y = 45;
	function addition() {
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	addition();
	print_r($GLOBALS);
	echo "<br>";
	echo $z;


	?>

</body>
</html>