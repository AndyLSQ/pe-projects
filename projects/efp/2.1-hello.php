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

	
	

	// echo $greeting;
}


?>



<form method="POST">
	<h1>Exercise- Hello World</h1>

	<div class="field">
		<label for="">What is your name?</label>
		<input type="text" name="yourName" value="<?=$yourName?>">
	</div>

	<button type='submit' name="submitted">
		Submit
	</button>

	<p><?=$greeting?></p>
</form>