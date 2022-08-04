
<?php
	$project = getProjectBySlug( $_GET['slug'] );
	// show($project);
	$heading = $project["title"];

	include('modules/big-heading/template.php');

	renderPageContent($project);

	foreach( $project["next"] as $next) {
		$project = getProjectById($next);

		// echo $project["title"];
	}
?>
