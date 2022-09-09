<component class="diptych">
	<picture class=<?=$component['class']?>>
		
		<img src="<?=$component['src']?>" alt="<?=$component['alt']?>">

	</picture>

	<div class="diptych-text">
		
		<?php if ($component['heading']) {?>
			<h2 class="module-heading">
				<?=$component['heading']?>
			</h2>
		<?php } ?>

		<?php if ($component['subheading']) {?>
			<h3 class="subheading">
				<?=$component['subheading']?>
			</h3>
		<?php } ?>

		<?php if ($component['body']) {?>
			<p>
				<?=$component['body']?>
			</p>
		<?php } ?>

	</div>

</component>