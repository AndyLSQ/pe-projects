<link rel="stylesheet" href="style/style.css">

<?php

	$quote = null;
	$author = null;
	$outputString = "";

	$submittedPOST = isset($_POST['submitted']);
	$submittedQuote = $_POST['quote'] !="";
	$submittedAuthor = $_POST['author'] !="";

	if($submittedPOST) {
		if ($submittedQuote = 1 and $submittedAuthor = 1) {

			$quote = $_POST['quote'];
			$author = $_POST['author'];
			$outputString = $author . " says " . "\"" . $quote . "\".";
		}
		else {
			$outputString = "Please enter a valid quote and author.";
		}
	}

?>


<h1>Printing Quotes</h1>
<form method="POST">
	<div class="field">
		<label for="">What is the quote?</label>
		<textarea name="quote" placeholder="Enter a quote here" rows=4 cols=30 value="<?=$quote?>"></textarea>
	</div>
	<div class="field">
		<label for="">Who said it?</label>
		<input type="text" name="author" placeholder="Quote author" value="<?=$author?>">
	</div>
	<button type='submit' name="submitted">
		Submit
	</button>
</form>

<output>
	<?=$outputString?>
	
</output>