<?php

$class = "";

// Class is applied if specified. Otherwise blank.
if ($section["class"]) {
		$class = $section["class"];
} 

?>



<<?=$section["element"]?> class="<?=$class?>">