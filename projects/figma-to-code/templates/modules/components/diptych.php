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

	</div>

</component>