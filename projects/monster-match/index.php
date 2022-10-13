<!DOCTYPE html>

<?php
//ERROR CHECK
function showErrors() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
showErrors();

//ROUTER
//initialize page variable
$page = null;

//if its set in the url, pull the url value into the variable
if ( isset($_GET['page']) ) {
	$pageId = $_GET['page'];
}
//otherwise page is home (if nothing is set)
else {
	$pageId = "home";
}

?>




<!-- HTML STRUCTURE -->
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Monster Match | Adoption Agency</title>

	<meta name="description" content="Scary monsters in need of loving homes">

	<!-- Note: Standard **PNG** metadata image size ~(1200 x 630) -->
	<meta property="og:image" content="https://peprojects.dev/alpha-4/andy/images/metadata-image.png">

	<!-- LINK fonts as needed -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- LINK primary stylesheet -->
	<link rel="stylesheet" href="style/style.css">

	<!-- LINK favicon -->
	<!-- <link rel="icon" type="image/svg+xml" href="images/svg/favicon.svg"> -->

</head>


<?php 

	$json = file_get_contents("data/meet.json");
	// dont need the below
	// $json = json_encode($file);
	// $json = $file;
?>

<body class="<?=$pageId?>">

	<?php include('functions.php')?>
	<?php include('templates/modules/site-header.php')?>


	<main>

		<section class="<?=$pageId?>">
			<inner-column class="<?=$pageId?>">
				<?php include("templates/pages/$pageId.php")?>
			</inner-column>
		</section>


	</main>

<script>
	let monster_data = <?=$json?>;
	
</script>

<script src="scripts/site.js"></script>

</body>
</html>








