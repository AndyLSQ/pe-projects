<section class="buttons">
	
	<?php

	if ($section["header"]) { ?>
		<h2 class="attention-voice"><?=$section["header"]?></h2>
	<?php } ?>

	<nav>
		<?php	
		foreach ($section['content'] as $button) { ?>
			<a href="<?=$button['href']?>" class="button"><?=$button['label']?></a>
		<?php } ?>
	</nav>
	
</section>