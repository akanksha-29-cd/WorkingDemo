<!-- <?php
$localhost = 'localhost';
$user = 'root';
$password = '';
$db = 'registration';

$con =mysqli_connect($localhost, $user, $password);
mysqli_select_db($con, $db);
	if(isset($_POST['submit'])){
		$uname = $_POST['userName'];
		$upass = $_POST['pass'];
		$sql = "SELECT * FROM `login-form` where user ='$uname' AND password='$upass' LIMIT 1";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result) == 1){
			echo "You have successfully logged in";
			exit();
		}
		else{
			echo "You have entered incorrect number";
			exit();
		}
	}
?> -->

<!DOCTYPE html>
<html>
<head>
		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin side</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="SCSS/styles.scss"> -->
	<link rel="stylesheet" type="text/css" href="CSS/menu_styles.css">
	<link rel="stylesheet" type="text/css" href="CSS/admin.css">
</head>
<body>
	<form action="login-check.php" class="box" method="POST">
		<h1>Login</h1>	
		<input type="text" name="userName" placeholder="username" autocomplete="off">
		<input type="password" name="pass" placeholder="password" autocomplete="off">
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>