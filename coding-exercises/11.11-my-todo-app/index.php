<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Task App</title>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<main>
		<inner-column>
			<h1>My Task App</h1>

			<form class="main-form">
				<label for="a">Add a list</label>
				<input id="a" type="text">
				<button class="add-list">Add a list</button>
			</form>

			<outlet>
			</outlet>			

		</inner-column>
	</main>

	<script src="js/main.js" type="module"></script>

</body>
</html>


			<!-- 	<input-field class="list">
					<label for="in-app">Add a list</label>
					<input type="text" autofocus="autofocus" id="in-app">
					<button class="add-list">Add List</button>
				</input-field> -->