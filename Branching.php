<!DOCTYPE html>
<html>
<head>
	<title>Branching Statements</title>
</head>
<body>

	<?php 
	$Names =array("ayush","aashish","jessica","sunita","chitiz","sujan","suraj","dishop","sraman","purnika","asmita");
	for($i=0;$i<10;$i++){
		if($Names[$i] == "sunita"){
			continue;
		}
		echo "$Names[$i] <br>";
	} 

	?>
	

</body>
</html>