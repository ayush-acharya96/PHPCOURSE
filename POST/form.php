<?php

if(isset($_POST["Submit"])) {
	$Username = $_POST["Username"];
	$Password = $_POST["Password"];

	if($Username == "Ayush" && $Password == "Acharya") {
		echo "<h2>Welcome : {$_POST["Username"]}</h2>";
	} else {
		echo "<h2>Account doesnot exists | Try again</h2>";
	}
} else {
	echo "<h2>Login Required</h2>";
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>


<fieldset>
	<legend>HTML 5 FORM</legend>
	<form action="Form.php" method="POST">
		<label for="Username">Username</label>
		<input id="Username" type="text" name="Username"><br><br>
		<label for="Password">Password</label>
		&nbsp;
		<input id="Password" type="Password" name="Password"><br><br>
		<input type="Submit" name="Submit" value="Submitted">
	</form>
</fieldset>


</body>
</html>