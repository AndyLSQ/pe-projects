<education>


		<?php if ($section["header"]) { ?>
			<h2 class="loud-voice"><?=$section["header"]?></h2>
		<?php } ?>


		<?php foreach($section['content'] as $school) { ?>
			<school>

				<h2 class="attention-voice"><?=$school["institution"]?></h2>
				<h3><?=$school["program"]?> - <?=$school["end-date"]?></h3>
				<p></p>
				<ul>
					<?php foreach($school['content'] as $point) {?>
						<li><?=$point?></li>
					<?php } ?>
				</ul>

			<?php } ?>
			</school>



</education>