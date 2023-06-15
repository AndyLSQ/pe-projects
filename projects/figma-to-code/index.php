<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Responsive Layout Garden</title>

	<meta name="description" content="This page contains a variety of responsive layouts that can be mixed and matched to create a custom site for many use cases.">

	<!-- Note: Standard metadata image size ~(1200 x 630) -->
	<meta property="og:image" content="https://peprojects.dev/alpha-4/andy/projects/figma-to-code/images/meta/ipsum-metadata-image1.png">

	<link rel="stylesheet" href="styles/site.css">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- LINK favicon -->
	<link rel="icon" type="image/svg+xml" href="images/meta/favicon.png">

</head>

<?php

	// TODO: CREATE FUNCTIONS PAGE

	include('functions.php');

	//Determine the active page (function)
	$pageId = currentPage();
	// echo $pageId;

	//Get data for the page (function)
	$pageData = pageData();
	// print_r($pageData)

?>


<body class="<?=$pageId?>">
	<?php

		include('templates/pages/default-page.php');

	?>



</body>


</html>