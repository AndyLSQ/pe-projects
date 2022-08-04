<?php
	$title = $project["title"];
	$teaser = $project["teaser"];
	$slug = $project["slug"];
?>

<project-card>

	<h2 class='attention-voice'><?=$title?></h2>

	<p class='calm-voice'><?=$teaser?></p>

	<nav>
		<a class='button' href='?page=project&slug=<?=$slug?>'>
			<span>Read more</span>
		</a>
	</nav>

</project-card>
