<!DOCTYPE html>
<html>
<head>
	<title>PHP Form Handeling</title>
</head>
<body>
	<h1>PHP Form Handeling</h1>
	<form action="welcome.php" method="post">
		First Name:<input type="text" name="fname"><br>
		Last Name:<input type="text" name="lname"><br>
		Email:<input type="text" name="email"><br>
		Website:<input type="text" name="website"><br>
		Comment:<textarea name="comment" rows="4" cols="20"></textarea><br>
		Gender:
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<input type="submit">
	</form>
	
</body>
</html>