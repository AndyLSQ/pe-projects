<html>
	<body>
		
		<?php
			echo "<h1>This is PHP</h1>";
			echo "<h2>" . 3 . "</h2>";
			echo "<h3>" . (5+5) . "</h3>";
			echo "<p>" . "Hi " . 5 . "</p>";


			$string1 = "This is string 1. ";
			$string2 = "This is string 2. ";
			$string3 = "This is string 3. ";
			$num1 = 1992;
			$noun1 = "dogs";
			$noun2 = "cats";
			$variable1 = "HELLO!";
			$url1 = "https://perpetual.education/lesson/php-templates/";

			echo "<p>" . $string1 . $string2 . $string3 . "</p>";

			echo "<p>" . $string1 . $num1 . "</p>";

			echo "<p> This is a longer sentence because it has more words than the other sentences and covers a wide range of topics like " . $noun1 . " and " . $noun2 . ", as well as big numbers like " . (800 + 50) . ".</p>";

			echo "<p> In the following century, men and women of faith waded into the battles over prison reform and temperance, public education and women's rights - and above all, abolition. Of course, the answer to the slavery question was already embedded within our Constitution - a Constitution that had at is very core the ideal of equal citizenship under the law; a Constitution that promised its people liberty, and justice, and a union that could be and should be perfected over time. " . $variable1 . " She sought out allies in her fight against injustice. Tonight, more Americans are out of work and more are working harder for less. But I will also renew the tough, direct diplomacy that can prevent Iran from obtaining nuclear weapons and curb Russian aggression. </p>";

			echo "<p> This is a URL: <a href=" . $url1 . ">Click me!</a> You can click it if you like. </p>"
		?>

	</body>

</html>