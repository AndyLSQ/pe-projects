
<?php


// 6 bands
	$bands = [
		"Above & Beyond",
		"BRKLYN",
		"Aruna",
		"Nero",
		"Porter Robinson",
		"Haliene"];

	foreach($bands as $band) {
		$message = "I like the band $band";
		echo "<li>" . $message . "</li>";
	}

	echo "<br>"

// 8 numbers (echo only if under 20)
	$favNumbers = [5, 7, 15, 18, 30, 55, 75, 99];

	foreach($favNumbers as $favNumber) {
		if ($favNumber<20) {
			echo "<li>" . $favNumber . "</li>";
		}
	}


// for loop count to 34
// echo except 12, 17, 23

	$exclude = [12, 17, 23];

	for ($i=0; $i < 35; $i=$i+2) { 
		if (in_array($i, $exclude)) {
				// echo "do nothing";
			}	
		else {
			echo "<li>" . $i . "</li>";
		}
	};


?>


