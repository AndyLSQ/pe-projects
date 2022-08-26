	 <header>

		<?php
			include('templates/modules/site-header.php');
			include('templates/modules/page-header.php');
		?>
			
	</header>

	<main class="resume">
		<resume>
			<?php
			foreach($pageData['sections'] as $section) {
				if ($section['type'] == "sidebar") {
					include ( "templates/modules/$section[type].php" );
				}
			}
			?>


			
			<div class="child content">
				<?php
					foreach($pageData['sections'] as $section) {
						if ($section['type'] == "work-experience" or $section['type'] =="education" or $section['type'] =="text-block") {
							include ( "templates/modules/$section[type].php" );
						}
					}
				?>
			</div>
		
		</resume>
	</main>