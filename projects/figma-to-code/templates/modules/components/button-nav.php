<nav>

<?php foreach ($component['button-list'] as $button) { ?>
	<a href="<?=$button['href']?>" class="button <?=$button['variant']?>"><?=$button['text-content']?></a>

<?php } ?>
	

</nav>