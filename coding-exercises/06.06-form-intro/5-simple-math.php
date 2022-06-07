<?php
$num1 = 0;
$num2 = 0;
$sum = 0;
$difference = 0;
$product = 0;
$quotient = 0;
$sumOutput = 0;
$differenceOutput = 0;
$productOutput = 0;
$quotientOutput = 0;


if ( isset($_POST["submitted"]) ) {

	if ( isset($_POST["num1"]) ) {
		$num1 = $_POST["num1"];

		if ( isset($_POST["num2"]) ) {
			$num2 = $_POST["num2"];

			//sum
			$sum = floatval($num1) + floatval($num2);
			$sumOutput = "<li>Sum: " . $num1 . " + " . $num2 . " = " . $sum . "</li>";
			//TODO MOVE THESE OUTPUT DISPLAYS TO THE HTML BELOW THE FORM
			echo $sumOutput;

			//difference
			$difference = floatval($num1) - floatval($num2);
			$differenceOutput = "<li>Difference: " . $num1 . " - " . $num2 . " = " . $difference . "</li>";
			echo $differenceOutput;

			//product
			$product = floatval($num1) * floatval($num2);
			$productOutput = "<li>Product: " . $num1 . " x " . $num2 . " = " . $product . "</li>";
			echo $productOutput;

			//quotient
			$quotient = floatval($num1) / floatval($num2);
			$quotientOutput = "<li>Quotient: " . $num1 . " / " . $num2 . " = " . $quotient . "</li>";
			echo $quotientOutput;
		}
	}
}



?>

<form method="POST">
	<h1>Exercise- Simple Math</h1>

	<div class="field">
		<label for="">What is the first number?</label>
		<input type="number" name=num1 min=0 value='<?=$num1?>'>
	</div>

	<div class="field">
		<label for="">What is the second number?</label>
		<input type="number" name=num2 min=0 value='<?=$num2?>'>
	</div>

	<button type="submit" name="submitted">
		Submit
	</button>


</form>