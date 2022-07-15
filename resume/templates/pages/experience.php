<?php

$json = file_get_contents("experience.json");
// print_r($json);

$experience_data = json_decode($json, true);
// print_r($experience_data);

$experience = $experience_data["experience"];
// print_r($experience);

?>


<section class="page-section">
<inner-column class="experience">

	<h2> Professional Experience </h2>

	<ol class="experience-list">
			<?php
				foreach ($experience as $job) {
					include ("templates/components/job-card.php");
				}
			?>
	</ol>


</inner-column>
</section>