<?php
//set up data for each item
	$id = $rb["id"];
	$image = $rb["image"];
	$name = $rb["name"];
	$tagline = $rb["tagline"];
	$description = $rb["description"];
	$price = $rb["price"];
	$soldOut = $rb["sold-out"];

//conditionals (button text)
	$buttonText = "Buy";
	$stockStatusClass = "";

	if ($soldOut == 1) {
		$buttonText = "Sold Out";
		$stockStatusClass = "sold-out";
	}

?>

<!-- front end data use -->
<li class="card rbs  <?=$stockStatusClass?>">
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




