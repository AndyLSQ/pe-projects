<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>--personal page--</title>

	<link rel="stylesheet" href="styles/site.css">
</head>





<?php include('functions.php'); ?>




<?php 

	$pageId="home";
	if ( isset($_GET["page"]) ) {
		$pageId = $_GET["page"];
	}

	echo $pageId;

	if ($pageId == "home") {
		$json = file_get_contents('data/pages/home.json');
		$pageData = json_decode($json, true);
	}

	if ($pageId == "projects") {
		$jsonPage = file_get_contents('data/pages/projects.json');
		$pageData = json_decode($jsonPage, true);

		$json = file_get_contents('data/projects-data.json');
		$projectsData = json_decode($json, true);
	}

	if ($pageId == "project") {
		// $jsonPage = file_get_contents('data/projects-data.json');
		// $pageData = json_decode($jsonPage, true);

		$json = file_get_contents('data/projects-data.json');
		$projectsData = json_decode($json, true);
		foreach ($projectsData as $project) {
			if ($project["id"] == $_GET["id"]) {
				$projectData = $project;
			}
		}
	}

	if ($pageId == "about") {
	$json = file_get_contents('data/pages/about.json');
	$pageData = json_decode($json, true);
	}

	if ($pageId == "goals") {
	$json = file_get_contents('data/pages/goals.json');
	$pageData = json_decode($json, true);
	}


	if ($pageId == "contact") {
	$json = file_get_contents('data/pages/contact.json');
	$pageData = json_decode($json, true);
	}

	if ($pageId == "resume") {
	$json = file_get_contents('data/pages/resume.json');
	$pageData = json_decode($json, true);
	}

//FIX: how to do this without pulling the data twice?
	// if ($pageID == "layout") {
	// $json = file_get_contents('data/projects-data.json');
	// $projectsData = json_decode($json, true);
	// foreach ($projectsData as $project) {
	// 	if ($project["id"] == $_GET["id"]) {
	// 		$projectData = $project;
	// 		}
	// 	}
	// }



// renderPageTemplate(); 

?>

<body>
	 
 <header class="site-header">
	<p>?<?=queryString();?></p>
	<?php include('templates/partials/site-menu.php');?>
		
</header>

<?php

	if ($pageId == "home") {
		include('templates/pages/home.php');
	}

	if ($pageId == "projects") { //projects list page
		include('templates/pages/projects.php');
	}

	if ($pageId == "project") { //project detail page
	include('templates/pages/project.php');
	}

	if ($pageId == "about") { 
	include('templates/pages/about.php');
	}

	if ($pageId == "goals") { 
	include('templates/pages/goals.php');
	}

	if ($pageId == "contact") { 
	include('templates/pages/contact.php');
	}

	if ($pageId == "resume") { 
	include('templates/pages/resume.php');
	}

	if ($pageId == "layout") { //layout (plant) page
	include('templates/pages/layout.php');
	}

?>


</body>

</html>