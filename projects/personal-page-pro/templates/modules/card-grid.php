<?php
	//Fetch data
	$dataSource = $section['data-source'];
	// print_r($dataSource);

	$json = file_get_contents($dataSource);
	$cardsData = json_decode($json, true);
	// print_r($cardsData);

?>

<card-grid>

	<h2><?=$section['header']?></h2>
	
	<ul class='card-list'>
		<?php foreach ($cardsData as $card) { ?>
			<li class='card'>
				<a class="link" href='?page=card&id=<?=$card["id"]?>'>
					<div class="card">
						<picture>
							<img src="<?=$card["thumbnail"];?>" alt="">
						</picture>
						<div class="card-text">
							<h2 class="attention-voice card-title"><?=$card["name"];?></h2>
							<p><?=$card["teaser"];?></p>
						</div>
					</div>
				</a>
			</li>
		<?php } ?>
	</ul>


</card-grid>