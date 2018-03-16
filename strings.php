<!DOCTYPE html>
<html>
<head>
	<title>Strings</title>
</head>
<body>

	<?php
	$phrase1 = "students who come late";
	$phrase2 = "in class sit in the last";
	$combine = $phrase1;
	$combine .= $phrase2;

	echo "Original full string is " . $combine;

	?><hr>

	Uppercase first: <?php echo ucfirst($combine); ?><br>
	Uppercase words: <?php echo ucwords($combine); ?><br>
	Lowercase : <?php echo strtolower($combine); ?><br>
	Uppercase : <?php echo strtoupper($combine); ?><br>
	<hr>

	Repeat: <?php echo str_repeat($combine, 3); ?><br>
	Make substring from one point to another: <?php echo substr($combine, 5 , 10); ?><br>
	Find position of any specific word: <?php echo strpos($combine, "come"); ?><br>
	Find character: <?php echo strchr($combine, "w"); ?><br>


	<hr>

		Total length of string: <?php echo strlen($combine);?><br>
		Trim: <?php echo "A" . trim (" B C D ") . "E"; ?><br>
		Find specific and show after: <?php echo strstr($combine, "come"); ?><br>
		Replace word with new: <?php echo str_replace("sit", "stand", $combine); ?><br>

		<hr>




	<?php
	/*echo " my name is Ayush Acharya"; echo "<br>";
	echo 'My age is 22';
	$color = "red";
	$shirt = "sleev-less";
	$combination = $color . " " . $shirt;
	echo "<br>";
	echo $combination. "<br>";


	?>

	<?php 
		echo "$color <br>";
		echo "$color is my fav.";
		//echo '$color <br>';
*/
	?>



</body>
</html>