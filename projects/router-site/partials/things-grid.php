
<section>

<things-grid>
	
	<h2><?=$section["heading"]?></h2>

	<ul>
		
	<?php foreach ( $section["items"] as $item) { ?>

		<li>
			<h3><?=$item["title"]?></h3>
			<p><?=$item["copy"]?></p>
		</li>

	<?php } ?>

	</ul>

</things-grid>

</section>