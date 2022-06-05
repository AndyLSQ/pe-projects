<?php
//set up data for each item
	$id = $speaker["id"];
	$image = $speaker["image"];
	$name = $speaker["name"];
	$tagline = $speaker["tagline"];
	$description = $speaker["description"];
	$type = $speaker["type"];
	$price = $speaker["price"];
	$onSale = $speaker["on-sale"];
	$soldOut = $speaker["sold-out"];
	$options = $speaker["options"];

//conditionals (button text)
	$buttonText = "Buy";
	$stockStatusClass = "";

	if ($soldOut == 1) {
		$buttonText = "Sold Out";
		$stockStatusClass = "sold-out";
	}

?>

<!-- front end data use -->
<li class="card speakers">
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




