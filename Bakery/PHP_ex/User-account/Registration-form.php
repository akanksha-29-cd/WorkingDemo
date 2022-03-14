<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div>
		<?php
			if (isset($_POST['submit'])) {
				# code...
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$address = $_POST['address'];
				$city = $_POST['city'];
				$state = $_POST['state'];
				$pin = $_POST['pin-code'];
				$password = $_POST['pass'];

				$sql = "INSERT INTO user_acc(fName, lName, email, phone, address, city, state, pin, password) VALUES(?,?,?,?,?,?,?,?,?)";

				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute(array($firstName,$lastName,$email,$phone,$address,$city,$state,$pin,$password));

					// echo $firstName." ".$lastName." ".$email."".$phone." ".$address." ".$city." ".$state." ".$pin." ".$password." ".;
				if($result){
					echo "Succesully Saved";
				}else{
					echo "There is some server error";
				}
			}

		?>
	</div>
<main>
	<div class="container">
		<h1>Registration</h1>
		<p>Fill up the form with correct Values:</p>
		<form action="Registration-form.php" method="post">
			<h1 class="billing-form-h1">Billing Details</h1>
			<div class="container">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="firstName">First Name</label>
						<input type="text" name="firstName" id="firstName" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label for="lastName">Last Name</label>
						<input type="text" name="lastName" id="lastName" class="form-control">
					</div>
				</div>
				<div class="form-row">
				<div class="form-group col-md-6">
					<label for="email">Email Address</label>
					<input type="text" name="email" id="email" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label for="phone">Phone</label>
					<input type="text" name="phone" id="phone" class="form-control">
				</div>
				</div>
				<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" id="address" class="form-control">
				</div>
				<div class="form-group">
				<label for="city">city/Town</label>
				<input type="text" name="city" id="city" class="form-control">
				</div>
				<div class="form-row">
				<div class="form-group col-md-6">
					<label for="state">state</label>
					<input type="text" name="state" id="state" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label for="pin-code">Pin code</label>
					<input type="text" name="pin-code" id="pin-code" class="form-control">
				</div>
				</div>
				<div class="form-group col-md-12 px-0">
					<label for="pass">Password</label>
					<input type="password" name="pass" id="pass" class="form-control">
				</div>
				<div class="form-group form-submit">
					<input type="submit" name="submit" id="register" value="submit" class="form-submit-btn">
				</div>
			</div>
		</form>
	</div>		
</main>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('$register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var firstname =$('#firstName').val();
				var lastname =$('#lastName').val();
				var email =$('#email').val();
				var phone =$('#phone').val();
				var address =$('#address').val();
				var city =$('#city').val();
				var state =$('#state').val();
				var pin =$('#pin').val();
				var password =$('#pass').val();

					e.preventDefault();

					$.ajax({
						type: 'POST',
						url: 'process.php',
						data: {
							firstname: firstName,
							lastname: lastName,
							email: email,
							phone: phone,
							address: address,
							city: city,
							state: state,
							pin: pin,
							Password: pass
						},
						success: function(data){
							swal.fire({
								'title': 'Success',
								'text': 'Succesully registered',
								'type': 'success'
							})
						},
						error: function(data){
							swal.fire({
								'title': 'Error',
								'text': 'There were errors while using data',
								'type': 'error'
							})
						}
					});
			}else{
				
			}
			
			})
		});
</script>
</body>
</html>