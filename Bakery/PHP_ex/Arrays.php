<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Array Example</h1>
	<?php
		$cars = array("volvo","BMW","Toyota");
		echo "I like " . $cars[0] . "," . $cars[1] . "," . "and" . $cars[2] . ".<br>";
		echo count($cars);
		echo "<br>";
		$arrlength = count($cars);
		for($x=0; $x < $arrlength; $x++){
			echo $cars[$x];
			echo "<br>";
		}
	?>
</body>
</html>