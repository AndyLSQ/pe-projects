<!doctype html>

<html lang='en' class='special-magic no-js'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>TickTick | Simple Task Management</title>
		<meta name='description' content='Join millions of people to capture ideas, organize to-dos, and make the most of your life with TickTick.'>
		<meta property='og:image' content='https://www.droidviews.com/wp-content/uploads/2018/08/ticktick.jpg'>

		<!-- LINK favicon -->
		<link rel="icon" type="image/svg+xml" href="images/ticktick-favicon.png">

		<link rel='stylesheet' href='styles/site.css'>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

	</head>

	<body>
		<site-header>
		<inner-column>
			
			<?php include('modules/mast-head/template.php'); ?>

		</inner-column>	
		</site-header>

		<main>

			<section class='welcome' id='welcome'>
			<inner-column>

				<?php 

				$diptych_class = "welcome";
				$diptych_voice = "h1 class='loud-voice'";
				$diptych_heading = "Stay organized, stay&nbsp;creative";
				$diptych_body = "Join millions of people using TickTick to capture ideas, organize life, and do something creative&nbsp;everyday.";
				$diptych_image = "https://d3qg9zffrnl4ph.cloudfront.net/sites/res/home/common/header.png";

				include('modules/graphic-diptych/template.php'); ?>

			</inner-column>
			</section>


			<section class='sign-up review-banner'>
				<!-- TODO: MAKE THIS INTO AN ASSOCIATIVE ARRAY -->
			<inner-column>

				<?php 

				$cta_heading = "“The best to-do list app”";
				$cta_body = "“TickTick is the best to-do list app, thanks to its simple and structured project organization, seamless calendar integration, and ability to fit into many different workflows rather than forcing you to organize your work a certain&nbsp;way.”";
				$cta_img_id = "wirecutter";
				$cta_image = "https://sullivanfinancialplanning.com/wp-content/uploads/2019/05/Wirecutter.png";

				include('modules/call-to-action/template.php'); ?>

			</inner-column>
			</section>

			<section class='feature' id='feature1'>
			<inner-column>

				<?php 

					$diptych_class = "feature";
					$diptych_voice = "h2 class='attention-voice'";
					$diptych_heading = "Organize everything in life";
					$diptych_body = "Whether there is a work-related task or a personal goal, TickTick is here to help you manage all your&nbsp;to-dos.";
					$diptych_image = "https://d3qg9zffrnl4ph.cloudfront.net/sites/res/home/tick/feature/feature-1.png";

				include('modules/graphic-diptych/template.php'); ?>

			</inner-column>
			</section>

			<section class='feature' id='feature2'>
			<inner-column>

				<?php 

					$diptych_class = "feature";
					$diptych_heading = "Get reminded anytime, anywhere";
					$diptych_body = "Set a reminder to ease your mind from the worry of missing&nbsp;deadlines.";
					$diptych_image = "https://d3qg9zffrnl4ph.cloudfront.net/sites/res/home/tick/feature/feature-2.png";

				include('modules/graphic-diptych/template.php'); ?>

			</inner-column>
			</section>

			<section class='feature' id='feature3'>
			<inner-column>

				<?php 

					$diptych_class = "feature";
					$diptych_heading = "Flexible calendar views";
					$diptych_body = "With five different calendar views, you can check and handle your schedules in a more convenient&nbsp;way.";
					$diptych_image = "https://d3qg9zffrnl4ph.cloudfront.net/sites/res/home/tick/feature/feature-3.png";

				include('modules/graphic-diptych/template.php'); ?>

			</inner-column>
			</section>

			<section class='feature' id='feature4'>
			<inner-column>

				<?php 

					$diptych_class = "feature";
					$diptych_heading = "Collaborating with others";
					$diptych_body = "From family weekend plan to teamwork, share lists and assign tasks on the go. Stay productive&nbsp;together.";
					$diptych_image = "https://d3qg9zffrnl4ph.cloudfront.net/sites/res/home/tick/feature/feature-4.png";

				include('modules/graphic-diptych/template.php'); ?>

			</inner-column>
			</section>


			<section class='get-involved review-banner' id='get-involved'>
			<inner-column>

				<?php 
				$cta_heading = "Apple Editor's Choice";
				$cta_image = "images/editors-choice.svg";
				$cta_img_id = "aec";
				$cta_body = "“This all-in-one organizer is a personal assistant for your brain, one that eases the mental strain of All That Stuff To Do by elegantly organizing it, which lets you focus less on deadlines and more on the big&nbsp;picture.”";

				include('modules/call-to-action/template.php'); ?>


			</inner-column>
			</section>

			<section class='apps' id='apps'>
			<inner-column>

				<?php include('modules/articles-intro/template.php'); ?>

			</inner-column>
			</section>

			
			<section class='sign-up' id="sign-up">
			<inner-column>

				<?php 

				$cta_heading = "Ready to be more&nbsp;productive?";
				$cta_body = null;
				$cta_img_id = "sign-up";
				$cta_image = "https://d3qg9zffrnl4ph.cloudfront.net/sites/res/home/tick/feature/feature-more.png";

				include('modules/call-to-action/template.php'); ?>

			</inner-column>
			</section>

			

		</main>

		<footer>
		<inner-column>
			
			<?php include('modules/site-map/template.php'); ?>

		</inner-column>
		</footer>
	</body>

</html>