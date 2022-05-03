
<?php include('site-header.php'); ?>


<!-- main class="page-content" -->

	

<header class='page-header'>
	
	<picture class="circle1">
		<img src="https://peprojects.dev/images/circle.png" alt="circle">
	</picture>

	<picture class="circle2">
		<img src="https://peprojects.dev/images/circle.png" alt="circle" width="100"> <!-- this is a presentation attribute and it wont override the css- use this as a default so the image doesnt blow up if the css errors out -->
	</picture>

	<div class="inner-column">
		<div class="inner-column-content">
			<picture class="page-header-pic">
				<img src="https://peprojects.dev/images/landscape.jpg" alt="landscape image">
			</picture>
			<div class="page-header-content">
				<h1>Heading level&nbsp;1</h1>
				<a href="#">click here</a>	
			</div>
		</div>

		<shifter></shifter>
		
	</div>
</header>

<section class="sec1">
	<div class="inner-column">

		<h2>Content Section 1</h2>
		<div class="cards">
			<div class="card">
				<a href="#" class="card-pics">
						<img src="https://peprojects.dev/images/landscape.jpg" alt="landscape image">
				</a>
				<div class="card-copy">
					<h3>Card 1</h3>
				</div>
			</div>

			<div class="card">
				<a href="#" class="card-pics">
						<img src="https://peprojects.dev/images/landscape.jpg" alt="landscape image">
				</a>
				<div class="card-copy">
					<h3>Card 2</h3>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- /main class="page-content" -->

<?php include('site-footer.php'); ?>