<!DOCTYPE html>
<html>
<head>
	<?php

		require_once('header-files.php');
	?>
	<!-- <link rel="stylesheet" href="SCSS/styles.scss"> -->
	<link rel="stylesheet" type="text/css" href="CSS/menu_styles.css">
	<link rel="stylesheet" href="CSS/crusty-baugutee.css">
	<link rel="stylesheet" href="CSS/poppy-bagel.css">
</head>
<body>
	<?php

		require_once('header.php');
	?>

	<main class="product-details-page">
		<h1 class="product-details-page-h1">Product details</h1>
		<div class="product-details-page--container">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="product-details--img-gallery">
							<div class="img-gallery--big-img" id="big-img">
								<a href="Images/poppy-bagel.jpg"><img src="Images/poppy-bagel.jpg" alt="product-details" class="img-fluid"></a>
							</div>
							<div class="img-gallery--small-img" id="small-img">
								<a href="Images/poppy-bagel-gallery-1.jpg"><img src="Images/poppy-bagel-gallery-1.jpg" class="img-fluid"></a>
								<a href="Images/poppy-bagel-gallery-2.jpg"><img src="Images/poppy-bagel-gallery-2.jpg" class="img-fluid"></a>
								<a href="Images/poppy-bagel-gallery-3.jpg"><img src="Images/poppy-bagel-gallery-3.jpg" class="img-fluid"></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-details-page-desc">
							<h2>Poppy Bagel</h2>
							<p>$120.00</p>
							<p></p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
							<ul>
								<li>Cotton Blend</li>
								<li>Straight fit</li>
								<li>Dry clean</li>
							</ul>
							<p>code: 001</p>
							<p>category: Cookie</p>
							<p>tags: Testy, yummy, delicious</p>
							<button>Add to cart</button>
							<p>Additional Information</p>
							<hr>
							<p>weight: 1kg</p>
							<p>Dimensions: 150 x 90 x 90cm</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php

		require_once('footer.php');
	?>
<script src="JS/menu.js"></script>
<script src="JS/poppy-bagel.js"></script>
</body>
</html>