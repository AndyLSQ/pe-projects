
<?php 
	$json = file_get_contents("data/meet.json");
	$monsterData = json_decode($json, true);


	//figure out which item will show detail
	$id = null;
	$current_monster = null;

	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];
	}
	else {
		echo "Please select a monster.";
	}

	//look at each item
	foreach ($monsterData as $monster) {
		//if item matches the one we want, pull in the data
		if ($monster['id'] == $id) {
			$current_monster = $monster;
		}
	}
	?>

	<!-- DETAIL -->
	<!-- return data to the template and display -->
	<section class="detail">
		<h2>Monster detail</h2>
		<h3><?=$current_monster['name']?></h3>
		<picture>
			<img src="<?=$current_monster['image']?>" alt="">
		</picture>
		<p>Age: <?=$current_monster['age']?></p>
		<p>Gender: <?=$current_monster['gender']?></p>
		<p>Color: <?=$current_monster['color']?></p>
		<p>Favorite Food: <?=$current_monster['food']?></p>
		<p>Characteristics:
			<?php
				foreach ($current_monster['characteristics'] as $characteristics) { ?>
					<p><?=$characteristics?></p>
			<?php } ?>

		</p>
		<p>Housebroken: <?=$current_monster['housebroken']?></p>
		<p>Vaccinated: <?=$current_monster['vaccinated']?></p>
		<p>Description: 
			<?php
				foreach ($current_monster['description'] as $description) { ?>
					<p><?=$description?></p>
			<?php } ?>

	</section>
