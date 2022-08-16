<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<!-- Constraints
• Prevent the user from entering non-numeric values. -->



<?php

//initialize variables
$drinks = 0; //number of drinks consumed
$a = 0; //alcohol consumed in oz
$W = 0; //body weight in lbs
$gender = "";
$r = 0; //alcohol distribution ratio (.73 for men, .66 for women)
$H = 0; //hours since last drink
$bac = 0;
$bacOutput = "";
$legalOutput = "";
$outputString = "";

//determine $r based on gender
function ratioCalc($genderSelected) {
	if ($genderSelected == "male") {
		return .73;
		echo "male";
	} elseif ($genderSelected == "female") {
		return .66;
		echo "female";
	} 
}

//determine $a based on number of drinks
function alcVolume($drinksConsumed) {
	$alcVol = $drinksConsumed * .6;
	return $alcVol;
	echo "alc volume is " . $alcVol;
}

//calculate bac
// function calcBac()

//check if form submitted
$submittedPOST = isset($_POST['submitted']);

if ($submittedPOST) {
	//retrieve input and assign to variables
	$W = $_POST['weight'];
	$gender = $_POST['gender'];
	$drinks = $_POST['drinks'];
	$H = $_POST['hours'];

	//get $r
	$r = ratioCalc($gender);
	// echo "r is " . $r;

	//get $a
	$a = alcVolume($drinks);
	// echo "a is " . $a;

	//calc bac
	$bac = number_format((($a * 5.14/$W * $r) - .015 * $H),3);
	// echo "bac is " . $bac;

	$bacOutput = "Your BAC is " . $bac;


	//determine if you're under the limit
	if ($bac < .08) {
		$legalOutput = "It is legal for you to drive.";
	} else {
		$legalOutput = "It is not legal for you to drive.";
	}

	$outputString = "<p>" . $bacOutput . "</p><p>" . $legalOutput . "</p>";
}



?>


<h1>Exercise- Blood Alcohol Calculator</h1>
<h2>Let us know a few things about you and your alcohol consumption. We'll let you know if you're ok to drive.</h2>


<form method="POST">

	<div class="field">
		<label for="">What is your weight in pounds?</label>
		<input type="number" name="weight" value="<?=$W?>" min=0 required>
	</div>
	
	<div class="field" id="gender">
		<label for="">What is your gender?</label>
		<select name="gender" id="" value="<?=$gender?>" required>
			<option value="">--- Choose a gender ---</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
	</div>

	<div class="field">
		<label for="">How many <a href="https://www.rethinkingdrinking.niaaa.nih.gov/how-much-is-too-much/what-counts-as-a-drink/whats-a-standard-drink.aspx" target="reference">drinks</a> have you had?</label>
		<input type="number" name="drinks" value="<?=$drinks?>" min=0 required>
	</div>

	<div class="field">
		<label for="">How many hours has it been since your last drink?</label>
		<input type="number" name="hours" value="<?=$H?>" min=0 required>
	</div>


	<button type="submit" name="submitted">
		Submit
	</button>

</form>

<output>
	<?=$outputString?>
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