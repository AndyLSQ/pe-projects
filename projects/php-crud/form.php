<!DOCTYPE html>

<?php
	$id = "";


	$submittedPOST = isset($_POST['submitted']);

	if($submittedPOST) {
		$id = $_POST['id'];
		$bodystyle = $_POST['bodystyle'];
		$size = $_POST['size'];
		$capacity = $_POST['capacity'];
		$year = $_POST['year'];
		$make = $_POST['make'];
		$model = $_POST['model'];
		$tagline = $_POST['tagline'];
		$description = $_POST['description'];
		$trim = $_POST['trim'];
		$price = $_POST['price'];


		echo "Vehicle " . $id . " submitted";
		echo "Price is " . $price;
	}

	

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vehicle Input Form</title>

	<link rel="stylesheet" href="style/style.css">
</head>
<body>

</body>
</html>

<h1>Vehicle Input Form</h1>

<form method="POST">
	<field>
		<label>Vehicle ID</label>
		<input type="text" name="id" value="<?=$id?>" required>
	</field>

	<field>
		<label>Bodystyle</label>
		<select name="bodystyle" required>
			<option disabled selected value> -- Select an option --</option>
			<option value="suv">SUV</option>
			<option value="sedan">Sedan</option>
			<option value="performance">Performance</option>
		</select>
	</field>

	<field>
		<label>Size</label>
		<select name="size" required>
			<option disabled selected value> -- Select an option --</option>
			<option value="subcompact">Subcompact</option>
			<option value="compact">Compact</option>
			<option value="midsize">Midsize</option>
			<option value="fullsize">Fullsize</option>
		</select>
	</field>

	<field>
		<label>Seating Capacity</label>
		<input type="number" name="capacity" value="<?=$capacity?>"  required min=2 max=9 placeholder="2">
	</field>

	<field>
		<label>Year</label>
		<input type="number" name="year" value="<?=$year?>"  required min=2021 max=2023 placeholder="2021">
	</field>

	<field>
		<label>Make</label>
		<input type="text" name="make" value="<?=$make?>"  required>
	</field>

	<field>
		<label>Model</label>
		<input type="text" name="model" value="<?=$model?>"  required>
	</field>

	<field>
		<label>Tagline</label>
		<textarea type="textarea" rows=4 cols=30 name="tagline" value="<?=$tagline?>"  required> </textarea>
	</field>

	<field>
		<label>Model Description</label>
		<textarea type="textarea" rows=4 cols=30 name="description" value="<?=$description?>"  required> </textarea>
	</field>

	<field>
		<label>Trim</label>
		<select name="trim" required>
			<option disabled selected value> -- Select an option --</option>
			<option value="base">Base</option>
			<option value="premium">Premium</option>
			<option value="limited">Limited</option>
			<option value="touring">Touring</option>
		</select>
	</field>

	<field>
		<label>Price</label>
		<input type="number" name="price" value="<?=$price?>"  required>
	</field>

	<button type="submit" name="submitted">
		Submit Vehicle
	</button>


</form>