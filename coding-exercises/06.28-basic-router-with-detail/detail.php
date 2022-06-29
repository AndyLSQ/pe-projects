<?php
	
// get all car data
	include ('data/car-data.php');

// figure out which car will show detail
	$id = null;
	$current_car = null;

	if (isset($_GET['id']) ) {
		$id = $_GET['id'];
	}
	else {
		echo "Please select a car.";
	}
	

// look at each car
	foreach ($car_data as $car) {	
// if car matches the one we want, pull in the data
		if ($car['id'] == $id) {
			$current_car = $car;
		}
	}
// return data to the template and display



?>







<h1>Details</h1>

The model name of this car is <?=$current_car['model']?>.
The size of this car is <?=$current_car['size']?>.
