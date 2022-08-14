<layered-text>

	<text-block>
		
		<?php
		//Only include header element if there's header content
		if ($section["header"]) { ?>
			<h2 class="loud-voice"><?=$section["header"]?></h2>
		<?php } 

		foreach($section['subsections'] as $subsection) { ?>
		<subsection>
			<?php
			if ($subsection["header"]) { ?>
				<h2 class="attention-voice"><?=$subsection["header"]?></h2>
			<?php }

		// print_r($subsection['content']);
			foreach($subsection['content'] as $paragraph) {
				?>
				<p><?=$paragraph?></p>
			<?php } ?>

		</subsection>
	
	<?php	}

?>

	</text-block>

</layered-text>