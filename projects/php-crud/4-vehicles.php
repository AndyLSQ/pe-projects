<?php

$json = file_get_contents("data.json");
// print_r($json);
$products_data = json_decode($json, true);
// print_r($products_data);
$products = $products_data["products"];

// print_r($products);

?>


<section class="vehicles">

	<picture>
		<img src="https://lp-auto-assets.s3.amazonaws.com/22/subaru/lineup/header-suv.jpg" alt="2022-lineup">
	</picture>

	<inner-column>
		<h2 id="list-title">2022 Vehicle Lineup</h2>

		<!-- TYPE NAV -->
		<nav class="type">
			<a href="?page=vehicles#list-title">All Vehicles</a>
			<a href="?page=vehicles&type=suv#list-title">SUVs</a>
			<a href="?page=vehicles&type=sedan#list-title">Sedans</a>
			<a href="?page=vehicles&type=performance#list-title">Performance</a>
		</nav>

		<!-- TYPE FILTER -->
		<?php
			// initialize $type variable and $filtered array
			$type = null;
			$filtered = [];

			//check if type is specified
			if ( isset($_GET['type']) ) {
				$type = $_GET['type'];
			}
			//if it is, the $type variable is set so type will be true...
			if ($type) {
				//run through all vehicles
				foreach ($products as $id => $product) {
					//if the item type matches the $type set
					if ($product['bodystyle'] == $type) {
						//add the item to the $filtered array
						// array_push($filtered, $id => $product);
						$filtered[$id] = $product;
					}
				}

				// set the main data array to equal the filtered array 
				$products = $filtered;
				//then the rest of the page can process as normal
			}
		?>


		<ol class="vehicle-list">
			<?php
				foreach ($products as $id => $product) {
					include "card.php";
				}

				// foreach ($products as $product) {
				// 	include "card.php";
				// }
			?>
		</ol>
	</inner-column>
</section>
