<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>--PERSONAL PAGE PRO--</title>

	<link rel="stylesheet" href="styles/site.css">

	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=DM+Serif+Display:ital@0;1&family=DM+Serif+Text:ital@0;1&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>


<?php 

	include('functions.php'); 

//Determine the active page (function)
	$pageId = currentPage();
	echo $pageId;

//Get data for the page (function)
	$pageData = pageData();
	// print_r($pageData)

?>


<body>
	 
	 <header>

		<?php
			include('templates/modules/site-header.php');
			include('templates/modules/page-header.php');
		?>
			
	</header>

	<main>

		<?php
			foreach ($pageData["sections"] as $section) {
				//TODO: NEED EVERY TEMPLATE IN 1 DIRECTORY
				include ( "templates/modules/$section[type].php" );
			}
		?>

	</main>

</body>

</html>