<text-block>
	<?php if ($component['heading']) {?>
		<h2 class="loud-voice">
			<?=$component['heading']?>
		</h2>
	<?php } ?>


	<?php if ($component['paragraphs']) {
		foreach ($component['paragraphs'] as $paragraph) { ?>
			<p><?=$paragraph?></p>
	<?php }

	} ?>
</text-block>