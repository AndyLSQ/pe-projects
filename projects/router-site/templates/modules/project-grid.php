<?php
		//Projects data
		$json = file_get_contents('data/projects-data.json');
		$projectsData = json_decode($json, true);

?>


<project-grid>

<ul class='project-list'>
	<?php foreach ($projectsData as $project) { ?>
		<li class='project'>
			<a class="link" href='?page=project&id=<?=$project["id"]?>'>
				<div class="card">
					<picture>
						<img src="<?=$project["thumbnail"];?>" alt="">
					</picture>
					<div class="project-text">
						<h2 class="attention-voice project-title"><?=$project["name"];?></h2>
						<p><?=$project["teaser"];?></p>
					</div>
				</div>
			</a>
		</li>
	<?php } ?>
</ul>

</project-grid>