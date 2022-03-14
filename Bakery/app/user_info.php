<!DOCTYPE html>
<html>
<head>
	
	<!-- <link rel="stylesheet" href="SCSS/styles.scss"> -->
	<link rel="stylesheet" type="text/css" href="CSS/menu_styles.css">
	<link rel="stylesheet" type="text/css" href="CSS/user-registraion.css">
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
		$query="SELECT * FROM user_acc";
		$data = $db->query($query);
	?>
	
	<main class="user-order-form">
		<div class="container">
			<form action="#" method="post">
				<h1 class="user-info-h1">User detail form</h1>
				<table class="user-info-table">
					<thead>
						<tr>
							<th>User ID</th>
							<th>First name</th>
							<th>Last name</th>
							<th>Email address</th>
							<th>phone</th>
							<th>Address</th>
							<th>City/Town</th>
							<th>State</th>
							<th>Pin Code</th>
							<th>Password</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($data as $rows){
						?>
								<tr>
									<td><?php echo $rows['id']; ?></td>
									<td><?php echo $rows['fName']; ?></td>
									<td><?php echo $rows['lName']; ?></td>
									<td><?php echo $rows['email']; ?></td>
									<td><?php echo $rows['phone']; ?></td>
									<td><?php echo $rows['address']; ?></td>
									<td><?php echo $rows['city']; ?></td>
									<td><?php echo $rows['state']; ?></td>
									<td><?php echo $rows['pin']; ?></td>
									<td><?php echo $rows['password']; ?></td>
								</tr>
							<?php
							}
						?>	
					</tbody>
				</table>
			</form>
			<div class="order-details">
				<a href="#">Go to Order Details <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
			</div>
		</div>
	</main>
	<?php
		require_once('footer.php');
	?>
	<script src="JS/menu.js"></script>
</body>
</html>