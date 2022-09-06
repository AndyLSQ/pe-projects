<section class="<?=$section['module']?>">
	<inner-column class="<?=$section['variant']?>">
		<h2 class="loud-voice">
			<?=$section['heading']?>
		</h2>
		<p><?=$section['paragraph']?></p>
		<nav>
			<?php foreach ($section['buttons'] as $button) {
				include("templates/modules/components/button.php");
			} ?>
		
		</nav>

	</inner-column>
</section>