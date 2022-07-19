<?php

	$json = file_get_contents("data/pages/404.json");
	$database = json_decode($json, true);
	$sections = $database['sections'];

?>

<h1><?=$database['title']?></h1>
	<p><?=$database['intro']?></p>
	
	<?php
		foreach ($sections as $section) {
			echo ("<h2>" . $section['heading'] . "</h2>");
			echo ("<p>" . $section['content'] . "</p>");
		}

	?>