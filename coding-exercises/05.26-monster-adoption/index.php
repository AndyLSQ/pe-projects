<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monster Adoption</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<site-header>
		<div class="inner-column">
			<h1>Monster<strong>Match</strong></h1>
			<h2>Scary monsters in need of loving homes</h2>
		</inner-column>
	</site-header>


<main>
	<div class="inner-column">
		<?php




		$M001 = [
			"id" => "M001",
			"name" => "Codey",
			"favoriteFood" => "brains",
			"age" => 99,
			"adopted" => true,
			"portrait" => "images/codey.jpg",
		];

		$M002 = [
			"id" => "M002",
			"name" => "Limabean",
			"favoriteFood" => "electricity",
			"age" => 854,
			"adopted" => false,
			"portrait" => "images/limabean.jpg",
		];

		$M003 = [
			"id" => "M003",
			"name" => "Shadow",
			"favoriteFood" => "Buldak 2x spicy ramen",
			"age" => 3,
			"adopted" => false,
			"portrait" => "images/shadow.jpg",
		];

		$M004 = [
			"id" => "M004",
			"name" => "Fragoo",
			"favoriteFood" => "poison ivy",
			"age" => 750,
			"adopted" => false,
			"portrait" => "images/fragoo.jpg",
		];

		$M005 = [
			"id" => "M005",
			"name" => "Miss Reads-a-Lot",
			"favoriteFood" => "small children",
			"age" => 81,
			"adopted" => true,
			"portrait" => "images/miss-reads-a-lot.jpg",
		];


		$M006 = [
			"id" => "M006",
			"name" => "Orangina",
			"favoriteFood" => "razor blades",
			"age" => 402,
			"adopted" => false,
			"portrait" => "images/orangina.jpg",
		];

		$M007 = [
			"id" => "M007",
			"name" => "Mr. Banana",
			"favoriteFood" => "apples",
			"age" => 36,
			"adopted" => false,
			"portrait" => "images/mr-banana.jpg",
		];

		$monsters = [$M001, $M002, $M003, $M004, $M005, $M006, $M007];


		echo "<ol>";

		foreach ($monsters as $monster) {
			$id = $monster["id"];
			$name = $monster["name"];
			$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old.";
			$portrait = $monster["portrait"];
			$status = $monster["adopted"];

			if ($status == 1){
				$status = "Adopted!";
			} else{
				$status = "Needs a home!";
			}

			echo "<li class = 'monster'>";
			
			echo 
				"<monster-card id='" . $monster['id'] . "'>" . 
					"<picture class='portrait'>" .
						"<img src='" . $portrait . "' width='200'></img></picture>" . 
					"<card-text><h3 class='name'>" . $monster["name"] . "</h3>" .

					"<p class = 'story'>" . $story . "</p>" .

					"<p class = 'status'>" . $status . "</p>" .
					"</card-text>"	.
				"</monster-card>";  

			echo "</li>";
		}

		echo "</ol>";

		?>
	</div>
</main>
</body>
</html>

