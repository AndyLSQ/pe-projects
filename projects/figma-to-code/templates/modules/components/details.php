

<component class="<?=$component['type']?>">

	<?php foreach ($component['detail-items'] as $detailItem) { ?>
		<details class="<?=$section['variant']?>">
			<summary><span><?=$detailItem['summary']?></span></summary>
			<p><?=$detailItem['content']?></p>
			
		</details>
	<?php } ?>
		

</component>