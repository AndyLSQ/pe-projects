
<?php
	$heading = $article['heading'];
	$description = $article['description'];
	$thumbnail = $article['thumbnail'];
	$link = $article['link'];
?>

<article class='article-card' id="platforms">
	
	<text-content>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>
	</text-content>

	<picture-contain>
		<picture>
			<img src='<?=$thumbnail?>' alt='$todo'>
		</picture>
	</picture-contain>


		<a href='<?=$link?>'>Download now</a>
	
</article>
