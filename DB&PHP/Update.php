<?php

//  Database connection and selection
$Connection = mysql_connect('localhost','root','');
$Selected = mysql_select_db('record',$Connection);

//  select record and display
$Update_Record_Id = @$_GET['Update'];
$Select_Query = "SELECT * FROM emp_record WHERE id=$Update_Record_Id";
$Execute_Select = mysql_query($Select_Query);

while($DataRows = mysql_fetch_array($Execute_Select)) {
	$Update_Id = $DataRows['id'];
	$EName = $DataRows['enam'];
	$SSN = $DataRows['ssn'];
	$Dept = $DataRows['dept'];
	$Salary = $DataRows['salary'];
	$HomeAddress = $DataRows['homeaddress'];
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Update Database</title>
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
		<form action="Update.php?Update_Id=<?php $Update_Id; ?>" method="post">
			<fieldset>
				<span class="FieldInfo">Employee Name:</span><br><input type="text" name="EName" value="<?php echo $EName; ?>"><br>
				<span class="FieldInfo">Social Security Number:</span><br><input type="text" name="SSN" value="<?php echo $SSN; ?>"><br>
				<span class="FieldInfo">Department:</span><br><input type="text" name="Dept" value="<?php echo $Dept; ?>"><br>
				<span class="FieldInfo">Salary:</span><br><input type="text" name="Salary" value="<?php echo $Salary; ?>"><br>
				<span class="FieldInfo">Home Address:</span><br><textarea name="HomeAddress"><?php echo $HomeAddress; ?></textarea><br>
				<br><input type="Submit" name="Submit" value="Summit Your Record">
			</fieldset>
		</form>
	</div>



	<?php

	?>
</body>
</html>

<?php 

//  Database connection and selection
$Connection = mysql_connect('localhost','root','');
$Selected = mysql_select_db('record',$Connection);

// $Connection = mysql_connect('localhost','root','');
//$Selected = mysql_select_db('record',$Connection);
// Insert record and insert updated record
if(isset($_POST['Submit'])) {
	//if(!empty($EName) && !empty($SSN)) {
		$Update_Id = $_GET['$Update_Id'];
		$EName = $_POST['EName'];
		$SSN = $_POST['SSN'];
		$Dept = $_POST['Dept'];
		$Salary = $_POST['Salary'];
		$HomeAddress = $_POST['HomeAddress'];

		/*print_r($_POST);
		die();*/

		$Update_Query = "UPDATE emp_record SET
							enam = '$EName',
							ssn = '$SSN',
							dept = '$Dept',
							salary = '$Salary',
							homeaddress = '$HomeAddress'
						WHERE id = '$Update_Id'";
		$Execute_Update = mysql_query($Update_Query);
		if($Execute_Update) {
			function redirect_to($NewLocation) {
				header("Location:".$NewLocation);
				exit;
			}
			redirect_to("Update_Into_Database.php?Updated=Record Updated Successfully");
		}
	// } else {
	// 	echo "Name and SSN cannot be empty.";
	// }

}




?>