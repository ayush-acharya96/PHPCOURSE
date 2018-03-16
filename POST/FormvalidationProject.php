<?php 
$NameError = "";
$EmailError = "";
$GenderError = "";
$WebsiteError = "";

if(isset($_POST["Submit"])) {
	if(empty($_POST["Name"])) {
		$NameError = "Name is required";
	} else {
		$Name = Test_User_Input($_POST["Name"]);
		if(!preg_match("/^[A-Za-z\. ]*$/",$Name)) {
			$NameError = "Only Letters and White Spaces are allowed.";
		}
	}
	if(empty($_POST["Email"])) {
		$EmailError = "Email is required";
	} else {
		$Email = Test_User_Input($_POST["Email"]);
		if(!preg_match("/[A-Za-z0-9._-]{3,}@[A-Za-z0-9._-]{3,}[.]{1}[A-Za-z0-9.-_]{2,}$/", $Email)) {
			$EmailError = "Invaild Email Format";
		}
	}
	/*if(empty($_POST["Name"])) {
		$NameError = "Name is required";
	} else {
		$Name = Test_User_Input($_POST["Name"]);
	}*/
	if(empty($_POST["Gender"])) {
		$GenderError = "Gender is required";
	} else {
		$Gender = Test_User_Input($_POST["Gender"]);
	}
	if(empty($_POST["Website"])) {
		$WebsiteError = "Website is required";
	} else {
		$Website = Test_User_Input($_POST["Website"]);
		if(!preg_match("/(https:|ftp:)\/\/+[A-Za-z0-9.\-_\/?\$=&\#\~`!]+\.[A-Za-z0-9.\-_\/?\$=&\#\~`!]*/" , $Website)) {

			$WebsiteError = "Invalid Website Format";
		}
	}
	if(!empty($_POST["Name"]) && !empty($_POST["Email"]) && !empty($_POST["Gender"]) && !empty($_POST["Website"])) {
		if((preg_match("/^[A-Za-z\. ]*$/",$Name)) && (preg_match("/[A-Za-z0-9._-]{3,}@[A-Za-z0-9._-]{3,}[.]{1}[A-Za-z0-9.-_]{2,}$/", $Email)) && (preg_match("/(https:|ftp:)\/\/+[A-Za-z0-9.\-_\/?\$=&\#\~`!]+\.[A-Za-z0-9.\-_\/?\$=&\#\~`!]*/" , $Website))) {
			echo "<h2> Your submitted information</h2> <br>";
			echo "Name: {$_POST["Name"]}<br>";
			echo "Email: {$_POST["Email"]}<br>";
			echo "Gender: {$_POST["Gender"]}<br>";
			echo "Website: {$_POST["Website"]}<br>";
			echo "Comment: {$_POST["Comment"]}<br>";
			$emailTo = "aush.acharya@gmail.com";
			$subject = "Contact Form";
			$body = "A person name : ".$_POST["Name"] ." with the email : ".$_POST["Email"] ." have gender : ".$_POST["Gender"] ." have website ".$_POST["Website"] ." added comment : ".$_POST["Comment"];
			$sender = "From: aush.acharya@gmail.com";
			if (mail($emailTo, $subject , $body , $sender)) {
				echo "Mail sent successfully";

			} else {
				echo "Mail not sent.";
			}
		} else {
			echo "<span class='error'>Please Complete and Correct your form again.</span>";
		}
	}


}


function Test_User_Input($Data) {
	return $Data;
}



?>





<!DOCTYPE html>
<html>
<head>
	<title>Form Validation Project</title>
</head>
<style type="text/css">
	input[type="text"],input[type="email"],textarea{
		border: 1px solid_dashed;
		background-color: rgb(221,216,212);
		width: 600px;
		padding: .5em;
		font-size: 1.0em;
	}
	.error {
		color: red;
	}
</style>

<body>

	<?php ?>
	<h2>Form Validation with PHP.</h2>
	<form action="FormValidationProject.php" method="POST">
		<legend>* Please Fill Out the following Fields.</legend>
		<fieldset>
			Name:<br>
			<input class="input" type="text" name="Name" value="">
			*<span class="error"><?php echo $NameError?></span><br>
			E-mali:<br>
			<input class="input" type="text" name="Email" value="">
			*<span class="error"><?php echo $EmailError?></span><br>
			Gender:<br>
			<input class="radio" type="radio" name="Gender" value="Male">Male
			<input class="radio" type="radio" name="Gender" value="Female">Female
			*<span class="error"><?php echo $GenderError?></span><br>
			Website:<br>
			<input class="input" type="text" name="Website" value="">
			*<span class="error"><?php echo $WebsiteError?></span><br>
			Comment:<br>
			<textarea Name="Comment" rows="5" cols="25"></textarea>
			<br>
			<input type="Submit" name="Submit" value="Submit Your Information">

		</fieldset>
	</form>
</body>
</html>