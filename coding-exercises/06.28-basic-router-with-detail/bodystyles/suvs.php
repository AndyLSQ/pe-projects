<?php include ('data/car-data.php'); 
	
	$type = null;
	$filtered = [];


	// find out if type is specified
	if (isset($_GET['type']) ) {
		$type = $_GET['type'];
	}
	else {
		echo "type not specified";
	}

	// if type is specified 
	if ($type) {
		foreach ($car_data as $car) {
			if ($car['type'] == $type) {
				array_push($filtered, $car);
			}
		}
		$car_data = $filtered;
		
	}
	//filter car list to that type


?>


<h1>LIST Page</h1>
<?php //print_r($car_data[0]); ?>

<ul>
	<?php foreach ($car_data as $car) {

		include("car-card.php");
	}
	?>

</ul>
