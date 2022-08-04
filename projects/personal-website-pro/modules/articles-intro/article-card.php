
<?php
	// you could simplify the $variables up here if you want....
	// example
	// $thumbnail = $article["thumbnail"];
	// it may or may not - be more readable

	$title = $article["title"];
	$date = $article["date"];
	$publication = $article["publication"];
	$teaser = $article["teaser"];
	$url = $article["url"];
	$target = "_blank";
?>


<article-card>

	<h2 class='attention-voice'><?=$title?></h2>

	<p class='calm-voice'><?=$date?> | <?=$publication?></p>

	<p class='calm-voice'><?=$teaser?></p>

	<a class='text-link' href='<?=$url?>' target='<?=$target?>'>
		<span>Read more</span>
	</a>

</article-card>
