<?php
	$goals = getPageData('data/goals.json');
?>


<article>

	<goals-list>
		
		<ul>
			<?php foreach($goals as $goal) {
				$title = $goal["title"];
				$intro = $goal["intro"];
				$pieces = $goal["pieces"];
			?>

			<li>
				<h2 class='attention-voice'><?=$title?></h2>

				<p><?=$intro?></p>

				<ul>
					<?php foreach($pieces as $piece) {
						$heading = $piece["heading"];
						$info = $piece["info"];
						?>
						<li>
							<h3 class='stern-voice'><?=$heading?></h3>
							<p><?=$info?></p>
						</li>
					<?php } ?>
				</ul>
			</li>
			<?php } ?>
		</ul>

	</goals-list>

</article>
