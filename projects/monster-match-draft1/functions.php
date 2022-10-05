<?php

//ROUTING

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
	$json = file_get_contents("data/pages/$pageId.json");
	
	if (!$json) {
		$json = file_get_contents("data/pages/404.json");
	}

  $pageData = json_decode($json, true);

  return $pageData;
}

//Render active page



//UTILITIES

function showErrors() {
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
}
showErrors();






?>