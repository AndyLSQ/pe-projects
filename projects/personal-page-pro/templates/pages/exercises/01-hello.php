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

<h1>Exercise- Hello World</h1>
<h2>Tell us your name and we'll say hello to you.</h2>

<form method="POST">

	<div class="field">
		<label for="">What is your name?</label>
		<input type="text" name="yourName" value="<?=$yourName?>">
	</div>

	<button type='submit' name="submitted">
		Submit
	</button>

	<p><?=$greeting?></p>
</form>