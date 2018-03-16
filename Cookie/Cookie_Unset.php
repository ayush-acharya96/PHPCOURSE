<?php

	$ExpireTime = time() + 86400;
	// echo "Time is". $ExpireTime;
	setcookie("Name","Ayush",$ExpireTime);
	setcookie("Age","22",$ExpireTime);
	//Unset Cookie

	$ExpireTime_Unset = Time()-86400;
	//setcookie("Name","Ayush",$ExpireTime_Unset);
	//setcookie("Name", null);
	setcookie("Name","",$ExpireTime_Unset);

	if(isset($_COOKIE['Name'])) {
		echo 'Cookie is set with the name of '. $_COOKIE['Name'];

	} else {
		echo 'Cookie is not set';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Unsetting Cookie</title>
</head>
<body>


</body>
</html>