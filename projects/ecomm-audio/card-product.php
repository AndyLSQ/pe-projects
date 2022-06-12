<!-- This file will run in a loop for all products in the array -->
<?php
	$image = $product["image"];
	$brand = $product["brand"];
	$name = $product["name"];
	$tagline = $product["tagline"];
	$description = $product["description"];
	$price = $product["Price"];
	$stock = number_format($product["stock"]);

	echo "stock: $stock";

	if ($stock="0") {
		$buttonText = "Sold Out";
	} elseif ($stock<"10") {
		$buttonText = "Low Stock";
	} else {
		$buttonText = "Buy Now";
	};
	


?>

<!-- front end data use -->
<li class="card products <?=$stockStatusClass?>">
	<card> <!-- NEEDED AN EXTRA LAYER HERE TO GET PICTURE TO FORMAT CORRECTLY. Text was affecting image size -->
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
	</card>
</li>
