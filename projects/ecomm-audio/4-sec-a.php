<?php

$json = file_get_contents("data.json");
$products_data = json_decode($json, true);
$products = $products_data["products"];


?>

<section class="sec-a products">
	<inner-column>
		<h2>Products</h2>
		<ol>
			<?php
				foreach ($products as $product) {
					include "card-product.php";
				}
			?>
		</ol>
	</inner-column>
</section>
