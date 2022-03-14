<?php
	session_start();
	$con = mysqli_connect('localhost', 'root');
	if($con){
		echo "connection successfully";
	}else{
		echo "connection unsuccesfull";
	}

	$db = mysqli_select_db($con, 'registration');
	if(isset($_POST['submit'])){
		$uname = $_POST['userName'];
		$pass = $_POST['pass'];
		$sql = "SELECT * FROM `login-form` WHERE user = '$uname' AND password = '$pass";
		$query = mysqli_query($con, $sql);
		$row = mysqli_num_rows($query);
			if($row == 1){
				echo "login succesfull";
				$_SESSION['user'] = $uname;
				header('location:Function.php');
			}else
			{
				echo "login failed";
				header('location:admin.php');
			}
		}

?>