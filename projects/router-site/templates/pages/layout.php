<p>This is an individual layout plant in the layout garden.</p>





<?php

$focusedLayout = null;

if ( isset($_GET["slug"]) ) {
	
	$layoutSlug = $_GET["slug"];

	//get data for layout project (all layouts)
	$json = file_get_contents('data/layouts.json');
	$layoutsData = json_decode($json, true);

	//find the correct layout in the data
	foreach ($layoutsData as $layout) {
		if ($layout["slug"] == $layoutSlug) {
			$focusedLayout = $layout;
		}
	}
}





echo "!!!!!" . $focusedLayout['name'];


	//render the layout module (use include $slug)


include("templates/layouts/$focusedLayout[slug].php");
	
?>


