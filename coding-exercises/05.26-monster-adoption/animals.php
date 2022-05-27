<?php

$animalArray = ["ape", "bunny", "cat", "dog", "elephant", "fox", "gator", "hyena"];


echo "<ol>";

foreach($animalArray as $animal) {
	echo "<li>" . $animal . "</li>";
};

echo "</ol>";


$myArray = ["one", 1, "three", "cat", true, false];

print($myArray[3]);
echo("<br>");

$sentence = "I have " . $myArray[0] . " " . $myArray[3] . ".";



echo($sentence);