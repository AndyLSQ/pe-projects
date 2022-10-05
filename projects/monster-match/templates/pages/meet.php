<?php 
	$json = file_get_contents("data/meet.json");
	$monsterData = json_decode($json, true);

?>


		<h2>Meet the Monsters</h2>

		
		<!-- DISPLAY CARDS -->
		<ul>
			<?php foreach ($monsterData as $monster) { ?>

				<!-- item card -->
				<li class="monster">
					<card class="monster">
						<h3><?=$monster['name']?></h3>
						<a href="?page=detail&id=<?=$monster['id']?>">
						Click here
					</a>
					</card>
				</li>

				<?php } ?>
			</ul>
	</section>