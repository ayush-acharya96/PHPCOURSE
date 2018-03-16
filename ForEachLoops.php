<!DOCTYPE html>
<html>
<head>
	<title>For Each Loop structure</title>
</head>
<body>

	<?php
	$Number=array(4,2,5,32,5,653,63,456,76,123);
	foreach($Number as $Num) {
		echo "Numbers: {$Num} <br>";
	}

	?><hr>
	<?php
	$Food = array(
		"item_number" => 1050,
		"name" => "pizza",
		"region" => "Italy",
		"Side_food" => "Pasta",
		"drink" => "Cook",
		"package_price" => "jhhj"
	);

	foreach($Food as $Key => $Value) {
		$Data = ucwords(str_replace("_"," ",$Key));
		//$Data = ucwords($Data);
		if($Key == "package_price") {
			if(is_numeric($Value)) {
				
			} else {
				$Value = "Cannot be determined";
				//echo "Cannot be determined";
			}
		}


		echo "{$Data} : {$Value} <br> ";
	}


	?>

</body>
</html>