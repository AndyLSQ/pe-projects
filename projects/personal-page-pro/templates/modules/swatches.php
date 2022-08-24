
<color-swatches>

	<?php
		$n = 0;

		foreach($section['content'] as $color) { 
			$n = $n+1 ?>

		<color-swatch class="c<?=$n?>">
			<p><?=$color?></p>
		</color-swatch>

	<?php } ?>
	
		

</color-swatches>