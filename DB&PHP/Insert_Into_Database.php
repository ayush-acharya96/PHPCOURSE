<?php
	if(isset($_POST["Submit"])) {

		if(!empty($_POST['EName']) && !empty($_POST['SSN'])) {

			//  assigning values from the form to the variables
			$EName = $_POST['EName'];
			$SSN = $_POST['SSN'];
			$Dept = $_POST['Dept'];
			$Salary = $_POST['Salary'];
			$HomeAddress = $_POST['HomeAddress'];
			//		 Establishing DAtabase Connection
			$Connection = mysql_connect('localhost','root','');
			//		Selecting Database
			$Selected = mysql_select_db('record',$Connection);
			$Query = "INSERT INTO emp_record(enam,ssn,dept,salary,homeaddress) 
					  VALUES('$EName','$SSN','$Dept','$Salary','$HomeAddress')";
			$Execute = mysql_query($Query);
			if($Execute) {
				echo "<span class='success'>The record has been added.</span>";
			}
		} else {
			echo "<span class='FieldInfoHeading'> Please at least Insert Name and SSN.</span>";
		}
	}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Insert Into Database</title>
</head>
<style type="text/css">
	input[type="text"],textarea{
		border: 1px solid_dashed;
		background-color: rgb(221,216,212);
		width: 480px;
		padding: .5em;
		font-size: 1.0em;
	}
	input[type="submit"] {
		color: white;
		font-size: 1.0em;
		font-family: Bitter,Georgia,Times,"Times New Roman",serif;
		width: 200px;
		height: 40px;
		background-color: #5D0580;
		border: 5px solid;
		border-bottom-left-radius: 35px;
		border-bottom-right-radius: 35px;
		border-top-left-radius: 35px;
		border-top-right-radius: 35px;
		border-color: rgb(221,216,212);
		font-weight: bold;
	}
	.FieldInfo {
		color: rgb(251,174,44);
		font-family: Bitter,Georgia,"Times New Roman",Times,serif;
		font-size: 1em;
	}
	.success {
		color: rgb(158,27,214);
		font-family: Bitter,Georgia,"Times New Roman",Times,serif;
		font-size: 1.4em;
		font-weight: bold;
	}
	.FieldInfoHeading {
		color: rgb(251,174,44);
		font-family: Bitter,Georgia,"Times New Roman", Times ,serif;
		font-size: 1.3em;
	}
	div{
		width: 500px;
		margin-left: 360px;
	}
</style>
<body>
	<div>
		<form action="Insert_Into_Database.php" method="post">
			<fieldset>
				<span class="FieldInfo">Employee Name:</span><br><input type="text" name="EName" value=""><br>
				<span class="FieldInfo">Social Security Number:</span><br><input type="text" name="SSN" value=""><br>
				<span class="FieldInfo">Department:</span><br><input type="text" name="Dept" value=""><br>
				<span class="FieldInfo">Salary:</span><br><input type="text" name="Salary" value=""><br>
				<span class="FieldInfo">Home Address:</span><br><textarea name="HomeAddress"></textarea><br>
				<br><input type="Submit" name="Submit" value="Summit Your Record">
			</fieldset>
		</form>
	</div>



	<?php

	?>
</body>
</html>