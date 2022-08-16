<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<?php
$num1 = null;
$num2 = null;
$sum = 0;
$difference = 0;
$product = 0;
$quotient = 0;
$sumOutput = 0;
$differenceOutput = 0;
$productOutput = 0;
$quotientOutput = 0;
 
function renderOutput($numA, $numB) {
	if ($numA and $numB) {
		$a = floatval($numA);
		$b = floatval($numB);

		$sum = $a + $b;
		$difference = $a - $b;
		$product = $a * $b;
		$quotient = $a / $b;

		echo "<p><strong>Sum:</strong> " . $a . " + " . $b . " = " . $sum . "</p>";
		echo "<p><strong>Difference:</strong> " . $a . " - " . $b . " = " . $difference . "</p>";
		echo "<p><strong>Product:</strong> " . $a . " x " . $b . " = " . $product . "</p>";
		echo "<p><strong>Quotient:</strong> " . $a . " / " . $b . " = " . $quotient . "</p>";
	}
}



if ( isset($_POST["submitted"]) ) {

	if ( isset($_POST["num1"]) and isset($_POST["num2"]) ) {
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
	
	}
}

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

<h1>Exercise- Simple Math</h1>
<h2>Input a couple numbers. We'll do some quick maths and show our work.</h2>

<form method="POST">
	
	<div class="field">
		<label for="">What is the first number?</label>
		<input type="number" name=num1 min=0 value='<?=$num1?>' style="-webkit-appearance: none;">
	</div>

	<div class="field">
		<label for="">What is the second number?</label>
		<input type="number" name=num2 min=0 value='<?=$num2?>' step="0.01">
	</div>

	<button type="submit" name="submitted">
		Submit
	</button>

</form>

<output>
	<?php renderOutput($num1, $num2);?>


</output>