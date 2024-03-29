<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<?php

	//Get length
	$length = "";

	//Get width
	$width = "";

	$CONVERSION = 0.09290304; //Capital letters to indicate constant (value not to be changed)

	//If length and width input provided by user, use them
	//If not provided, remind them to do it. End program if input not received
	$submittedPOST = isset($_POST['submitted']);

	if ($submittedPOST) {
		// Assign variables
		$length = $_POST['length'];
		$width = $_POST['width'];

		//Calculate area
		$areaSqFt = $length * $width;
		$areaSqM = round(($areaSqFt * $CONVERSION), 2);

		//Create ouput message
		$message = "<h2 class='mid-voice'>Output</h2> <p>You entered dimensions of $length feet by $width feet.</p> <p>The area is $areaSqFt square feet or $areaSqM square meters.</p>";
	}

	


?>

<form-container>

	<h2 class="mid-voice exercise-intro">Tell us the length and width of your room in feet. We'll calculate the area in square feet and square meters.</h2>

	<form method="POST">

		<div class="field">
			<label for="">What is the length of the room in feet?</label>
			<input type="number" name="length" required min=0 value="<?=$length?>" placeholder="Enter length here">
		</div>

		<div class="field">
			<label for="">What is the width of the room in feet?</label>
			<input type="number" name="width" required min=0 value="<?=$width?>" placeholder="Enter width here">
		</div>

		<button type="submit" name="submitted">Submit</button>

	</form>
</form-container>


<?php 
	if ($submittedPOST) { ?>

		<output><?=$message?></output>

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
