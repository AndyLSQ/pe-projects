<?php

function showErrors() {
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
}
showErrors();

function queryString() {
	return $_SERVER['QUERY_STRING']; // Outputs Query String
}





?>

