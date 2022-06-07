<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<?php  
	$currentAge=0;
	$targetRetirementAge=0;
	$yearsLeft=0;
	$currentYear=2022;
	$retirementYear=0;


	if ( isset($_POST["submitted"]) ) {

		if ( isset($_POST["currentAge"]) ) {

			$currentAge = $_POST["currentAge"];

			if ( isset($_POST["targetRetirementAge"]) ) {


				$targetRetirementAge = $_POST["targetRetirementAge"];

				if ($currentAge >= $targetRetirementAge) {
					echo "You can already retire.";
				}

				else{
					$yearsLeft = $targetRetirementAge - $currentAge;

					$retirementYear = $currentYear + $yearsLeft;

					$outputString1 = "<p>You have " . $yearsLeft . " years left until you can retire.</p>";
					$outputString2 = "<p>It's " . $currentYear . " so you can retire in " . $retirementYear . ".</p>";

					// echo $outputString1;
					// echo $outputString2;

				}
			}
		}
	}


?>


<form method="POST">
	<h1>Exercise - Retirement Calculator</h1>
	<div class="field">
		<label for="">What is your current age?</label>
		<input type="number" name="currentAge" min=1 max=120>
	</div>

	<div class="field">
		<label for="">At what age would you like to retire?</label>
		<input type="number" name="targetRetirementAge" min=1 max=120>
	</div>

	<button type="submit" name="submitted">
		Submit
	</button>
</form>

<output>
	<p><?=$outputString1?></p>
	<p><?=$outputString2?></p>
</output>