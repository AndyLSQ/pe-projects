
<text-block>
	
	<?php
	//Only include header element if there's header content
	if ($section["header"]) { ?>
		<h3><?=$section["header"]?></h3>
	<?php } 

	foreach($section['content'] as $paragraph) { ?>
	<p><?=$paragraph?></p>
	<?php } ?>

</text-block>