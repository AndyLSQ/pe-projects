<header>

	<?php
		if ( isset($pageData["header"]) ) {
			include ( "templates/modules/headers/$pageData[header].php");
		}
	?>

</header>


<main>

	<?php
		if ( isset($pageData["sections"]) ) {
			echo "set";
			foreach ($pageData["sections"] as $section) {
				echo "section";
				include ("templates/modules/sections/$section[module].php");
			}
		}
	?>
	
</main>


<footer>

	<?php
		// if ( isset($pageData["footer"]) ) {
		// 		include ( "templates/modules/$footer.php");
		// }
	?>
	
</footer>