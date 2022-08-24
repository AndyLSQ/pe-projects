<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<?php 
$yourName = "";
$greeting = "";


$submittedPOST = isset($_POST['submitted']);
$submittedName = isset($_POST["yourName"]);



if ( $submittedPOST ) {

	if ($submittedName) {

		$yourName = $_POST["yourName"];

		if( strlen($yourName)>1 ) {
		
			$greeting = "Hello, " . $yourName . ", nice to meet you!";

		}

		else {
			$greeting = "Please enter your name.";
		}
	}

}


	

?>

<form-container>

<h2>Tell us your name and we'll say hello to you.</h2>

<form method="POST">

	<div class="field">
		<label for="">What is your name?</label>
		<input type="text" name="yourName" value="<?=$yourName?>">
	</div>

	<button type='submit' name="submitted">
		Submit
	</button>

	
</form>

</form-container>

<?php 
	if ($submittedPOST) { ?>

	<output>
		<?=$greeting?>	
	</output>

	<array-checker>
		<text-block>
			<h2 class="mid-voice exercise-intro">Take a peek behind the&nbsp;scenes</h2>
			<p>See what values are currently stored by the program. Note that the array will remain empty until the form has been submitted.</p>
	</text-block>

<?php
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
	</array-checker>
	<?php } ?>