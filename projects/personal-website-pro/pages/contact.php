<?php
	$slug = 'contact';
	$page = getPageData("data/pages/$slug.json");
	$heading = $page["heading"];
	include('modules/big-heading/template.php');

	renderPageContent($page);
?>
