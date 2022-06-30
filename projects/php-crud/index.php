<!DOCTYPE html>

<?php
//ERROR CHECK
function showErrors() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
showErrors();

//ROUTER
//initialize page variable
$page = null;

//if its set in the url, pull the url value into the variable
if ( isset($_GET['page']) ) {
	$page = $_GET['page'];
}
//otherwise page is home (if nothing is set)
else {
	$page = "home";
}

?>




<!-- HTML STRUCTURE -->
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crud Cars</title>
	<link rel="stylesheet" href="style/style.css">
</head>


<body>

	<header class="site-menu">
		<nav class="site-menu">
			<a href="?page=home">Home</a>
			<a href="?page=inventory">Inventory</a>
		</nav>
		<h1>Company Name</h1>
	</header>

	<main>
		<?php
			if ( $page == "home") { ?>

				<section class="home">
					<h2>Welcome to the home page</h2>
				</section>

		<?php	} ?>

		<?php
			if ( $page == "inventory") { 
				include("data.php")?>

				<section class="inventory">
					<h2>Welcome to the inventory page</h2>

					<!-- TYPE NAV -->
					<nav class="type">
						<a href="?page=inventory">All Vehicles</a>
						<a href="?page=inventory&type=suv">SUVs</a>
						<a href="?page=inventory&type=sedan">Sedans</a>
						<a href="?page=inventory&type=performance">Performance</a>
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
							//run through all inventory items
							foreach ($inventory_data as $vehicle) {
								//if the item type matches the $type set
								if ($vehicle['type'] == $type) {
									//add the item to the $filtered array
									array_push($filtered, $vehicle);
								}
							}
							// print_r($filtered);

							// set the main data array to equal the filtered array 
							$inventory_data = $filtered;
							//then the rest of the page can process as normal
						}


					?>


					<!-- DISPLAY CARDS -->
					<ul>
						<?php foreach ($inventory_data as $vehicle) { ?>
							<?php
								$price = "$" . number_format($vehicle['price'], 2, ".", ",");
							?>

							<!-- item card -->
							<li class="vehicle">
								<card class="vehicle">
									<h3><?=$vehicle['name']?></h3>
									<!-- use number formatted price instead of pulling straight from array -->
									<p>Price: <?=$price?></p>
									<a href="?page=detail&id=<?=$vehicle['id']?>">
									Click here
								</a>
								</card>
							</li>

							<?php } ?>
						</ul>
				</section>

		<?php	}

			include("data.php");

			if ( $page == "detail") {

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
				foreach ($inventory_data as $vehicle) {
					//if item matches the one we want, pull in the data
					if ($vehicle['id'] == $id) {
						$current_vehicle = $vehicle;
					}
				}
				?>

				<!-- DETAIL -->
				<!-- return data to the template and display -->
				<section class="detail">
					<h2>Item detail</h2>
					<h3><?=$current_vehicle['name']?></h3>
					<p>Description: <?=$current_vehicle['description']?></p>
					<p>Price: <?=$current_vehicle['price']?></p>
				</section>

		<?php	} ?>


	</main>

</body>
</html>








