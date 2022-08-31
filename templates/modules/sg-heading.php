
<sg-heading class="<?=strtolower($section['header'])?>">
	
	<?php
	//Only include header element if there's header content
	if ($section["header"]) { ?>
		<h2 class="calm-voice"><?=$section["header"]?></h2>
	<?php } ?>

	<hr>

</sg-heading>