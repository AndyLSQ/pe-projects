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
		$outputString = "<h2 class='mid-voice'>Output</h2> <p>" . $author . " says " . "\"" . $quote . "\".</p>";
	}

?>

<form-container>

	<h2 class="mid-voice exercise-intro">Tell us a quote and who said it. We'll display it back to you.</h2>

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
</form-container>

<?php 
	if ($submittedPOST) { ?>

		<output>
			<?=$outputString?>
		</output>

		<array-checker>
					<text-block>
						<h2 class="mid-voice exercise-intro">Take a peek behind the&nbsp;scenes</h2>
						<p>See what values are currently stored by the program. Note that the array will remain empty until the form has been submitted.</p>
					</text-block>
				

					<?php

						//array checker to monitor inputs
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
