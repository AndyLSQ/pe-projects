<?php

function currentPage() {
  if (isset($_GET["page"])) {
    return $_GET["page"];
  } else {
    return "home";
  }
}

function pageData() {
  $page = currentPage();
  $filePath = "data/pages/" . $page . ".json";
  $json = file_get_contents($filePath);
  
  if (!$json) {
    $json = file_get_contents("data/pages/404.json");
  }

  $pageData = json_decode($json, true);

  return $pageData;
}

function renderPageTemplate() {
  $filePath = "pages/" . currentPage() . ".php";
  $pageData = pageData();

  if (file_get_contents($filePath) ) {
  include($filePath);
  } else {
    include('pages/404.php');
  }
}