<?php include('utilities.php'); ?>

<?php
	$page = currentPage();
	// echo "current page is " . $page;

	$path = "data/pages/" . $page . ".json";

	// echo $path;

	$json = file_get_contents($path);
	$database = json_decode($json, true);
	// print_r("this is the" . $database['title']);
	$sections = $database['sections'];
	// print_r($sections)
?>
<header>
	
	<p>?<?=queryString();?></p>


<?php include('partials/site-menu.php');?>

</header>

<?php getPageTemplate( currentPage() ); ?>

<section>
	<h1><?=$database['title']?></h1>
	<p><?=$database['intro']?></p>
	
	<?php
		foreach ($sections as $section) {
			echo ("<h2>" . $section['heading'] . "</h2>");
			echo ("<p>" . $section['content'] . "</p>");
		}


	?>
</section>