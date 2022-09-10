

<component class="<?=$component['type']?>">

	<?php foreach ($component['detail-items'] as $detailItem) { ?>
		<details class="<?=$section['variant']?>">
			<summary><?=$detailItem['summary']?></summary>
			<p><?=$detailItem['content']?></p>
			
		</details>
	<?php } ?>
		

</component>