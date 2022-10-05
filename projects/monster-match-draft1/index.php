<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Monster Match | Adoption Agency</title>

	<meta name="description" content="Scary monsters in need of loving homes">

	<!-- Note: Standard **PNG** metadata image size ~(1200 x 630) -->
	<meta property="og:image" content="https://peprojects.dev/alpha-4/andy/images/metadata-image.png">

	<!-- LINK fonts as needed -->
	<link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=DM+Serif+Display:ital@0;1&family=DM+Serif+Text:ital@0;1&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- LINK primary stylesheet -->
	<link rel="stylesheet" href="style/style.css">

	<!-- LINK favicon -->
	<link rel="icon" type="image/svg+xml" href="images/svg/favicon.svg">

</head>


<!-- PHP SETUP -->
<?php

	include('functions.php');

	//Determine the active page (function)
	$pageId = currentPage();
	echo $pageId;

	//Get data for the page (function)
	$pageData = pageData();

?>


<body class="<?=$pageId?>">

	<?php include('site-header.php')?>;

	<main>

		<section class="<?=$pageId?>">
			<inner-column class="<?=$pageId?>">
				<?php include('templates/pages/$pageId.php')?>;
			</inner-column>
		</section>








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
						//if it is, the $type variable is set so type will be true...
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








