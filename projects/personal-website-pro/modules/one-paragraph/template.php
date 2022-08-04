<?php
	$content = 
		isset($section["content"]) 
		? $section["content"] 
		: "This is one paragraph.";
?>


<one-paragraph class='calm-voice'>
	<p><?=$content?></p>
</one-paragraph>
