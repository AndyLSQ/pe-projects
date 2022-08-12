<?php include('templates/modules/page-header.php');

	$pageId="home";
	if ( isset($_GET["page"]) ) {
		$pageId = $_GET["page"];
	}
?>

<section class="<?=$pageId?>">
	<inner-column>
		<?php
			
			foreach ($pageData["sections"] as $section) {
				// print_r($section);
				if ( $section["module"] == "text-block"){
					include ('templates/partials/text-block.php');
				}



			}

		?>

	</inner-column>
</section>