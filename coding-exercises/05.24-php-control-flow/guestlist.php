<h1>Berry Party Guestlist Assistance</h1>
<p>This is the most exclusive event of the season, so great care must be taken to invite the right people.</p>


<?php

	$name = "Ricky";
	$lovesBerries = false;
	$followers = 80000;

	echo "<h2>Should we invite " . $name . "?</h2>";

	if ($lovesBerries == true and $followers >= 50000) {
		echo "Yes! " . $name . " loves berries and has " . $followers . " followers on pintrest.";
	} elseif ($lovesBerries == true and $followers < 50000) {
		echo "No! " . $name . " loves berries but only has " . $followers . " followers on pintrest. Weak!";
	} elseif ($lovesBerries == false and $followers < 50000){
		echo "No way! " . $name . " doesn't love berries. What is wrong with them?? At least they only have " . $followers . " followers on pintrest so they can't spread their awful taste.";
	} else {
		echo "<p>No way! " . $name . " doesn't even love berries. What is wrong with them??</p> <p>Also, how do they have " . $followers . " followers on pintrest?? We need to sabotage them so they can't spread harmful untruths about berries.";
	}

?>







