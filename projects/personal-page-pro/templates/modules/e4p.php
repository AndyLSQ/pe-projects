
<?php

//load e4p.json data
$json = file_get_contents('data/pages/exercises.json');
$exerciseData = json_decode($json, true);
// print_r($exerciseData);
?>


<exercise-card>
	<?php
	// loop thru each exercise in the data and display a card for it
	foreach ($exerciseData as $groups) {
		$groupName = $groups['group'];
		$exercises = $groups['exercises'];

	?>
		<h2 class="attention-voice"><?=$groupName?></h2>
					
		<?php
			foreach ($exercises as $exercise) { 
				$exerciseId = $exercise["id"];
				$exerciseSlug = $exercise["slug"];
				$exerciseHeader = $exercise["header"];
				?>
			
			<a href="?page=exercise&id=<?=$exerciseId?>">
				<p><?=$exerciseHeader?></p>
			</a>

		</ul>

	 <?php } } 

	 ?>
</exercise-card>