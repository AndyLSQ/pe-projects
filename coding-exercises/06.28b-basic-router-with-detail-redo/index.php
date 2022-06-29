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
	<title>Router with Detail</title>
	<link rel="stylesheet" href="style/style.css">
</head>


<body>

	<header class="site-menu">
		<nav class="site-menu">
			<a href="?page=home">Home</a>
			<a href="?page=menu">Menu</a>
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
			if ( $page == "menu") { 
				include("data.php")?>

				<section class="menu">
					<h2>Welcome to the menu page</h2>

					<!-- TYPE NAV -->
					<nav class="type">
						<a href="?page=menu">Full Menu</a>
						<a href="?page=menu&type=hamburger">Burgers</a>
						<a href="?page=menu&type=hot-dog">Dogs</a>
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
						//if it is, the $type variable is set...
						if ($type) {
							//run through all menu items
							foreach ($menu_data as $dish) {
								//if the item type matches the $type set
								if ($dish['type'] == $type) {
									//add the item to the $filtered array
									array_push($filtered, $dish);
								}
							}
							// print_r($filtered);

							// set the main data array to equal the filtered array 
							$menu_data = $filtered;
							//then the rest of the page can process as normal
						}


					?>


					<!-- DISPLAY CARDS -->
					<ul>
						<?php foreach ($menu_data as $dish) { ?>
							<?php
								$price = "$" . number_format($dish['price'], 2, ".", ",");
							?>

							<!-- item card -->
							<li class="dish">
								<card class="dish">
									<h3><?=$dish['name']?></h3>
									<!-- use number formatted price instead of pulling straight from array -->
									<p>Price: <?=$price?></p>
									<a href="?page=detail&id=<?=$dish['id']?>">
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
				$current_dish = null;

				if ( isset($_GET['id']) ) {
					$id = $_GET['id'];
				}
				else {
					echo "Please select a menu item.";
				}

				//look at each item
				foreach ($menu_data as $dish) {
					//if item matches the one we want, pull in the data
					if ($dish['id'] == $id) {
						$current_dish = $dish;
					}
				}
				?>

				<!-- DETAIL -->
				<!-- return data to the template and display -->
				<section class="detail">
					<h2>Item detail</h2>
					<h3><?=$current_dish['name']?></h3>
					<p>Description: <?=$current_dish['description']?></p>
					<p>Price: <?=$current_dish['price']?></p>
				</section>

		<?php	} ?>


	</main>

</body>
</html>








