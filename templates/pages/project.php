
<?php

//get data for ALL projects
$json = file_get_contents('data/projects-data.json');
$projectsData = json_decode($json, true);
// print_r($projectsData);


//determine selected project from qs
if (isset($_GET["id"])) {
	$projectId = $_GET["id"];
}

//store data for the specific project
foreach ($projectsData as $project) {
	if($project['id']==$projectId) {
		$pageData = $project; //named this pageData so the page header still works
	}
}

// loop through project sections and display modules

?>

	 <header>

		<?php
			include('templates/modules/site-header.php');
			include('templates/modules/page-header.php');
		?>
			
	</header>

	<main>
		<inner-column>
			<?php



			if (isset($pageData["sections"])) {
				foreach ($pageData["sections"] as $section) {
					include ( "templates/modules/$section[type].php" );
				}
			}
			?>
		</inner-column>

	</main>