<?php 

//get data for ALL buttons
$json = file_get_contents('data/pages/contact.json');
$contactData = json_decode($json, true);


foreach ($contactData['sections'] as $section) {

	if ($section['type'] == "image-buttons") { ?>

		<image-buttons>
			<?php
		foreach ($section['content'] as $buttonData) { 
			$href=$buttonData['url'];

			$label = $buttonData['text'];

			?>


			<a href="<?=$href?>" target="<?=$label?>">
				<?php
					$imagePath = $buttonData['image']; 
					include($imagePath);
					// $label = $buttonData['text'];
				?>
			
			</a>
		</image-button>



			
		
		<?php } ?>
		</image-buttons>
	<?php }
}

?>