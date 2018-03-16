<!DOCTYPE html>
<html>
<head>
	<title>Static Variables</title>
</head>
<body>

	<?php
	function NormalV() {
		$value = 1;
		echo $value."<br>";
		$value++;
	}

	NormalV();
	NormalV();
	NormalV();
	NormalV();

	function StaticV() {
		static $Value = 1;
		echo $Value."<br>";
		$Value++;
	}
	StaticV();
	StaticV();
	StaticV();
	StaticV();
	
	?>


</body>
</html>