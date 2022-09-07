<<?=$component['ordered']?>>

<?php
	foreach ($component['list-items'] as $li) { ?>
		<li>
			<?php if ($li['image']) {?>
				<picture class="list-image">
					<img src="<?=$component['src']?>" alt="<?=$component['alt']?>">
				</picture>
			<?php } ?>

			<?php if ($li['heading']) {?>
				<h3 class="attention-voice">
					<?=$li['heading']?>
				</h3>
			<?php } ?>


			<?php if ($li['paragraphs']) {
				foreach ($li['paragraphs'] as $paragraph) { ?>
					<p><?=$paragraph?></p>
				<?php }
			}?>
		</li>	
		
<?php	} ?>


</<?=$component['ordered']?>>