<?php

$json = file_get_contents("data.json");
// print_r($json);
$products_data = json_decode($json, true);
// print_r($products_data);
$products = $products_data["products"];

// print_r($products);

?>


<section class="vehicles">


	<inner-column>
		<h2 id="list-title">2022 Vehicle Lineup</h2>

		

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

		<!-- TYPE NAV -->
		<nav class="type">
			<!-- Note: append #list-title to the end of the url to link to this part of the page (may still be jumpy though) -->
			<a href="?page=vehicles" class="<?php if($type == "") {echo "active";} ?>">All Vehicles</a>
			<a href="?page=vehicles&type=suv" class="<?php if($type == "suv") {echo "active";} ?>">SUVs</a>
			<a href="?page=vehicles&type=sedan" class="<?php if($type == "sedan") {echo "active";} ?>">Sedans</a>
			<a href="?page=vehicles&type=performance" class="<?php if($type == "performance") {echo "active";} ?>">Performance</a>
		</nav>

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

	<!-- <picture>
		<img src="https://lp-auto-assets.s3.amazonaws.com/22/subaru/lineup/header-suv.jpg" alt="2022-lineup">
	</picture> -->

</section>
