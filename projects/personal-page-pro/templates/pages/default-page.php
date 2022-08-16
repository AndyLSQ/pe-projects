	 <header>

		<?php
			include('templates/modules/site-header.php');
			include('templates/modules/page-header.php');
		?>
			
	</header>

	<main>
		<inner-column>
			<?php
			if (isset($pageData["sections"])) {
				foreach ($pageData["sections"] as $section) {
					include ( "templates/modules/$section[type].php" );
				}
			}
			?>
		</inner-column>

	</main>