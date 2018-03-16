<!DOCTYPE html>
<html>
<head>
	<title>Connection</title>
</head>
<body>

	<?php

		$Connection = mysql_connect('localhost','root','');
		if($Connection) {
			echo "Database connected";
		} else {
			error.mysql_connect();
		}
		$Selected = mysql_select_db('record',$Connection);

		if($Selected) {
			echo "<br> Database selected";
		} else {
			error.mysql_select_db();
		}

	?>

</body>
</html>