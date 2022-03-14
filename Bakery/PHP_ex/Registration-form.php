<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<main>
	<form action="#" method="post">
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
				<div class="form-group">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="check" name="check">
						<label for="check">Create an account?</label>
					</div>
				</div>
				<div class="form-group form-submit">
					<input type="submit" name="submit" value="submit" class="form-submit-btn">
				</div>
			</div>
		</form>
</main>
</body>
</html>