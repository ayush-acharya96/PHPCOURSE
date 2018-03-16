<!DOCTYPE html>
<html>
<head>
	<title>Setting Cookie</title>
</head>
<body>
	<?php
		$ExpireTime = time() + 86400;
		echo "Time is". $ExpireTime;
		setcookie("Name","Ayush",$ExpireTime);
		setcookie("Age","22",$ExpireTime);
		// print_r($_COOKIE);
		echo $_COOKIE['Name']."<br>";
		echo "My name is " .$_COOKIE['Name'] ." and my age is " .$_COOKIE['Age'];

	 ?>
	<?php ?>

</body>
</html>