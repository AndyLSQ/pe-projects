<home>
	<?php include('templates/modules/page-header.php');?>

	<inner-column class="home">

		<?php
			
			foreach ($pageData["sections"] as $section) {

				if ( $section["type"] == "paragraph"){
					include ('templates/partials/paragraph.php');
				}

			}

		?>

		<nav>
			<a href="?page=projects" class="button1">See my work</a>
			<a href="?page=contact" class="button1">Get in touch</a>
		</nav>

	</inner-column>
</home>