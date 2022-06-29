<!DOCTYPE html>

<?php

//error check	
function showErrors() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
showErrors();

// router
	$page = null;

	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}
	else {
		$page = "home";
	}



?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basic Router w Detail</title>
	<link rel="stylesheet" href="style/site.css">
</head>

<body>
	<header>
		<?php include("site-menu.php")?>
	</header>

	<main>
		<?php
			if ( $page == "home") {
				include("home.php");
			}

			//change this to cars
			if ( $page == "suvs") {
				include("bodystyles/suvs.php");
			}

			if ( $page == "detail") {
				include("detail.php");
			}
			

		?>
	</main>

</body>

</html>