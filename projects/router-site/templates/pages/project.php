

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
			//create a list of cards?>
			
			<ul>


			<?php
			//loop through cards
			foreach ($section['cards'] as $card) {

				//set thumbnail, name, and slug variables based on the json data
				$thumbnail = $card['thumbnail'];
				$name = $card['name'];
				$slug = $card['slug'];

				//TEST: display the thumbnail and name
				// print_r("TEST: " . $thumbnail . "<br>" . $name . "<br> " . $slug . "<br>");

				//compile a card with this info on it
				?>

				<li>
					<a href="?page=layout&id=<?=$slug?>">
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