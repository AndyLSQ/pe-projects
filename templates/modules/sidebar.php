<sidebar>


		
		<?php
		//Only include header element if there's header content
		if ($section["header"]) { ?>
			<h2 class="loud-voice"><?=$section["header"]?></h2>
		<?php } 

		foreach($section['subsections'] as $subsection) { ?>
		<subsection class="child <?=strtolower($subsection['header'])?>">
			<?php
			if ($subsection["header"]) { ?>
				<h2 class="mid-voice"><?=$subsection["header"]?></h2>
			<?php }

		// print_r($subsection['content']);
			foreach($subsection['content'] as $paragraph) {
				?>
				<p><?=$paragraph?></p>
			<?php } ?>

		</subsection>
	
	<?php	}

?>



</sidebar>