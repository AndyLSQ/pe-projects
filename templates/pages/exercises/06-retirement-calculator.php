<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<?php  
	$currentAge=0;
	$targetRetirementAge=0;
	$yearsLeft=0;
	$currentYear=2022;
	$retirementYear=0;

	$submittedPOST = isset($_POST['submitted']);

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

					$outputString1 = "<h2 class='mid-voice'>Output</h2><p>You have " . $yearsLeft . " years left until you can retire.</p>";
					$outputString2 = "<p>It's " . $currentYear . " so you can retire in " . $retirementYear . ".</p>";

					// echo $outputString1;
					// echo $outputString2;

				}
			}
		}
	}


?>

<form-container>

	<h2 class="mid-voice exercise-intro">Tell us your current age and when you want to retire. We'll tell you how much longer you're stuck at your job.</h2>

	<form method="POST">
		<div class="field">
			<label for="">What is your current age?</label>
			<input type="number" name="currentAge" value="<?=$currentAge?>" min=1 max=120>
		</div>

		<div class="field">
			<label for="">At what age would you like to retire?</label>
			<input type="number" name="targetRetirementAge" value="<?=$targetRetirementAge?>" min=1 max=120>
		</div>

		<button type="submit" name="submitted">
			Submit
		</button>
	</form>

</form-container>

<?php 
	if ($submittedPOST) { ?>

	<output>
		<p><?=$outputString1?></p>
		<p><?=$outputString2?></p>
	</output>

	<array-checker>
		<text-block>
			<h2 class="mid-voice exercise-intro">Take a peek behind the&nbsp;scenes</h2>
			<p>See what values are currently stored by the program. Note that the array will remain empty until the form has been submitted.</p>
		</text-block>
	

		<?php

			//Array checker to monitor inputs
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
