<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ankit Goyal-Home page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css\index.css">
	<!--script src="js\index.js"></script-->
</head>

<body onscroll="interchange()">
	<header>
		<nav>
			<ul>
			<li><a href="index.php" class="Active">Home</a></li>

			<li><a href="">Memories</a>
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

		

		<div id="onmobile">
			<div class="slideshow-container">

		<?php
		$dirname = "Photos/me/";
		$images = glob($dirname."*.{jpg,JPG,png,jpeg}", GLOB_BRACE);
		$n=count($images);
		$i=0;

		for($i=0;$i<$n;$i++) {
			echo'<div class="mySlides fade">';
  echo'<div class="numbertext">('.($i+1).') /'. $n.'</div>';
  echo'<img src="'.$images[$i].'" style="width:100%">';
  
echo'</div>';
		}
		?>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
	<?php
	$dirname = "Photos/me/";
		$images = glob($dirname."*.{jpg,JPG,png,jpeg}", GLOB_BRACE);
		$n=count($images);
		$i=0;
	for($i=0;$i<$n;$i++) {
  echo'<span class="dot" onclick="currentSlide('.$i.')"></span> ';
}
?>
</div>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
		</div>

		<div id="intro">
		<img src="Photos\me.jpg" id="me" alt="Ankit Goyal"/>
		<p id="name">Ankit Goyal</p>
		</div>

		<div id="myDiv">
		<span class="start">&#10077;</span>
		<p class="quote">A single mistake of doctor takes only one life but a single mistake of a civil engineer can destroy many villages.</p>
		<span class="last">&#10078;</span>
		<div id="otherquote">
		<span class="start">&#10077;</span>
		<p class="quote">Life is beautiful when we have love of our family.</p>
		<span class="last">&#10078;</span>
		</div>
		</div>
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
 
