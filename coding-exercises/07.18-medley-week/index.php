<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medley Week</title>
	<link rel="stylesheet" href="style/style.css">
</head>

<body>

	<header>
		
	</header>


	<main>
	
	<h1 class="divider"> ---(Feature-Cards Layout)---</h1>
	<hr>
	<section>
		<inner-column>
			<?php include("templates/pages/vrbo-features.php"); ?>	
		</inner-column>
	</section>


	<h1 class="divider"> ---(Layout 1)---</h1>
	<hr>
	<section class="breaking-news">
		<inner-column>
			<?php include("templates/pages/layout1.php"); ?>	
		</inner-column>
	</section>

	<section>
		<inner-column>
			<?php include("templates/pages/layout1.php"); ?>	
		</inner-column>
	</section>

	<h1 class="divider"> ---(Layout 2)---</h1>
	<hr>
	<?php include("templates/pages/layout2.php"); ?>


	<h1 class="divider"> ---(Layout 3)---</h1>
	<hr>
	<?php include("templates/pages/layout3.php"); ?>

	<h1 class="divider"> ---(Layout 4)---</h1>
	<hr>
	<?php include("templates/pages/layout4.php"); ?>

	</main>


</body>


</html>