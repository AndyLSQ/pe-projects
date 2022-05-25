<?php
	
	$guests = 4; /*people that were invited and accepted */
	$hosts = 2;
	$people = $guests + $hosts; //Host
	$berriesPerPerson = 15;
	$berriesPerBox = 26;
	$boxesNeeded = ceil(($people * $berriesPerPerson) / $berriesPerBox);

	$remainder = ($people * $berriesPerPerson) % $berriesPerBox;
	$boxPrice = 5;
	
	$totalCost = $boxPrice * $boxesNeeded;
	//how many boxes will you need

	//what is the total?

	$total = $people * $berries;


	$message = "<h1>The Berry Party</h1> <h3>A fictional story by Andy</h3> <p>Tonight is the Berry Party. We assume people will be starving by the time the party starts, so everyone will get " . $berriesPerPerson . " berries. </p> <p> Each box contains " . $berriesPerBox  . " berries, so we'll need " . $boxesNeeded . " boxes to serve a total of " . $people . " people. This headcount includes " . $guests . " guests and " . $hosts . " hosts.</p> <p> Berries cost " . $boxPrice . " dollars per box, so the total cost for the evening will be " . $totalCost . " dollars. There will be " . $remainder . " berries left over after the party.</p>";


	echo $message;
?>