<div class="portrait">
	
	<picture>
		<img src="<?=$section["url"]?>" alt="<?=$section["alt"]?>">
	</picture>
	
	<?php
		if ($section["caption"]) { ?>
			<figcaption><?=$section["caption"]?></figcaption>
	<?php } ?>
	


</div>