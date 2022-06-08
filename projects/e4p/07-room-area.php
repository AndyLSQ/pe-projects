<head>
	<link rel="stylesheet" href="style/style.css">
</head>

<?php

	//Get length
	$length = 15;

	//Get width
	$width = 20;

	$CONVERSION = 0.09290304; //Capital letters to indicate constant value not to be changed

	//If length and width input provided by user, use them

	//If not provided, remind them to do it. End program if input not received

	//Calculate area
	$areaSqFt = $length * $width;
	$areaSqM = round(($areaSqFt * $CONVERSION), 3);


	//Create ouput message
	$message = "The area is $areaSqFt square feet or $areaSqM square meters.";

	//Display message

?>





<output><?=$message?></output>