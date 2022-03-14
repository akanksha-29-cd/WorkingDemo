<!DOCTYPE html>
<html>
<head>
	<?php
		require_once('header-files.php');
	?>
	<link rel="stylesheet" type="text/css" href="CSS/menu_styles.css">
	<link rel="stylesheet" href="CSS/crusty-baugutee.css">
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
								<a href="Images/crusty-baguetee.jpg"><img src="Images/crusty-baguetee.jpg" alt="product-details" class="img-fluid"></a>
							</div>
							<div class="img-gallery--small-img" id="small-img">
								<a href="Images/crusty-baguetee-gallery-1.jpg"><img src="Images/crusty-baguetee-gallery-1.jpg" class="img-fluid"></a>
								<a href="Images/crusty-baguetee-gallery-2.jpg"><img src="Images/crusty-baguetee-gallery-2.jpg" class="img-fluid"></a>
								<a href="Images/crusty-baguetee-gallery-3.jpg"><img src="Images/crusty-baguetee-gallery-3.jpg" class="img-fluid"></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-details-page-desc">
							<h2 class="product-details-h2">Crusty Baguette</h2>
							<p class="product-details-p"><span>$</span>120.00</p>
							<p class="product-details-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
							<ul class="product-details-list">
								<li>Cotton Blend</li>
								<li>Straight fit</li>
								<li>Dry clean</li>
							</ul>
							<p class="product-details-code">code: <span class="code-number">001</span></p>
							<p class="product-details-cateory">category: <span class="category"> Cookie</span></p>
							<p class="product-details-tag">tags:  <span class="tags">Testy, yummy, delicious</span></p>
							<button class="product-details-submit-button">Add to cart</button>
							<p class="product-details-additional-info">Additional Information</p>
							<hr>
							<p class="product-details-weight">weight: <span class="weight">1kg</span></p>
							<p class="product-details-dimension">Dimensions: <span class="dimension">150 x 90 x 90cm</span></p>
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
