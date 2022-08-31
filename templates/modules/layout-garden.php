<!-- Test layout garden HIII -->

<?php

//load layouts data
$json = file_get_contents('data/layouts-data.json');
$layoutData = json_decode($json, true);
// print_r($layoutData);
?>

<layout-card>
	<?php
	// loop thru each layout in the data and display a card for it
	foreach ($layoutData as $groups) {
		$groupName = $groups['group'];
		$layouts = $groups['layouts'];

	?>
		<!-- Insert any group level elements here -->
					
		<?php
			foreach ($layouts as $layout) { 
				$layoutId = $layout["id"];
				$layoutHeader = $layout["header"];
				?>
			
			<a href="?page=layout&id=<?=$layoutId?>">
				<p><?=$layoutHeader?></p>
			</a>
			
		</ul>

	 <?php } } 

	 ?>
</layout-card>