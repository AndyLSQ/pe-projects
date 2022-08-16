<work-experience>


		<?php if ($section["header"]) { ?>
			<h2 class="loud-voice"><?=$section["header"]?></h2>
		<?php } ?>


		<?php foreach($section['content'] as $job) { ?>
			<job>

				<h2 class="attention-voice"><?=$job["company"]?></h2>
				<h3><?=$job["title"]?></h3>
				<p><?=$job["location"]?> | <?=$job["start-date"]?> - <?=$job["end-date"]?></p>
				<ul>
					<?php foreach($job['content'] as $point) {?>
						<li><?=$point?></li>
					<?php } ?>
				</ul>

			<?php } ?>
			</job>



</work-experience>