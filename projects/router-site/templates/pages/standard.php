<?php include('templates/modules/page-header.php');?>


<?php
	
	foreach ($pageData["sections"] as $section) {
		// print_r($section);
		if ( $section["module"] == "generic_text"){
			include ('templates/partials/page-section.php');
		}

		if ( $section["module"] == "things_grid"){
			include ('../partials/things-grid.php');
		}


	}

?>