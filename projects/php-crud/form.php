<!DOCTYPE html>

<?php
	$id = "";


	$submittedPOST = isset($_POST['submitted']);

	if($submittedPOST) {
		$id = $_POST['id'];
		echo "Vehicle " . $id . " submitted";
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
		<input type="text" name="bodystyle" value="<?=$bodystyle?>"  required>
	</field>

	<field>
		<label>Size</label>
		<input type="text" name="size" value="<?=$size?>"  required>
	</field>

	<field>
		<label>Seating Capacity</label>
		<input type="number" name="capacity" value="<?=$capacity?>"  required min=1>
	</field>

	<field>
		<label>Year</label>
		<input type="number" name="year" value="<?=$year?>"  required min=1929 max=2025>
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
		<input type="textarea" rows=4 cols=30 name="tagline" value="<?=$tagline?>"  required>
	</field>

	<field>
		<label>Model Description</label>
		<input type="textarea" rows=4 cols=30 name="model_description" value="<?=$model_description?>"  required>
	</field>

	<field>
		<label>Trim</label>
		<input type="text" name="trim" value="<?=$trim?>"  required>
	</field>

	<field>
		<label>Trim Description</label>
		<input type="textarea" rows=4 cols=30 name="trim_description" value="<?=$trim_description?>"  required>
	</field>

	<button type="submit" name="submitted">
		Submit Vehicle
	</button>


</form>