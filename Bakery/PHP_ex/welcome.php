<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
	<?php
	echo "Welcome ". $_POST["fname"] . " - ";
	echo $_POST["lname"];
	echo "<br>";
	echo "Your Email address is: " . $_POST["email"] . "<br>";
	?>
</body>
</html>