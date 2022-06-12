<?php
//set up data for each item
	$id = $mtb["id"];
	$image = $mtb["image"];
	$name = $mtb["name"];
	$tagline = $mtb["tagline"];
	$description = $mtb["description"];
	$price = $mtb["price"];
	$soldOut = $mtb["sold-out"];

//conditionals (button text)
	$buttonText = "Buy";
	$stockStatusClass = "";

	if ($soldOut == 1) {
		$buttonText = "Sold Out";
		$stockStatusClass = "sold-out";
	}

?>

<!-- front end data use -->
<li class="card mtbs <?=$stockStatusClass?>">
	<picture>
		<img src="<?=$image?>" alt="">
	</picture>
	<card-info>
		<card-text>
			<h3 class="name"><?=$name?></h3>
			<h4 class="tagline"><?=$tagline?></h4>
			<p class="description"><?=$description?></p>
		</card-text>
		<card-buy>
			<p class="price"><?=$price?></p>
			<p class="status"><?=$buttonText?></p>
		</card-buy>
	</card-info>
</li>




