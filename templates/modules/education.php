<education>
	
	<?php if ($section["header"]) { ?>
		<h2 class="attention-voice"><?=$section["header"]?></h2>
	<?php } ?>

	<schools>
		<?php foreach($section['content'] as $school) { ?>
			<school>

				<h2 class="mid-voice"><?=$school["institution"]?></h2>
				<h3><?=$school["program"]?> - <?=$school["end-date"]?></h3>
				<p></p>
				<ul>
					<?php foreach($school['content'] as $point) {?>
						<li><?=$point?></li>
					<?php } ?>
				</ul>

			</school>
			<?php } ?>
		</schools>



</education>