<?php

$json = file_get_contents("data.json");
$products_data = json_decode($json, true);
$products = $products_data["products"];



// var_dump($json);
// var_dump($products);

//how would you pull the ID for each product and have it align with the rest of the product details (because ID is not part of the products array)

?>

<?php
foreach ($products as $product) {
	$image = $product["image"];
	$brand = $product["brand"];
	$name = $product["name"];
	$tagline = $product["tagline"];
	$description = $product["description"];
	$Price = $product["Price"];

	<li>
 }
?>

<li class="card">
	
</li>