<header style="font-size: 20px">

<?php 
	//function to create monster objects
	function monsterGenerator($name, $age, $favoriteFood) {
		$monster = [
			"name" => $name,
			"age" => $age,
			"favoriteFood" => $favoriteFood,
		];
		return $monster;
	}
	
	//database of monsters
	$crunchy = monsterGenerator("Crunchy", 6, "pork rinds");
	$crusty = monsterGenerator("Crusty", 6, "old bread");
	$dusty = monsterGenerator("Dusty", 6, "off-brand cola");
	$chunky = monsterGenerator("Chunky", 6, "corn on the cob");
	$chubby = monsterGenerator("Chubby", 6, "marshmallow");

	$monsters = [$crunchy, $crusty, $dusty, $chunky, $chubby];

?>

<?php foreach ($monsters as $m) { ?>
	<!-- template to set up monster cards -->
	 	<li class="monster">
			<monster-card>
				<h2 class="name"><?=$m["name"]?></h2>
				<p class = 'age'><?=$m["age"]?></p>
				<p class = 'favoriteFood'><?=$m["favoriteFood"]?></p>
				</card-text>

			</monster-card> 
		</li>
<?php	 } ?> ;

</header>