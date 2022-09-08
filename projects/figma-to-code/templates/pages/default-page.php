<header>

	<?php
		if ( isset($pageData["header"]) ) {
			include ( "templates/modules/headers/$pageData[header].php");
		}
	?>

</header>


<main>

	<?php
		if ( isset($pageData["sections"]) ) {
			foreach ($pageData["sections"] as $section) {
				echo "---section---";
				//SEPARATE FILE FOR EACH SECTION 
				// include ("templates/modules/sections/$section[module].php");

				//OR PULL COMPONENTS IN RIGHT HERE (if the setup is the same for all sections)
				?>
				<section class="<?=$section['module']?>">
					<inner-column class="<?=$section['variant']?>">

					<?php
						foreach ($section['components'] as $component) {
							include("templates/modules/components/$component[type].php");
						} ?>

					</inner-column>
				</section>



	<?php }
	} ?>
	
</main>


<footer>

	<?php
		if ( isset($pageData["footer"]) ) {
				include ( "templates/modules/footers/$pageData[footer].php");
		}
	?>
	
</footer>