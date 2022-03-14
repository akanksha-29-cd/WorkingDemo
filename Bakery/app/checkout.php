<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/menu_styles.css">
	<link rel="stylesheet" type="text/css" href="CSS/checkout.css">
	<?php
		require_once('header-files.php');
	?>
</head>
<body>
	<?php
		require_once('header.php');
	?>
	<?php
		require_once('config.php');
	?>
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
	<main class="billing-form-page">
		<div class="container">
			<form action="checkout.php" method="post">
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
		<div class="order-details">
			<div class="container">
				<h2 class="order-details-h2">Your order</h2>
				<table class="order-table">
					<thead>
						<tr>
							<th>Product</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Square Bun<span>X1</span></th>
							<td>$60.00</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>subtotal</th>
							<td>$60.00</td>
						</tr>
						<tr>
							<th>Total</th>
							<td>$60.00</td>
						</tr>
					</tfoot>		
				</table>
				<div class="oder-details-btn">
					<a href="#" class="order-btn">Place order</a>
				</div>
			</div>
		</div>
	</main>
	<?php
		require_once('footer.php');
	?>
	<script src="JS/menu.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script type="text/javascript">
		
	</script>
</body>
</html>