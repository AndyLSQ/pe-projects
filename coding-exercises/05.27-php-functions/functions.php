<?php 
	
	function recipe($crust, $sauce, $topping1, $topping2) {
		echo "<h2>Order</h2>";
			echo "<ol>";
				echo "<li>" . $crust . " crust.</li>";
				echo "<li>" . $sauce . " sauce.</li>";
				echo "<li>" . $topping1. ".</li>";
				echo "<li>" . $topping2 . ".</li>";
			echo "</ol>";
	}

	recipe("Thin", "tomato", "cheese", "pepperoni");
	recipe("Thick", "tomato", "sausage", "mushroom");
	recipe("Deep dish", "tomato", "cheese", "bacon");

 ?>



 <?php