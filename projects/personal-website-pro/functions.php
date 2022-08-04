<?php

function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
enableErrorReporting();

function show($things) {
	echo "<code class='show-code'>";
	echo '<pre>';
	print_r($things);
	echo '</pre>';
	echo '</code>';
}

//2. Pull route (name of current page) from the url bar
function getCurrentRoute() {
	if ( isset($_GET['page'])) {
		return $_GET['page'];
	}
	return 'home';
}

function buildPageCSSClass() {
	$base = getCurrentRoute();
	if ( isset($_GET['slug']) ) {
		$base .= " " . $_GET['slug'];
	}
	return $base;
}

function isStyleGuide() {
	if ( isset($_GET['page'])) {
		if ($_GET['page'] == 'style-guide'){
			return true;
		} else {
			return false;
		}
	}
}

//1. Get the current route from the URL (separate function) and `include` that page
function getPageTemplate() {
	$requestedRoute = getCurrentRoute();
	$templatePath = "pages/$requestedRoute.php";
	if ( file_exists($templatePath) ) {
		include($templatePath);
	} else {
		include('pages/404.php');
		// or send some error that ends up with this
		// check what is ideal // header error 
	}
}

function getPageData($path) { // can this be just 'any' data?
	if ( file_exists($path) ) {
		$json = file_get_contents($path);
		return json_decode($json, 1);
	} else {
		$heading = "<h1 class='loud-voice'>The $path file cannot be found at this time.</h1>";
		include('modules/big-heading/template.php');
	}
}

function getData($jsonFileName) {
	$filePath = "data/$jsonFileName.json";
	$data = ["status" => "bad"];
	if ( file_exists($filePath) ) {
		$json = file_get_contents($filePath);
		$data = json_decode($json, 1);
	}
	return $data;
}

function getProjectBySlug($slug) {
	$path = 'data/projects.json';
	$projects = "";
	if ( file_exists($path) ) {
		$json = file_get_contents($path);
		$projects = json_decode($json, 1);
	}
	foreach ($projects as $project) {
		if ( $project["slug"] == $slug ) {
			return $project;
		}
	}
}

function getProjectById($id) {
	$path = 'data/projects.json';
	$projects = "";
	if ( file_exists($path) ) {
		$json = file_get_contents($path);
		$projects = json_decode($json, 1);
	}
	foreach ($projects as $project) {
		if ( $project["id"] == $id ) {
			return $project;
		}
	}
}

function getResourceByKey($resource, $key, $valueToMatch) {
	$path = "data/$resource.json";
	$resources = [];
	if ( file_exists($path) ) {
		$json = file_get_contents($path);
		$resources = json_decode($json, 1);
	}
	foreach ($resources as $resource) {
		if ( $resource[$key] == $valueToMatch ) {
			return $resource;
		}
	}
}

function addStyleGuideDetailLink($slug) {
	if ( isset($slug) ) {
		if ( isStyleGuide() ) {
			echo "<a class='detail-link' href='?page=module&slug=$slug'>Detail 🔗</a>";
		}
	}
}

function renderPageContent($page) {
	if ( isset($page["sections"]) ) {
		forEach( $page["sections"] as $section) {
			$type = $section["type"];
			include('page-section.php');
		}
	}
}

function renderExercise($id) {
	include("exercises/$id.php");
}
