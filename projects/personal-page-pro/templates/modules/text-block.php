
<text-block class="<?=strtolower($section['header'])?>">
	
	<?php
	//Only include header element if there's header content
	if ($section["header"]) { ?>
		<h2 class="attention-voice"><?=$section["header"]?></h2>
	<?php } 

	foreach($section['content'] as $paragraph) { ?>
	<p><?=$paragraph?></p>
	<?php } ?>

</text-block>