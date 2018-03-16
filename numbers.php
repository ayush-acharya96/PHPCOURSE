<!DOCTYPE html>
<html>
<head>
	<title>Numbers</title>
</head>
<body>

	<?php

	$FirstNumber = 3;
	$SecondNumber = 4;
	$ThirdNumber = 3.343;
	?><br>
	
	<?php echo $ThirdNumber + 9 + 9;  ?><br>
	<?php echo 3.1/4; ?><br>
	Ceil: <?php echo ceil($ThirdNumber); ?><br>
	floor: <?php echo floor($ThirdNumber); ?><br>

	<?php echo "is {$FirstNumber} : integer". is_int($FirstNumber) ; ?><br>
	<?php echo "is {$FirstNumber} : float". is_float($FirstNumber) ; ?><br>
	<?php echo "is {$FirstNumber} : numeric". is_numeric($FirstNumber) ; ?><br>
	<?php echo "is {$ThirdNumber} : integer". is_int($ThirdNumber) ; ?><br>
	<?php echo "is {$ThirdNumber} : float". is_float($ThirdNumber) ; ?><br>
	<?php echo "is {$ThirdNumber} : numeric". is_numeric($ThirdNumber) ; ?><br>

	<hr>

	Binary: <?php echo decbin(34) ; ?><br>
	Decimal: <?php echo bindec(101010001011110100) ; ?><br>
	Square root: <?php echo sqrt(27) ; ?><br>
	Absolute value: <?php echo abs(-50+100) ; ?><br>
	Power: <?php echo pow(2,10) ; ?><br>
	Modulus: <?php echo fmod(15,7) ; ?><br>
	Random: <?php echo rand() ; ?><br>
	Random number between 500 and 1000: <?php echo rand(500,1000) ; ?><br>

	<hr>
	<?php echo $SecondNumber = $SecondNumber + 2 ; ?><br>
	<?php echo $SecondNumber += 2 ; ?><br>
	Increment: <?php  $SecondNumber++ ; echo $SecondNumber ; ?><br>
	Decrement: <?php  $SecondNumber-- ; echo $SecondNumber ; ?><br>





</body>
</html>