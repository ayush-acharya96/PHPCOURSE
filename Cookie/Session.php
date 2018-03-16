<?php 
session_start();
?>
<?php

$_SESSION['Name'] = "Ayush Acharya";
$Name = $_SESSION["Name"];
echo $_SESSION['Name']. "<br>";
?>
<?php

$_SESSION['Age'] ="21";
$Age = $_SESSION['Age'];
echo $_SESSION['Age'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>

</body>
</html>