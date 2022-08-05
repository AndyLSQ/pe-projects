<p>This is an individual layout plant in the layout garden.</p>


<?php
	if ( isset($_GET["id"]) ) {
		$layoutId = $_GET["id"];
	}

	echo "querystring TEST: " . $layoutId;

	foreach ($projectData['sections'] as $section ) {
		foreach ($section['cards'] as $layout){
			echo $layout['content'];


		}
	}
	
?>


