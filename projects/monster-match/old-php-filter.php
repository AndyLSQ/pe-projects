<!-- TYPE NAV -->
		<nav class="type">
			<a href="?page=menu">Full Menu</a>
			<a href="?page=menu&type=hamburger">Burgers</a>
			<a href="?page=menu&type=hot-dog">Dogs</a>
		</nav>

		<!-- TYPE FILTER -->
		<?php
			// initialize $type variable and $filtered array
			$type = null;
			$filtered = [];

			//check if type is specified
			if ( isset($_GET['type']) ) {
				$type = $_GET['type'];
			}
			//if it is, the $type variable is set so type will be true...
			if ($type) {
				//run through all menu items
				foreach ($menu_data as $dish) {
					//if the item type matches the $type set
					if ($dish['type'] == $type) {
						//add the item to the $filtered array
						array_push($filtered, $dish);
					}
				}
				// print_r($filtered);

				// set the main data array to equal the filtered array 
				$menu_data = $filtered;
				//then the rest of the page can process as normal
			}


		?>