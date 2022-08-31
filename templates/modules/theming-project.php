
<?php

//load layouts data
$json = file_get_contents('data/pages/theming-project.json');
$caseData = json_decode($json, true);
// print_r($layoutData);

?>


<?php
if (isset($caseData["sections"])) {
	foreach ($caseData["sections"] as $section) {
		include ( "templates/modules/$section[type].php" );
	}
}
?>
