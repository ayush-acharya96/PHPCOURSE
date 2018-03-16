<!DOCTYPE html>
<html>
<head>
	<title>URL</title>
</head>
<body>
	<?php ?>
	<?php 
		$Web = "Google Nepal";
		$Search = "Ayush Acharya Online Courses & Websites";
		$Result = "https://".rawurlencode($Web)."?Search=".urlencode($Search);
		echo $Result."<br>";

	?>

</body>
</html>