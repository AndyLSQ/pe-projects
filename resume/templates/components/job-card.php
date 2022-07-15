<?php
	$descriptions = $job['description'];
	$company = $job['company'];
	$title = $job['title'];

	// ...
?>




<div class="card">

	<h2><?=$company?></h2>
	<h3><?=$title?></h3>
	<p>location | start date - end date</p>
	<ul>
		<?php foreach ($descriptions as $description) {
			echo "<li>" . $description . "</li>";
		}

		?>
	</ul>

</div>