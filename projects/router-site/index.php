<?php include('functions.php'); ?>


<header class="site-header">
	<p>?<?=queryString();?></p>
	<?php include('partials/site-menu.php');?>
		
</header>


<?php renderPageTemplate( currentPage() ); ?>
