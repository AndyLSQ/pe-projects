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
if (isset($_GET['page']) ) {
	$page = $_GET['page'];
}
//otherwise page is home if nothing is set
else {
	$page = "home";
}

?>


<!-- HTML STRUCTURE -->

<html>

	<?php include('1-html-head.php'); ?>

	<body>

		<?php include('2-site-header.php'); ?>

		<main>
			<?php
				if ( $page == "home" ) {
					include('3-home.php'); 
				}
				if ( $page == "vehicles" ) {
					include('4-vehicles.php');
				}

				if ( $page == "detail" ) {
					include('5-detail.php');

				}
				?>
		</main>

		<?php include('footer.php')?>

	</body>
	

</html>