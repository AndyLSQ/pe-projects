
<?php
	$resume = getData('resume');
?>

<resume-list>
	<ul>
	<?php foreach($resume as $job) { ?>
		<li>
			<resume-item>
				<h2>title...</h2>
			</resume-item>
		</li>
	<?php } ?>
	</ul>
</resume-list>
