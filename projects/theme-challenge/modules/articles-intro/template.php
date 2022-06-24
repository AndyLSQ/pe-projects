
<?php include ('data/articles.php'); ?>

<articles-intro>
	<header>
		<h2 class='attention-voice'>Work anywhere</h2>

		<p>TickTick is available on all major platforms, so you can get things done wherever you are.</p>
	</header>

	<article-grid>
		<ul class='article-list'>

			<?php foreach ($articles as $article) { ?>
				<li class='article'>
					<?php include('modules/article-card/template.php'); ?>
				</li>
			<?php } ?>

		</ul>
	</article-grid>
</articles-intro>
