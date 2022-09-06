<header>

	<?php
		if ( isset($pageData["header"]) ) {
				include ( "templates/modules/$header.php");
		}
	?>

</header>


<main>

	<?php
		if ( isset($pageData["sections"]) ) {
			foreach ($pageData["sections"] as $section) {
				include ( "templates/modules/$section[module].php");
			}
		}
	?>
	
</main>


<footer>

	<?php
		if ( isset($pageData["footer"]) ) {
				include ( "templates/modules/$footer.php");
		}
	?>
	
</footer>