
<?php

//get data for ALL layouts
$json = file_get_contents('data/layouts-data.json');
$layoutData = json_decode($json, true);
// print_r($layoutData);

//determine selected layout from qs
if (isset($_GET["id"])) {
	$layoutId = $_GET["id"];
}

//store data for the specific layout
foreach ($layoutData as $groups) {
	$layouts = $groups['layouts'];

	foreach ($layouts as $layout) { 
		if($layout['id']==$layoutId) {
			$pageData = $layout; //named this pageData so the page header still works
			$layoutId = $layout["id"]; //ID serves as slug here (used below)
			$layoutHeader = $layout["header"];

			// print_r($pageData);
		}
	}
}

// display current layout
?>

 <header>

	<?php
		include('templates/modules/site-header.php');
		include('templates/modules/page-header.php');
	?>
		
</header>

<layout>

	<?php
		include("layouts/$layoutId.php");
	?>

</layout>