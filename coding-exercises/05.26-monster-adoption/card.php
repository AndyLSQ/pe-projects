<?php
//set up data for each monster
	$id = $monster["id"];
	$name = $monster["name"];
	$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old.";
	$portrait = $monster["portrait"];
	$status = $monster["adopted"];

// conditionals (button text)
	$buttonText = "Needs a home!";
	$statusClass = "";



	if ($status == 1){
		$buttonText = "Adopted!";
		$statusClass = "adopted";
	} 

?>


<!-- front end data use -->
<monster-card id="<?=$id?>" class="<?=$statusClass?>">
	<picture class="">
		<img src="<?=$portrait?>" width="200px">
	</picture>
	<card-text>
		<h3 class="name"><?=$name?></h3>
		<p class="story"><?=$story?></p>
		<p class="status"><?=$buttonText?></p>
	</card-text>
</monster-card>