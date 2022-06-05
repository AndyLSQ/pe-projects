<?php
//set up data for each item
	$id = $headphone["id"];
	$image = $headphone["image"];
	$name = $headphone["name"];
	$tagline = $headphone["tagline"];
	$description = $headphone["description"];
	$type = $headphone["type"];
	$price = $headphone["price"];
	$onSale = $headphone["on-sale"];
	$soldOut = $headphone["sold-out"];
	$options = $headphone["options"];

//conditionals (button text)
	$buttonText = "Buy";
	$stockStatusClass = "";

	if ($soldOut == 1) {
		$buttonText = "Sold Out";
		$stockStatusClass = "sold-out";
	}

?>

<!-- front end data use -->
<li class="card headphones">
	<picture>
		<img src="<?=$image?>" alt="">
	</picture>
	<card-info>
		<card-text>
			<h3 class="name"><?=$name?></h3>
			<h4 class="tagline"><?=$tagline?></h4>
			<p class="description"><?=$description?></p>
		</card-text>
		<p class="price"><?=$price?></p>
		<p class="status"><?=$buttonText?></p>
	</card-info>
</li>




