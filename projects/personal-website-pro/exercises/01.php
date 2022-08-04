
<?php
	$firstName = "Derek";

	if ( isset($_POST["created"]) ) {
		$firstName = $_POST["firstName"];
	}

	$message = "You are now Sheriff $firstName.";
?>


<form method='POST'>

	<field>
		<label for="firstName">Name</label>
		<input 
			id="firstName" 
			name="firstName" 
			value="<?=$firstName?>"
		>
	</field>

	<button name="created">Create sheriff</button>

	<p><?=$message?> Congratulations!</p>

</form>
