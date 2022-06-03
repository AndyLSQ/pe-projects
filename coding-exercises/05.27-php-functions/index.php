<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monster Adoption</title>
	<!-- <link rel="stylesheet" href="style.css"> -->
</head>

<?php include ("styles.php");?>
<?php include ("monster-factory.php");?>


<body>
	<site-header>
		<div class="inner-column">
			<h1>Monster<strong>Match</strong></h1>
			<h2>Scary monsters in need of loving homes</h2>
		</inner-column>
	</site-header>

<main>
	<div class="inner-column">
		
		<ol class='monster-list'>

			<?php	foreach ($monsters as $monster) {
				$id = $monster["id"];
				$name = $monster["name"];
				$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old.";
				$portrait = $monster["portrait"];
				$status = $monster["adopted"];

				// set human readable status message
				if ($status == 1){
					$status = "Adopted!";
				} else{
					$status = "Needs a home!";
				}
				}
			?>

			<li class="monster">
				<monster-card id='<?=$id?>'> 
					<picture class='portrait'>
						<img src='<?=$portrait?>' width='200'></img>
					</picture>

					<card-text>
						<h3 class='name'><?=$name?></h3>
						<p class = 'story'> <?=$story?> </p>
						<p class = 'status'> <?=$status?> </p>
					</card-text>

				</monster-card> 

			</li>
			


		</ol>
	
	</div>
</main>
</body>
</html>

