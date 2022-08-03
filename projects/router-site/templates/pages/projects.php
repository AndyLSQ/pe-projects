

<h1>Projects here</h1>

<ul class='project-list'>
	<?php foreach ($projectsData as $project) { ?>
		<li class='project'>
			<a href='?page=project&id=<?=$project["id"]?>'><?=$project["name"];?>		
			</a>
		</li>
	<?php } ?>
</ul>

<a href=""></a>