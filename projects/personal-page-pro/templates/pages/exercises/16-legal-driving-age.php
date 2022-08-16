<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<!-- Constraints
• Use a single output statement.
• Use a ternary operator to write this program. If your
language doesn’t support a ternary operator, use a regular if/else statement, and still use a single output statement to display the message. -->



<?php

//initialize & check if form submitted
$age = 0;
$outputString = "";


$submittedPOST = isset($_POST['submitted']);

if ($submittedPOST) {
// check if age is less than the legal driving age

$age = $_POST['age'];

	if ($age < 16) {
		//if so, set output string to a message telling them they're too young
		$outputString = "You are not old enough to legally drive.";
	} else {
		//otherwise set the output to tell them they're old enough
		$outputString = "You are old enough to legally drive.";
	}
}

?>


<h1>Exercise- Legal Driving Age</h1>
<h2>Let us know how old you are. We'll let you know if you're old enough to drive.</h2>


<form method="POST">

	<div class="field">
		<label for="">What is your age?</label>
		<input type="number" name="age" value="<?=$age?>" min=0 required>
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