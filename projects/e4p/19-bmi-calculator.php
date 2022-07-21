<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<!-- Constraints
• Ensure your program takes only numeric data. Don’t let the user continue unless the data is valid. -->



<?php

function calcBMI($height, $weight) {
	$bmi = ($weight/($height*$height))*703;
	return number_format($bmi, 1);
}


//initialize variables
$weight = 0;
$height = 0;
$bmi = 0;
$bmiOutput = "";
$rangeOutput = "";



 //check if form submitted
$submittedPOST = isset($_POST['submitted']);


if ($submittedPOST) {
	//retrieve input and assign to variables
	$weight = $_POST['weight'];
	$height = $_POST['height'];

	$bmi = calcBMI($height, $weight);

	$bmiOutput = "<p>Your BMI is " . $bmi . ".</p>";

	if ($bmi < 18.5) {
		$rangeOutput = "<p>You are underweight. You should see your doctor.</p>";	
	} elseif ($bmi > 25) {
		$rangeOutput = "<p>You are overweight. You should see your doctor.</p>";
	} else {
		$rangeOutput = "<p>You are within the ideal weight range.</p>";
	}

}

?>


<h1>Exercise- BMI Calculator</h1>
<h2>Let us know your height and weight. We'll calculate your body mass index for you.</h2>


<form method="POST">

	<div class="field">
		<label for="">What is your height in inches?</label>
		<input type="number" name="height" value="<?=$height?>" min=0 required>
	</div>

	<div class="field">
		<label for="">What is your weight in pounds?</label>
		<input type="number" name="weight" value="<?=$weight?>" min=0 required>
	</div>
	
	<button type="submit" name="submitted">
		Submit
	</button>

</form>

<output>
	<?=$bmiOutput?>
	<?=$rangeOutput?>
</output>



<?php

	//array checker to monitor inputs
	function format($variable) {
		echo "<pre>";
			echo "<code>";
				print_r( $variable );
			echo "</code>";
		echo "</pre>";
	}

	format( $_POST );

?>