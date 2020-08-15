<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Memories-Intellify</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css\memories.css">
	<script src="js\index.js"></script>
</head>

<body onscroll="interchange()">
	<header>
		<nav>
			<ul>
			<li><a href="index.php">Home</a></li>

			<li><a href="" class="Active">Memories</a>
				<ul>

						<li><a href="familypics.php">Family</a></li>
						<li><a href="dramapics.php">Drama</a></li>
						<li><a href="cefpics.php">CEF</a></li>
						<li><a href="Intellifypics.php">Intellify</a></li>
						<li><a href="roadtrip.php">Road&nbsp;Trip</a></li>
						<li><a href="geotech.php">Geotech</a></li>
						<li><a href="kara.php">Karakoram</a></li>
						<li><a href="Misslenous.php">Misslenous</a></li>
				</ul>
			</li>


			<li><a href="talent.php">Talents</a></li>
			<li><a href="career.php">Career</a></li>
			<li><a href="Contact.php">Contact</a></li>
		</ul>
		</nav>

	</header>
		<!--video autoplay muted loop id="myVideo">
  		<source src="video\smoke.mp4" type="video/mp4">
		</video-->
	<main>
		<h1>Intellify Memories</h1>
		<?php
		$dirname = "Photos/Intellify/";
		$images = glob($dirname."*.{jpg,JPG,png,jpeg}", GLOB_BRACE);

		foreach($images as $image) {
    	echo '<img src="'.$image.'" /><br />';
		}
		?>
	</main>
	<footer>
		<p>Let's Connect</p>
		<a href="https://twitter.com/ce1160238" target="_blank"><i class="fa fa-twitter-square"></i></a>
		<a href="https://www.facebook.com/ankit.goyal.50364592"target="_blank"><i class="fa fa-facebook-official"></i></a>
		<a href="https://www.linkedin.com/in/ankit-goyal-a8384b142/"target="_blank"><i class="fa fa-linkedin-square"></i></a>
		<a href="https://www.instagram.com/goyalk253/?hl=en"target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>

	</footer>
</body>
</html>