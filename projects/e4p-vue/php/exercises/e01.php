<div class="exercise">
	<inner-column id="app1">
		<div class="app-header">
			<h2>1. Saying Hello</h2>
			<p>Create a program that prompts for your name and prints a greeting using your name.</p>
		</div>

		<div class="processor-select" id="ps01">
			<p class="processor-label">Server Side</p>
			<label class="switch">
		  		<input type="checkbox" id='processorSwitch01'v-model="processorSwitch"> <!-- vue = checked -->
		  		<span class="slider"></span>
			</label>
			<p class="processor-label">Client Side</p>
		</div>
		
		<div class="processor php" v-if="!processorSwitch">
			<h3>Server Side Processing (PHP)</h3>

			<?php 
				$yourName = "";
				$greeting = "";


				$submittedPOST = isset($_POST['submitted']);
				$submittedName = isset($_POST["yourName"]);

				if ( $submittedPOST ) {
					if ($submittedName) {
						$yourName = $_POST["yourName"];
						if( strlen($yourName)>1 ) {
							$greeting = "<output>Hello, " . $yourName . ", nice to meet you!</ouput>";
						}
						else {
							$greeting = "<output>Please enter your name.</output>";
						}
					}
				}
			?>

			<form method="POST">
				<div class="field">
					<label for="">What is your name?</label>
					<input type="text" name="yourName" value="<?=$yourName?>">
				</div>
				<button type='submit' name="submitted">Submit</button>
			</form>

			<?=$greeting?>
		</div>


		<div class="processor vue" v-if="processorSwitch" :class="outputStyle">
			<h3>Client Side Processing (Vue)</h3>
			<div class="app">
				<form v-on:submit.prevent='update'>
					<div class="field">
						<label for="a">What is your name?</label>
						<input id="a" v-model='name'/>
					</div>
					<button type="submit">Submit</button>
				</form>
			</div>

			<output v-if='checkInput' >
					{{message}} <!-- 	this can be any property -->
			</output>
		</div>
	</inner-column>
</div>