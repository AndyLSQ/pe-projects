<?php 
$yourName = "";
$greeting = "";

if ( isset($_POST['submitted']) ) {

	if ( isset($_POST["yourName"]) ) {
		if ( $_POST["yourName"] != "") {
			$yourName = $_POST["yourName"];

			$greeting = "Hello, " . $yourName . ", nice to meet you!";
		}

		else {
			echo "Please enter your name.";
		}
	}

	

	// echo $greeting;
}


?>



<form method="POST">
	<h1>Exercise- Hello World</h1>

	<div class="field">
		<label for="">What is your name?</label>
		<input type="text" name="yourName">
	</div>

	<button type='submit' name="submitted">
		Submit
	</button>

	<p><?=$greeting?></p>
</form>