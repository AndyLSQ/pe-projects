
<?php 

// initialize variables
$topic = "";
$name = "";
$email = ""; //TODO: add data validation
$subject = "";
$message = "";

// check if form is submitted
	//retrieve input and assign to variables

if ($section["header"]) { ?>
		<h2><?=$section["header"]?></h2>
	<?php } 

?>

<h2></h2>

<form method="POST">

	<div class="field">
		<label for="">Name</label>
		<input type="text" name="name" value="<?=$name?>" required>
	</div>

	<div class="field">
		<label for="">Email</label>
		<input type="text" name="email" value="<?=$email?>" required>
	</div>

	<div class="field">
		<label for="">Subject</label>
		<input type="text" name="email" value="<?=$subject?>" required>
	</div>

	<div class="message">
		<label for="">Message</label>
		<textarea name="message" placeholder="Enter your message here" rows=4 cols=30 required><?=$message?></textarea>
	</div>

	<button type='submit' name="submitted">
		Submit
	</button>

</form>