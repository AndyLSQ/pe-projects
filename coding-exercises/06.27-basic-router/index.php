<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Router Fun</title>
</head>


<body>

<?php

$page = null;

if ( isset($_GET["page"]) ) {
	$page = $_GET["page"];
} else {
	$page = "home";
}

?>


<h1>Car Company Website</h1>

<?php

	include("site-menu.php");

	if ($page == "home") {
		include("home.php");
	}

	if ($page == "suvs") {
		include("suvs.php");
	}

	if ($page == "cars") {
		include("cars.php");
	}

	if ($page == "performance") {
		include("performance.php");
	}



?>

</body>
</html>