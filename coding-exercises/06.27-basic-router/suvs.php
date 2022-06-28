<?php

$suv = null;

if ( isset($_GET["suv"]) ) {
	$suv = $_GET["suv"];
} else {
	$suv = "suvs/suv-main.php";
}

?>

<?php
	include("suvs/suv-main.php");

	if ($suv == "suv1") {
		include("suvs/suv1.php");
	}

?>

