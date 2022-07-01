<?php

//set up data for each item
	

	$bodystyle = $product['bodystyle'];
	$size = $product['size'];
	$capacity = $product['capacity'];
	$year = $product['year'];
	$make = $product['make'];
	$model = $product['model'];
	$tagline = $product['tagline'];
	$description = $product['description'];
	$trim = $product['trim'];
	$price = $product['price'];
	$image = $product['image'];

//format price
	$price = "$" . number_format($price, 0, ".", ",");

//conditionals (button text)
	// $buttonText = "Buy";
	// $stockStatusClass = "";

	// if ($soldOut == 1) {
	// 	$buttonText = "Sold Out";
	// 	$stockStatusClass = "sold-out";
	// }

?>

<!-- front end data use -->
<li class="card vehicle <?=$stockStatusClass?>">
	<picture>
		<img src="<?=$image?>" alt="">
	</picture>
	<card-info>
		<card-text>
			<h2><?=$id?></h2>
			<h3 class="model"><?=$model?></h3>
			<h4 class="tagline"><?=$tagline?></h4>
			<a href="?page=detail&id=<?=$id?>">Click here</a>
		</card-text>
		<card-buy>
			<p class="price">From: <?=$price?></p>
			
		</card-buy>
	</card-info>
</li>




