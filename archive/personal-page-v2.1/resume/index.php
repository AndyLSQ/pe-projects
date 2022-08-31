<!DOCTYPE html>

<?php
//ERROR CHECK
function showErrors() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
showErrors();
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Andy's Resume</title>
</head>

<body>

	<?php include("templates/pages/header.php") ?>

	<hr>

	<main>
		
		<?php include("templates/pages/contact.php") ?>

		<hr>

		<?php include("templates/pages/skills.php") ?>

		<hr>

		<?php include("templates/pages/experience.php") ?>

		<hr>

		<?php include("templates/pages/education.php") ?>

	</main>


</body>

</html>