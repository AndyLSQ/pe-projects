<head>
	<link rel="stylesheet" href="style/style.css">
</head>


<?php

// Get the number of people, pizzas, and slices per pizza
	$people = 0;
	$pizzas = 0;
	$slicesPerPizza = 0;

// Confirm submission
	$submittedPOST = isset($_POST['submitted']);
	

	if ($submittedPOST) {
		$people = $_POST['people'];
		$pizzas = $_POST['pizzas'];
		$slicesPerPizza = $_POST['slicesPerPizza'];
	

	// Calculate the number of pieces each person gets and the number of leftover pieces
		$totalSlices = $pizzas * $slicesPerPizza;
		$slicesPerPerson = floor($totalSlices / $people);
		$leftoverSlices = $totalSlices % $people;

		$outputString = "<p> There are $people people with $pizzas pizzas</p><p>Each person gets $slicesPerPerson slices of pizza.</p><p>There are $leftoverSlices leftover slices.</p>";

}
	// echo "<p>$slicesPerPerson slices per person</p> ";
	// echo "<p>$leftoverSlices slices left over</p> ";

// Output the numbers of pieces per person and leftover pieces








//Array checker at the top of the page to monitor inputs
	function format($variable) {
		echo "<pre>";
			echo "<code>";
				print_r( $variable );
			echo "</code>";
		echo "</pre>";
	}

	format( $_POST );

?>

<form method="POST">
	<h1>Exercise- Pizza Party</h1>

	<div class="field">
		<label for="">How many people are there?</label>
		<input type="number" name="people" value="<?=$people?>"min=1 required>
	</div>

	<div class="field">
		<label for="">How many pizzas are there?</label>
		<input type="number" name="pizzas" value="<?=$pizzas?>" min=1 required>
	</div>

	<div class="field">
		<label for="">How many slices are there per pizza?</label>
		<input type="number" name="slicesPerPizza" value="<?=$slicesPerPizza?>" min=1 required>
	</div>

	<button type="submit" name="submitted">
		Submit
	</button>

</form>



<output>
	<?=$outputString?>
	
	
</output>