<h1>PHP Practice- Day 3</h1>
<h2>Associative Array (Objects)</h2>
<h3>Cardboard Box Analysis</h3>

<?php

	$shipping_box = [
	"material" => "cardboard",
	"material_detail" => "corrugated, recycled fiber",
	"sealed" => true,
	"seal_type" => "clear packing tape",
	"recieved_date" => "2/11/2022",
	"origin" => "Amazon, Inc.",
	"carrier" => "UPS",
	"height" => 5,
	"width" => 12,
	"length" => 10,
	"color" => "brown",
	"contents" => "cheap junk"
	];

	foreach ($shipping_box as $key => $value) {
		echo "Key: " . $key . "<br>Value: " . $value . "<br>";
		echo "<br>";
	}
?>


<h2>Array</h2>

<?php
	$classmatesArray = ["Andy", "Burooj", "Brian", "Derek", "Ivy", "Jesse", "John", "Josh", "Ned", "Tara"];

	$secondStudent = $classmatesArray[1];
	$lastStudent = end($classmatesArray);
?>
<p>The second classmate in alphabetical order is <?=$secondStudent?>. </p>
<p>The last classmate in alphabetical order is <?=$lastStudent?>. </p>



