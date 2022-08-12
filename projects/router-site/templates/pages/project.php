<?php	
	$json = file_get_contents('data/projects-data.json');
	$projectsData = json_decode($json, true);
	foreach ($projectsData as $project) {
		if ($project["id"] == $_GET["id"]) {
			$projectData = $project;
		}
	}


	

	?>

<header class='page-header'>

	<h1 class="loud-voice"><?=$projectData['name']?></h1>

</header>

<main>
	
	<?php foreach ($projectData['sections'] as $section ) {
		
		if ($section['module'] == "generic_text") {
			?>

			<h2><?=$section['heading']?></h2>
			<p><?=$section['content']?></p>
		<?php } ?> 

		<?php 
		if ($section['module'] == "links_gallery") { 
			$layoutJson = file_get_contents('data/layouts.json');
			$layoutsData = json_decode($layoutJson, true);
			//create a list of cards?>
			
			<ul>


			<?php
			//loop through cards
			foreach ($layoutsData as $layout) {

				//set thumbnail, name, and slug variables based on the json data
				$thumbnail = $layout['thumbnail'];
				$name = $layout['name'];
				$slug = $layout['slug'];


				//compile a card with this info on it
				?>

				<li>
					<a href="?page=layout&slug=<?=$slug?>"> <!-- this links to the detail page -->
						<picture>
							<img src="<?=$thumbnail?>" alt="">
						</picture>
						<h2><?=$name?></h2>
					</a>
				
				</li>


				<?php
				//display a link that links to the detail page specified by the slug

			} ?>
			</ul>
		<?php }
	}?>

</main>