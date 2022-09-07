<section class="<?=$section['module']?>">
	<inner-column class="<?=$section['variant']?>">

		<?php
			foreach ($section['components'] as $component) {
				include("templates/modules/components/$component[type].php");
			}
		?>

	</inner-column>
</section>