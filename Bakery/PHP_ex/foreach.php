<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$arr = array(1,2,3,4);
	foreach ($arr as $value) {
		$value = $value * 2;
	}
	echo "\$arr=". $arr[] ."<br>";
	echo "\$value=" . $value;
	?>
</body>
</html>