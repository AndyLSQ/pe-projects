<?php include('templates/modules/page-header.php');

	$pageId="home";
	if ( isset($_GET["page"]) ) {
		$pageId = $_GET["page"];
	}
?>


<inner-column class="<?=$pageId?>.about">
	<?php
		
		foreach ($pageData["sections"] as $section) {
			// print_r($section);
			if ( $section["module"] == "generic_text"){
				include ('templates/partials/page-section.php');
			}

			if ( $section["module"] == "things_grid"){
				include ('../partials/things-grid.php');
			}

			// if ( $section["module"] == "portrait"){
			// 	include ('../partials/portrait.php');
			// }

		}

	?>

</inner-column>