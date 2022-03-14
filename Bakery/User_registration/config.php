<!DOCTYPE html>
<html>
<head>
	<title>Configuration</title>
</head>
<body>
	<?php
		// $db_host = 'localhost';
		$db_user = 'root';
		$db_pass = 'root';
		// $db_name = 'user_accounts';

		$db = new PDO('mysql:host=localhost;dbname=user_accounts;charset=utf8', $db_user, $db_pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
	?>
</body>
</html>