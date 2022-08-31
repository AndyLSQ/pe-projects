<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Andy is a front-end web developer with a passion for creating clean, responsive websites.">

	<meta property="og:image" content="https://peprojects.dev/alpha-4/andy/projects/personal-page-pro/images/metadata-img.png">

	<title>Andy LSQ | Web Developer</title>

	<link rel="stylesheet" href="styles/site.css">

	<link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=DM+Serif+Display:ital@0;1&family=DM+Serif+Text:ital@0;1&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">



</head>


<?php 

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

	if ($pageId == "project") {
		include('templates/pages/project.php');
	}
	elseif ($pageId == "exercise") {
		include('templates/pages/exercise.php');
	}
	elseif ($pageId == "layout") {
		include('templates/pages/layout.php');
	}
	elseif ($pageId =="resume") {
		include 'templates/pages/resume.php';
	}
	else {
		include('templates/pages/default-page.php');
	}

	include('templates/modules/footer.php');

	?>



</body>

</html>