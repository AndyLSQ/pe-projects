
<header class='page-header'>
	<inner-column>
		<div class="header-content">
			<h1 class="loud-voice"><?=$pageData['intro']?></h1>

			<?php
				if ($pageId == "home") { ?>
					<div class="quiet-voice subheader">

							<?=$pageData['subheader']?>

					</div>

			<?php } ?>

			<?php
				if ($pageId == "resume") { ?>
					<h2 class="attention-voice subheader"><?=$pageData['subheader']?></h2>
			<?php } ?>

		</div>

	</inner-column>

</header>