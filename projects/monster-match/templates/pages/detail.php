
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
		<p>Description: <?=$current_monster['description']?></p>
	</section>
