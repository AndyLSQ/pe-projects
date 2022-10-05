<?php

//Get active page from querystring
function currentPage() {
  if (isset($_GET["page"])) {
    return $_GET["page"];
  } else {
    return "home";
  }
}

//Get json data for the active page
function pageData() {
	$pageId = currentPage();
	$json = file_get_contents("data/$pageId.json");
	
	if (!$json) {
		$json = file_get_contents("data/404.json");
	}

  $pageData = json_decode($json, true);

  return $pageData;
}

?>