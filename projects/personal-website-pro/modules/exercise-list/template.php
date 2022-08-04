<?php
	$exercises = getData('exercises');
?>

<exercise-list>
	
	<ol>

		<?php foreach ($exercises as $exercise) { ?>
		<li>
			
			<exercise-card>
				<h2 class='attention-voice'><?=$exercise['title']?></h2>

				<p><?=$exercise['description']?></p>

				<a href='?page=exercise&id=<?=$exercise["id"]?>'>Link</a>
			</exercise-card>

		</li>
	<?php } ?>
	</ol>

</exercise-list>

