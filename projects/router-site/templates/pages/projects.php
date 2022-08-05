
<?php include('templates/modules/page-header.php');?>


<ul class='project-list'>
	<?php foreach ($projectsData as $project) { ?>
		<li class='project'>
			<a href='?page=project&id=<?=$project["id"]?>'>
				<picture>
					<img src="<?=$project["thumbnail"];?>" alt="">
				</picture>
				<h2><?=$project["name"];?></h2>
				<p><?=$project["teaser"];?></p>
			</a>
		</li>
	<?php } ?>
</ul>

<a href=""></a>