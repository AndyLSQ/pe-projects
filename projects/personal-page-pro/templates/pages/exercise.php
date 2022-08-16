
<?php

//get data for ALL exercises
$json = file_get_contents('data/pages/exercises.json');
$exerciseData = json_decode($json, true);
// print_r($exerciseData);

//determine selected exercise from qs
if (isset($_GET["id"])) {
	$exerciseId = $_GET["id"];
}

//store data for the specific exercise
foreach ($exerciseData as $groups) {
	$exercises = $groups['exercises'];

	foreach ($exercises as $exercise) { 
		if($exercise['id']==$exerciseId) {
			$pageData = $exercise; //named this pageData so the page header still works
			$exerciseId = $exercise["id"];
			$exerciseSlug = $exercise["slug"];
			$exerciseHeader = $exercise["header"];

			// print_r($pageData);
		}
	}
}

// display current exercise
?>

 <header>

	<?php
		include('templates/modules/site-header.php');
		include('templates/modules/page-header.php');
	?>
		
</header>

<exercise>

	<?php
		include("exercises/$exerciseSlug.php");
	?>

</exercise>