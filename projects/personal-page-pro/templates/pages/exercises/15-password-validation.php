<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<!-- Constraints
• Use an if/else statement for this problem. 
• Make sure the program is case sensitive. -->



<?php



//initialize & check if form submitted
$password = "";
$outputString = "";


$submittedPOST = isset($_POST['submitted']);

if ($submittedPOST) {
	// Get the entered password from the form below)
	$enteredPassword = $_POST['enteredPassword'];

	// Correct password
	$password = "Let me in!";

	//if the password is correct
	if ($enteredPassword == $password) {
		// let them in
		$outputString = "Welcome!";
	} else {
		$outputString = "I don't know you.";
	}
}
?>


<h1>Exercise- Password Validation</h1>
<h2>Enter your password and we'll let you in.</h2>


<form method="POST">
	
	<div class="field">
		<label for="">What is the password?</label>
		<input type="password" name="enteredPassword" required>
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