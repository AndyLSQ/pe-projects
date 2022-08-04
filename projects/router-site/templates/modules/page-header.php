
<header class='page-header'>

	<h1 class="loud-voice"><?=$pageData['intro']?></h1>

	<?php
		if ($pageId == "home") { ?>
			<p class="quiet-voice"><?=$pageData['subheader']?></p>
	<?php } ?>

	<?php
		if ($pageId == "resume") { ?>
			<h2 class="quiet-voice"><?=$pageData['subheader']?></h2>
	<?php } ?>

</header>