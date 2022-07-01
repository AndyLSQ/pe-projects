<?php
	
	//bring in data
	$json = file_get_contents("data.json");
	// print_r($json);
	$products_data = json_decode($json, true);
	// print_r($products_data);
	$products = $products_data["products"];

	//figure out which item will show detail
	$id = null;
	$current_vehicle = null;

	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];
	}
	else {
		echo "Please select a vehicle.";
	}

	//look at each item
	// foreach ($products as $product) {
	// 	//if item matches the one we want, pull in the data
	// 	if ($product['id'] == $id) {
	// 		$current_vehicle = $product;
	// 	}
	// }

	$current_vehicle = $products[$id];

?>


<section class="detail">
	<inner-column>
		<picture>
			<img src="<?=$current_vehicle['image']?>" alt="">
		</picture>
		<h2><?=$current_vehicle['model']?></h2>
		<h3><?=$current_vehicle['tagline']?></h3>
		<p><?=$current_vehicle['description']?></p>
		<p>Size: <?=$current_vehicle['size']?></p>
		<p>Seating Capacity: <?=$current_vehicle['capacity']?></p>
		<p>Starting from: <?=$current_vehicle['price']?></p>
	</inner-column>

</section>
