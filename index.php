<!DOCTYPE html>
<html>
	<?php include "inc/head.inc"; ?>

	<body>
	<div class="container">
		
		<header>
			<h1>Assignment02 - Phoenix</h1>
		</header>

		<?php include "inc/nav.inc"; ?>
		
		<img class="mySlides" src="images/cwright.jpg" width="300">
		<img class="mySlides" src="images/ghernan6.jpg" width="300">
		<img class="mySlides" src="images/lfusilli.jpg" width="300">
		
		<button class="w3-button" onclick="plusDivs(-1)">&#10094; Prev</button>
		<button class="w3-button" onclick="plusDivs(1)">Next &#10095;</button>

		<article>
				<p>Welcome to the homepage of assignment 02 for the Phoenix team. We are pleased to introduce the team members below!</p>

			<h2>Louis Fusilli – Information Architect</h2>

			<h2>German Hernandez – Designer</h2>

			<h2>Charlotte Wright – Coder</h2>

		</article>

	</div><!--container-->
	
	<?php include "inc/scripts.inc"; ?>
	
	<script>
	var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
		showDivs(slideIndex += n);
	}
	
	function currentDiv(n) {
		showDivs(slideIndex = n);
	}

	function showDivs(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		if (n > x.length) {slideIndex = 1} 
		if (n < 1) {slideIndex = x.length} ;
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none"; 
		}
		x[slideIndex-1].style.display = "block"; 
	}

	</script>
	</body>
</html>
