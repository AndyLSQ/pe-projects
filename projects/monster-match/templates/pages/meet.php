<?php 
	$json = file_get_contents("data/meet.json");
	$monsterData = json_decode($json, true);

?>


<h2 class="loud-voice2">Meet the Monsters</h2>


<!-- DISPLAY CARDS -->
<ul class=monsters>
	<?php foreach ($monsterData as $monster) { ?>

		<!-- item card -->
		<li class="monster">
			<picture>
				<img src="<?=$monster['image']?>" alt="">
			</picture>
			<h3 class="loud-voice3"><?=$monster['name']?></h3>
			<ul class="info">
				<li>Age: <?=$monster['age']?></li>
				<li>Gender: <?=$monster['gender']?></li>
				<li>Favorite Food: <?=$monster['food']?></li>
			</ul>
			<a class="button1" href="?page=detail&id=<?=$monster['id']?>">
			Learn more</a>
		</li>

	<?php } ?>
</ul>