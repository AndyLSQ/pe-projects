<?php include('page-header.php');?>


<?php
	
	foreach ($pageData["sections"] as $section) {

		if ( $section["module"] == "generic_text"){
			include ('partials/page-section.php');
		}

		if ( $section["module"] == "things_grid"){
			include ('partials/things-grid.php');
		}


	}

?>