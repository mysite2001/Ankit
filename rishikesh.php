<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Memories-Drama</title>
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
						<li><a href="geoenviornment.php">Geoenviornment</a></li>
						<li><a href="rishikesh.php">Rishikesh&nbsp;Trip</a></li>
						<li><a href="kara.php">Karakoram</a></li>
				</ul>
			</li>

			<li><a href="">Magazine</a>
			<ul>
				<li><a href="yearbook.php">Yearbook</a></li>
				<li><a href="cefmagazine.php">CEF&nbsp;Magazine</a></li>
			</ul></li>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="talent.php">Talents</a></li>
			<li><a href="career.php">Career</a></li>
		</ul>
		</nav>

	</header>
		<!--video autoplay muted loop id="myVideo">
  		<source src="video\smoke.mp4" type="video/mp4">
		</video-->
	<main>
		<h1>Rishikesh Trip</h1>
		<?php
		$dirname = "Photos/Rishikesh/";
		$images = glob($dirname."*.jpg");

		foreach($images as $image) {
    	echo '<img src="'.$image.'" /><br />';
		}
		?>
	</main>
	<footer>
		<p>Contact info</p>
		<i class="fa fa-twitter-square"><a href="https://twitter.com/ce1160238"></a></i>
		<i class="fa fa-facebook-official"><a href="https://www.facebook.com/ankit.goyal.50364592"></a></i>
		<i class="fa fa-linkedin-square"><a href="https://www.linkedin.com/in/ankit-goyal-a8384b142/"></a></i>


	</footer>
</body>
</html>