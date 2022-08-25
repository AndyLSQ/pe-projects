
<?php 

// initialize variables
$topic = "";
$name = "";
$email = ""; //TODO: add data validation
$subject = "";
$message = "";

?>

<contact-form>

<?php
if ($section["header"]) { ?>
		<h2 class="loud-voice"><?=$section["header"]?></h2>
	<?php } 
?>

<div class="input">

	<form class="radio">
		<h2 class=attention-voice>What do you want to talk&nbsp;about?</h2>
		
		<radio-buttons>
			<p>⨀ Connect & chat</p>
			<p>⨀ Collaborate with me</p>
			<p>⨀ Ask about my projects</p>
			<p>⨀ Job opportunities</p>
			<p>⨀ The weather</p>
		</radio-buttons>
		

	</form>



	<form class="message-form" method="POST">

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
			<textarea name="message" placeholder="Enter your message here" rows=15 cols=60 required><?=$message?></textarea>
		</div>

		<button type='submit' name="submitted" class="button">
			Submit- TEST
		</button>

	</form>
</div>


</contact-form>

<?php

$submittedPOST = isset($_POST['submitted']);

if ($submittedPOST) {

	echo "submitted";

	// The message
	$message = "Line 1\r\nLine 2\r\nLine 3";

	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70, "\r\n");

	// Send
	$send = mail('aeliscu@live.com', $subject, $message);

	echo($send ? "Mail is sent" : "There was an error");

	}
?>