<?php



	/* TESTING */

	function showErrors() {
		error_reporting(E_ALL);
		ini_set('display_errors', '1');
	}
	showErrors();



	/* UTILITIES */
	function format($variable) {
		echo "<pre>";
			echo "<code>";
				echo print_r( $variable );
			echo "</code>";
		echo "</pre>";
	}

	function showUrl() {
		// split it by the "?" - into array items
		$parts = explode('?', $_SERVER["REQUEST_URI"] );
		// get the last array item
		return $parts[1];
	}

	function showDeleteId() {
		$delete = showUrl();
		$deleteId = explode('=', showUrl())[1];
		// print_r($deleteId);
		return $deleteId;

	}



	// INITIAL VALUES

	$titleInput = ""; // reset the input
	$artistInput = "";
	$albumInput = "";


	// ACTIONS

	function initializeDatabase() {
		// create a data structure you want to use as your base
		$database = [
			"tracklist" => []
		];
		// encode that to json
		$json = json_encode($database);

		// save it to the file
		file_put_contents("tracklist.json", $json);


		// return the default datastructure (PHP-style)
		return $database;

	}

	// print_r(initializeDatabase());

	function getDatabase() {
		// check if database file exists and has content
		if ( file_get_contents("tracklist.json") ) {
			// echo "Database initialized";
		
		// if it does
			// get the content
			$json = file_get_contents("tracklist.json");
			// decode it
			$database = json_decode($json, true);
			// return the database
			return $database;
		// if it doesn't 
		}
		else{
			// echo "Database not intialized";
			// initialize the database
			$database = initializeDatabase();
			// and return it's data (PHP-style)
			return $database;
		}
	}
	// getDatabase(); //this will see if theres a database (and create one if not, then return the database)


	function createRecord($input) {
		// create a unique id
		$id = uniqid("a");
		// get the data so you can add to it
		$database = getDatabase();

		// put the input into the database (based on the structure you chose)
	
		$database['tracklist'][$id] = [
			"title" => $input['title'],
			"artist" => $input['artist'],
			"album" => $input['album']
		];

		// save the updated database
		saveData($database);
	}

	function saveData($data) {
		// convert it to json
		$json = json_encode($data);
		// save it
		file_put_contents("tracklist.json" ,$json);
	}

	// createRecord([
	// 		"title" => "this is a title",
	// 		"artist" => "nsync",
	// 		"album" => "the album"
	// ]);

	function deleteRecordById($id) {
		// get database
		$database = getDatabase();

		// unset (delete) the property (id) in that database
		unset ($database['tracklist'][$id]);

		// save the database
		saveData($database);

	}

	deleteRecordById("a62d1dfd6d8f08");

	// **bonus**
	// clearDatabase()
	// updateRecordById($id)



	// FIGURING THINGS OUT

	// you should need a form to see if your functions are working
	// keep it simple
	// createRecord("Ivy");
	// createRecord("Derek");



	// RENDER THINGS

	function renderRecord($id, $record) {
		$title = $record['title'];
		$artist = $record['artist'];
		$album = $record['album'];
		
		echo "
			<li>
				<h2>Title: $title</h2>
				<p>Artist: $artist</p>
				<p>Album: $album</p>

				<a href='?delete=$id'>delete</a>
			</li>
		";
	}

	function renderRecords($records) {
		// render the records
		$titles = array_reverse( $records["tracklist"] );
		foreach ($titles as $id => $record) {
			// print_r("The ID is: $id");
			// print_r("The song info is: ");
			// print_r($record);
			renderRecord($id, $record);
		}
	}

	function showError($error) {
		$message = "Please add a name.";
		if ($error) {
			return $message;
		}
	}
	


	// HANDLE INPUT

	$missingText = null;

	// if the user added a name
	if ( isset($_POST["submitted"]) ) {
		// if they added text
		if ( $_POST["title"] && strlen($_POST["title"]) > 0 ) {
			// create the record
			createRecord($_POST);
		} else {
			// if not, signify there's an error
		}
	}

	// if the user deleted something
	if ( isset( $_GET["delete"] ) ) {
		// delete the record
		$id = showDeleteId();
		//echo "id to be deleted is: $id";
		deleteRecordById($id);

	}
	
?>



<!-- TEMPLATE -->

<a href="?"> <!-- clears it -->
	<h1>Single-file CRUD exercise</h1>
</a>

<h2>Adding songs to a list</h2>


<form method='POST'>

	<field>
		<label>Title <?=showError($missingText)?></label>
		<input name='title' value='<?=$titleInput?>'>
	</field>

	<field>
		<label>Artist <?=showError($missingText)?></label>
		<input name='artist' value='<?=$artistInput?>'>
	</field>

	<field>
		<label>Album <?=showError($missingText)?></label>
		<input name='album' value='<?=$albumInput?>'>
	</field>

	<footer>
		<button type='submit' name='submitted'>
			Enter
		</button>
	</footer>

</form>


<ul>
	<?=renderRecords( getDatabase() ); ?>
</ul>










<!-- just to keep it out of the way... -->
<style>
	field, label, input {
		display: block;
	}
	input {
		padding: 0.5em;
		width: 100%;
		max-width: 300px;
	}
	button {
		margin-top: 10px;
	}
	ol {
		list-style: none;
	}
</style>