<?php include('templates/modules/page-header.php');?>


<?php
	
	foreach ($pageData["sections"] as $section) {

		if ( $section["type"] == "paragraph"){
			include ('templates/partials/paragraph.php');
		}

	}

?>

<a href="?page=projects">See my work</a>
<a href="?page=projects">Get in touch</a>