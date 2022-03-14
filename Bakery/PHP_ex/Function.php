<?php

	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Using Function</title>
</head>
<body>
	<h1>Using Function</h1>
	<?php
	function writemsg(){
		echo "Hello world.<br>";
	}
	writemsg();
	function familyname($fname, $lname){
		echo "$fname reference.<br>";
	}
	familyname("Akanksha", "Mohanty");
	familyname("Michelle", "Mendonca");
	familyname("Jayshree", "sonawane");

	function setHeight($minheight = 50){
		echo "The height is: $minheight <br>";
	}
	setHeight(350);
	setHeight();
	setHeight(130);
	setHeight(80);

	function sum($x, $y){
		$z=$x+$y;
		return $z; 
	}
	echo "5+10=" . sum(5,10) . "<br>";
	echo "7+13=" . sum(7,13) . "<br>";
	echo "2+14=" . sum(2,14) . "<br>";
	?>
</body>
</html>