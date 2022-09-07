<<?=$component['ordered']?>>

	<?php if ($component['list-heading']) {?>
		<?=$component['list-heading']?>
	<?php } ?>

	<?php
		foreach ($component['list-items'] as $li) { ?>
			<li>
				<?php if ($li['rating-img']) {?>
					<picture class="list-image">
						<img src="<?=$li['rating-img']?>">
					</picture>
				<?php } ?>


		<?php if ($li['quote']) {?>
			<figure>
				<blockquote>“
					<?=$li['quote']?>
					”;
				</blockquote>

			<?php if ($li['quote-author']) {?>
				<figcaption>
					<?=$li['quote-author']?>

					
				<?php if ($li['quote-author-title']) {?>
					<div class="quote-author-title">
						<?=$li['quote-author-title']?>
					</div>
				<?php } ?>
					

				
				<?php if ($li['quote-author-image']) {?>
					<div class="quote-author-image">
						<img src="<?=$li['quote-author-image']?>" alt="Quote author image">
					</div>
				<?php } ?>
				

				</figcaption>
			<?php } ?>

			</figure>
		<?php } ?>				



			</li>	
			
	<?php	} ?>


</<?=$component['ordered']?>>