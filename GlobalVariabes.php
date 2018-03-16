<!DOCTYPE html>
<html>
<head>
	<title>User Defined Functions</title>
</head>
<body>


	<?php

	$MyNumber = 287128;
	function Additions() {
		global $MyNumber;
		$a=5;
		$b=7;
		$c=$a+$b;
		echo $MyNumber."<br>";
		echo "Addition is {$c}<br>";
	}
	Additions();

	?>
	

</body>
</html>