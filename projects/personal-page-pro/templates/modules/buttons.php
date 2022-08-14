<section class="buttons">
	
	<?php
	foreach ($section['content'] as $button) { ?>
		<a href="<?=$button['href']?>" class="button"><?=$button['label']?></a>
	<?php } ?>
	
</section>