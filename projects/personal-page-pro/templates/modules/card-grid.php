<?php
	//Fetch data
	$dataSource = $section['data-source'];
	$cardType = $section['card-type'];
	// print_r($dataSource);

	$json = file_get_contents($dataSource);
	$cardsData = json_decode($json, true);
	// print_r($cardsData);

?>

<section class="card-grid">

	<?php
	//Only include header element if there's header content
	if ($section["header"]) { ?>
		<h2 class="attention-voice"><?=$section["header"]?></h2>
	<?php } ?>

	
	<ul class='cards'>
		<?php foreach ($cardsData as $card) { ?>
			<li>
				<a class="link" href='?page=<?=$cardType?>&id=<?=$card["id"]?>'>
					<div class="card">

						<div class="card-text">
							<h3 class="attention-voice card-title"><?=$card["header"];?></h3>
							<p><?=$card["subheader"];?></p>
						</div>

						<picture>
								<img src="<?=$card["thumbnail"];?>" alt="">

						</picture>

						

					</div>
					
				</a>
			</li>
		<?php } ?>
	</ul>


</section>