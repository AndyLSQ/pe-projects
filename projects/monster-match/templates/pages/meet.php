<?php 
	$json = file_get_contents("data/meet.json");
	$monsterData = json_decode($json, true);

?>


<h2 class="loud-voice1">Meet the Monsters</h2>

<!-- <div class="swatch neutral-lighter">neutral-lighter</div>
<div class="swatch neutral-light">neutral-light</div>
<div class="swatch neutral">neutral</div>
<div class="swatch neutral-dark">neutral-dark</div>
<div class="swatch neutral-darker">neutral-darker</div> -->




<!-- DISPLAY CARDS -->
<ul class="monsters" data-outlet="monster-list">
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

<script>
	let monster_outlet = document.querySelector('[data-outlet="monster-list"]')
	monster_outlet.innerHTML = "TEST123 STRING"
</script>