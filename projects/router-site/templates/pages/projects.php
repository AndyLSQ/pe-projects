<!-- TODO: Change header to use JSON & page-header.php-->
<!-- <header class='page-header'>

	<h1 class="loud-voice">Here's what I’ve been up to...</h1>

</header> -->

<?php include('templates/modules/page-header.php');?>


<ul class='project-list'>
	<?php foreach ($projectsData as $project) { ?>
		<li class='project'>
			<a href='?page=project&id=<?=$project["id"]?>'><?=$project["name"];?>		
			</a>
		</li>
	<?php } ?>
</ul>

<a href=""></a>