
<?php

//load e4p.json data
$json = file_get_contents('data/pages/exercises.json');
$exerciseData = json_decode($json, true);
// print_r($exerciseData);
?>


<exercises>
	<?php
	// loop thru each exercise in the data and display a card for it
	foreach ($exerciseData as $groups) {
		$groupName = $groups['group'];
		$exercises = $groups['exercises'];

	?>
	<exercise-group>
		<h2 class="attention-voice"><?=$groupName?></h2>
		
		<ul>			
		<?php
			foreach ($exercises as $exercise) { 
				$exerciseId = $exercise["id"];
				$exerciseSlug = $exercise["slug"];
				$exerciseHeader = $exercise["header"];
				?>
			
			<a href="?page=exercise&id=<?=$exerciseId?>" class="button">
				<p><?=$exerciseHeader?></p>
			</a>

		

	 <?php } ?> 
	 	</ul>
	 </exercise-group>

	<?php } ?>
</exercises>