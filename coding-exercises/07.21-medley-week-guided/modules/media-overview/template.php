<media-overview>
	
<section class="writing">
	<header>
		<h2 class= "intro-voice" >Heading level 2</h2>
		<p class="calm-voice">This is an introductory paragraph here. This is an introductory paragraph here. This is an introductory paragraph here.</p>
	</header>

	<ol class="article-list">

		<?php foreach ([1, 2, 3, 4, 5, 6] as $article) {?> 
		<li class="article">
			<article class="card">
				<h1 class="attention-voice">Article heading 1</h1>
				<p class="calm-voice">A short blurb about the article will go here. A short blurb about the article will go here.</p>
			</article>
		</li>
		<?php }?>

	</ol>
</section>

<section class="image-grid">
	<?php foreach ([true, null, "three", 4] as $article) {?> 
	<picture>
		<img src="https://peprojects.dev/images/square.jpg" alt="$todo">
	</picture>
	<?php }?>
</section>

<media-overview>