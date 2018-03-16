<!DOCTYPE html>
<html>
<head>
	<title>User Defined Functions</title>
</head>
<body>


	<?php 
	function Welcome() {
		echo "Welcome to PHP function";
	}

	// Welcome();
	?>
	<hr>
	
	<?php
	function Addition_Using_Function_With_Parameters($a,$b) {
		$Result = $a + $b;
		echo "The addition is {$Result} <br>";

	}
/*
	Addition_Using_Function_With_Parameters(343,454);
	Addition_Using_Function_With_Parameters(3233,445);
	Addition_Using_Function_With_Parameters(343,4094);
	Addition_Using_Function_With_Parameters(3412,09454);
	Addition_Using_Function_With_Parameters(34311,45774);*/
	?>
	<hr>
	<?php
	function Addition_Using_Return($p,$q) {
		$f = $p + $q;
		return $f;

	}
	/*$total = Addition_Using_Return(13,17);
	echo $total;*/
	?>

</body>
</html>