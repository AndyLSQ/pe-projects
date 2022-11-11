<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Task App</title>
</head>

<body>
	<main>
		<inner-column>
			<h1>My Task App</h1>
			<form>
				<field>
					<label for="">Add a task</label>
					<input type="text" autofocus="autofocus">
				<field>

				<button>Add task</button>
			<!-- 	<input-field class="list">
					<label for="in-app">Add a list</label>
					<input type="text" autofocus="autofocus" id="in-app">
					<button class="add-list">Add List</button>
				</input-field> -->
			</form>

			<outlet>
				<ul>
					
				</ul>
			</outlet>			

		</inner-column>
	</main>

	<script src="js/app.js" type="module"></script>

</body>
</html>