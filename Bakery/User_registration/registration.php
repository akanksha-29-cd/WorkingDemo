<?php

	require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		form{
			/*position: absolute;
			top: 0;
			left: 0;
			transform: translate(-50%, -50%);
			width: 100%;
			height: auto;*/
		}
		.container{
			display: flex;
			flex-direction: column;
			align-items: baseline;
		}
		form{
			width: 80%;
			position: absolute;
			top: 0;
			left: 0;
			transform: translate(50%);
		}
	</style>
</head>
<body>
	<div>
		<?php
			if(isset($_POST['create'])){
				$firstname = $_POST['firstName'];
				$lastname = $_POST['lastName'];
				$email = $_POST['email'];
				$number = $_POST['number'];
				$pass = $_POST['password'];

				$sql = "INSERT INTO users(First Name, Last Name, Email, Phonenumber, password) VALUES (?,?,?,?,?)";
				$stmtInsert = $db->prepare($sql);
				$result = $stmtInsert->execute(array($firstname, $lastname, $email, $number, $pass));
				if($result){
					echo "succesfully saved";
				}else{
					echo "There are some errors found";
				}
			}
		?>
	</div>
	<form action="registration.php" method="post">
		<div class="container">
			<h1>Registration</h1>
			<p>Fill up the form with correct Values.</p>
			<label for="first_nme">First Name</label>
			<input type="text" name="firstName" id="first_nme">
			<label for="last_nme">Last Name</label>
			<input type="text" name="lastName" id="last_nme">
			<label for="email">Email</label>
			<input type="text" name="email" id="email">
			<label for="number">Phone Number</label>
			<input type="text" name="number" id="number">
			<label for="pass">Password</label>
			<input type="password" name="password" id="pass">
			<input type="submit" name="create" value="sign up" class="btn btn-primary">
		</div>
	</form>	




<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>