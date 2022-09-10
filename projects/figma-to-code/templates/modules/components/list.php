<<?=$component['ordered']?>>

	<?php if ($component['list-heading']) {?>
		<?=$component['list-heading']?>
	<?php } ?>

	<?php
		foreach ($component['list-items'] as $li) { ?>
			<li>
				<?php if ($li['image']) {?>
					<picture class="list-image icon">
						<img src="<?=$li['image']?>">
					</picture>
				<?php } ?>

				<div class="list-text">
					<?php if ($li['heading']) {?>
						<h3 class="list-heading">
							<?=$li['heading']?>
						</h3>
					<?php } ?>


					<?php if ($li['paragraphs']) {
						foreach ($li['paragraphs'] as $paragraph) { ?>
							<p class="list-paragraph"><?=$paragraph?></p>
						<?php }
					}?>
				</li>
</div>
			
	<?php	} ?>


</<?=$component['ordered']?>>