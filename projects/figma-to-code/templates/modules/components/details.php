

<component class="<?=$component['type']?>">

	<?php foreach ($component['detail-items'] as $detailItem) { ?>
		<details class="<?=$section['variant']?>">
			<summary><?=$detailItem['summary']?></summary>
			<?=$detailItem['content']?>
			
		</details>
	<?php } ?>
		

</component>