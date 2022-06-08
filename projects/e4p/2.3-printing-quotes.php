<link rel="stylesheet" href="style/style.css">

<?php

// Initialize variables
	$quote = "";
	$author = "";
	$outputString = "";

	$submittedPOST = isset($_POST['submitted']); //Checks if submit button has been clicked


// If post has been submitted, assign values from $_POST to PHP $variables
// Then concatenate into an output string
	if($submittedPOST) {
		$quote = $_POST['quote'];
		$author = $_POST['author'];
		$outputString = $author . " says " . "\"" . $quote . "\".";
	}

//Array checker at the top of the page to monitor inputs
	function format($variable) {
		echo "<pre>";
			echo "<code>";
				echo print_r( $variable );
			echo "</code>";
		echo "</pre>";
	}

	format( $_POST );

?>


<h1>Printing Quotes</h1>

<form method="POST">

	<div class="field">
		<label for="">What is the quote?</label>
		<textarea name="quote" placeholder="Enter a quote here" rows=4 cols=30  required><?=$quote?></textarea> <!-- NOTE: for text area, quote value should be in between the delimiters, not within the first delimiter. -->
	</div>

	<div class="field">
		<label for="">Who said it?</label>
		<input type="text" name="author" placeholder="Quote author" value="<?=$author?>" required>
	</div>

	<button type='submit' name="submitted">
		Submit
	</button>

</form>


<output>
	<?=$outputString?>
</output>