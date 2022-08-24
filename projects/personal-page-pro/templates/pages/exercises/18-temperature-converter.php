<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<!-- Constraints
• Use as few output statements as possible and avoid repeating output strings. -->



<?php

//initialize variables
$startUnit = "";
$targetUnit = "";
$startTemp = "";
$targetTemp = "";
$outputString = "";

//function to convert C to F
function CtoF($startTemp) {
	$targetTemp = ($startTemp *9/5) + 32;
	return number_format($targetTemp,1);
}

//function to convert F to C
function FtoC($startTemp) {
	$targetTemp = ($startTemp-32)*5/9;
	return number_format($targetTemp,1);
}

//pull the correct conversion result

function tempConvert($startUnit, $startTemp) {
	if ($startUnit == "celsius") {
		$targetTemp = CtoF($startTemp);
	} else {
		$targetTemp = FtoC($startTemp);
	}

	return $targetTemp;
}

//function to check conversion direction 
function unitConvert($startUnit) {
	if ($startUnit == "celsius") {
		$targetUnit = "Farenheit";
	} else {
		$targetUnit = "Celsius";
	}
		return $targetUnit;
}


//check if form submitted
$submittedPOST = isset($_POST['submitted']);

if ($submittedPOST) {
	//retrieve input and assign to variables
	$startUnit = $_POST['startUnit'];
	$startTemp = $_POST['startTemp'];

	//run appropriate conversion
	$targetTemp = tempConvert($startUnit, $startTemp);
	$targetUnit = unitConvert($startUnit);


	//generate output
	$outputString = "The temperature in " . $targetUnit . " is " . $targetTemp . ".";
}

?>

<form-container>

<h2 class="mid-voice exercise-intro">Convert from Fahrenheit to Celsius or vice-versa.</h2>


<form method="POST">
	
	<div class="field">
		<label for="">What is your starting unit of measurement?</label>
		<select name="startUnit" id="uom" value="<?=$startUnit?>" required>
			<option value="">--- Choose a starting unit ---</option>
			<option value="celsius">Celsius</option>
			<option value="farenheit">Farenheit</option>
		</select>
	</div>

	<div class="field">
		<label for="">What is the temperature in your starting unit?</label>
		<input type="number" name="startTemp" value="<?=$startTemp?>" required>
	</div>

	<button type="submit" name="submitted">
		Submit
	</button>

</form>

</form-container>

<?php 
	if ($submittedPOST) { ?>
		<output>
			<?=$outputString?>
		</output>
		<array-checker>
			<text-block>
				<h2 class="mid-voice exercise-intro">Take a peek behind the&nbsp;scenes</h2>
				<p>See what values are currently stored by the program. Note that the array will remain empty until the form has been submitted.</p>
			</text-block>


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

	</array-checker>
	<?php } ?>