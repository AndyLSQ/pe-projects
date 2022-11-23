<div class="exercise">
	<inner-column>
		<div class="app-header">
			<h2>1. Saying Hello</h2>
			<p>Create a program that prompts for your name and prints a greeting using your name.</p>
		</div>

		<div class="processor-select" id="ps01">
			<p class="processor-label">Server Side</p>
			<label class="switch">
		  		<input type="checkbox" v-model="processorSwitch"> <!-- vue = checked -->
		  		<span class="slider"></span>
			</label>
			<p class="processor-label">Client Side</p>
			<p>Switch value {{processorSwitch}} </p>
			<p>active: {{checkProcessor}}</p>
		</div>

		{{checkProcessor}}
		
		<div class="processor php">
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

				<?=$greeting?>
				
			</form>
		</div>


		<div class="processor vue">
			<h3>Client Side Processing (Vue)</h3>
			<div class="app" id="app1" :class="outputStyle">
				<form v-on:submit.prevent='update'>
					<div class="field">
						<label for="a">What is your name?</label>
						<input id="a" v-model='name'/>
					</div>
					<button type="submit">Submit</button>
				</form>

				<output v-if='checkInput' >
					{{message}} <!-- 	this can be any property -->
				</output>
			</div>
		</div>
	</inner-column>
</div>