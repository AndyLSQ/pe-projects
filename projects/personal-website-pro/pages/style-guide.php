
<?php
	$slug = 'style-guide';
	$page = getPageData("data/pages/$slug.json");
	$heading = $page["heading"];
	include('modules/big-heading/template.php');

	renderPageContent($page);
?>
