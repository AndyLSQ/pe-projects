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

		echo "<li>Sum: " . $a . " + " . $b . " = " . $sum . "</li>";
		echo "<li>Difference: " . $a . " - " . $b . " = " . $difference . "</li>";
		echo "<li>Product: " . $a . " x " . $b . " = " . $product . "</li>";
		echo "<li>Quotient: " . $a . " / " . $b . " = " . $quotient . "</li>";
	}
}



if ( isset($_POST["submitted"]) ) {

	if ( isset($_POST["num1"]) and isset($_POST["num2"]) ) {
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
	
	}
}



?>

<form method="POST">
	<h1>Exercise- Simple Math</h1>

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