<?php
	$exercise = getResourceByKey('exercises', 'id', $_GET['id'] );
	// show($exercise);

	// include('modules/big-heading/template.php');

	// renderPageContent($exercise);

	// foreach( $project["next"] as $next) {
	// 	$project = getProjectById($next);
	// 	// echo $project["title"];
	// }
?>


<section>
	<inner-column>
		
<h2 class='attention-voice'><?=$exercise['title']?></h2>

<p><?=$exercise['description']?></p>

	</inner-column>
</section>


<section>
	<inner-column>
		
		<?php renderExercise($exercise['id']); ?>
		
	</inner-column>
</section>
