<layered-text>

	<layer-1>

		<layer-2 class="l2header">
			<?php
			//Only include header element if there's header content
			if ($section["header"]) { ?>
				<h2 class="loud-voice"><?=$section["header"]?></h2>
			<?php } ?>
		</layer-2>

		<layer-2 class="l2text">
			<?php
			foreach($section['subsections'] as $subsection) { ?>

			<layer-3>
				<?php
				if ($subsection["header"]) { ?>
					<h3 class="attention-voice"><?=$subsection["header"]?></h3>
				<?php }

			// print_r($subsection['content']);
				foreach($subsection['content'] as $paragraph) {
					?>
					<p><?=$paragraph?></p>
				<?php } ?>
			</layer-3>


	
	<?php	} ?>

		</layer-2>
	</layer-1>

</layered-text>