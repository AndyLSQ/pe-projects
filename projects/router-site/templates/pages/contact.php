<?php include('templates/modules/page-header.php');?>

<?php 

// initialize variables
$topic = "";
$name = "";
$email = ""; //TODO: add data validation
$subject = "";
$message = "";

// check if form is submitted
	//retrieve input and assign to variables


?>


<fieldset>
    <legend>What would you like to talk about?</legend>

    <form>
    	<div>
	      <input type="radio" id="connect" name="subject" value="connect"
	             checked>
	      <label for="connect">Connect & Chat</label>
      </div>
      
      <div>
	      <input type="radio" id="projects" name="subject" value="projects">
	      <label for="projects">Ask about my projects</label>
    </div>

    <div>
      <input type="radio" id="collaborate" name="subject" value="collaborate">
      <label for="collaborate">Collaborate with me</label>
    </div>

    <div>
      <input type="radio" id="jobs" name="subject" value="jobs">
      <label for="jobs">Job opportunities</label>
    </div>

     <div>
     	<input type="radio" id="weather" name="subject" value="weather">
      <label for="weather">The weather</label>
    </div>
</form> 

</fieldset>


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