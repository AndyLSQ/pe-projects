<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monster Adoption</title>
	<link rel="stylesheet" href="style.css">


</head>

<body>

	<?php include "database.php"?>


	<site-header>
		<div class="inner-column">
			<h1>Monster<strong>Match</strong></h1>
			<h2>Scary monsters in need of loving homes</h2>
		</inner-column>
	</site-header>


<main>
	<div class="inner-column">
		<?php

		echo "<ol>";

		foreach ($monsters as $monster) {
			echo "<li>";
			include "card.php";
			echo "</li>";
		}

		echo "</ol>";

		?>
	</div>
</main>
</body>
</html>

