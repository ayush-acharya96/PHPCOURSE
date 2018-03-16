<!DOCTYPE html>
<html>
<head>
	<title>PHP FILE</title>
</head>
<body>
	<?php
		print_r($_POST);
	?>
	<br><br>
	<?php
		$Username = $_POST["Username"];
		$Password = $_POST["Password"];
		$Submit = $_POST["Submit"];
		if (isset($_POST["Submit"])) {
			echo "Successfull Login<br>";
			echo "Welcome {$_POST["Username"]}<br>";
		}

		/*if(isset($Username) && !empty($Username)) {
			echo "Username is set with the name of {$Username}<br>";
		} else {
			echo "No Username detected<br>";
		}
		if(isset($password) && !empty($Password)) {
			echo "Password : {$Password}";

		} else {
			echo "NO password detected<br>";
		}*/

		if(isset($_POST["Username"])) {
			$Username = $_POST["Username"];
			echo  "$Username <br>";
		} else {
			$Username = "";
		}

		if(isset($_POST["Password"])) {
			$Password = $_POST["Password"];
			echo "$Password <br>";
		} else {
			$Password = ""; 
		}

	?>

</body>
</html>