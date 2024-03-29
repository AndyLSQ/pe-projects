<component class="diptych">
	<picture class=<?=$component['class']?>>
		
		<img src="<?=$component['src']?>" alt="<?=$component['alt']?>">

	</picture>

	<div class="picture-text">
		
		<?php if ($component['heading']) {?>
			<h2 class="loud-voice">
				<?=$component['heading']?>
			</h2>
		<?php } ?>

		<?php if ($component['body']) {?>
			<p>
				<?=$component['body']?>
			</p>
		<?php } ?>

		<?php if ($component['quote']) {?>
			<figure>
				<blockquote>“
					<?=$component['quote']?>
					”;
				</blockquote>

			<?php if ($component['quote-author']) {?>
				<figcaption>

					<?=$component['quote-author']?>

					

						<?php if ($component['quote-author-title']) {?>
							<div class="quote-author-title">
								<?=$component['quote-author-title']?>
							</div>
						<?php } ?>

				</figcaption>
			<?php } ?>

			</figure>
		<?php } ?>

	

	</div>

</component>