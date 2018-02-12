<!DOCTYPE html>
<html lang="en">
	<?php include "inc/head.inc"; ?>

	<body>
	<div class="container">
		
		<header>
			<h1>Team Phoenix - Assignment 2</h1>
		</header>

		<?php include "inc/nav.inc"; ?>
				
		<img class="mySlides" src="images/lfusilli.jpg" alt="lfusilli" width="300">
		<img class="mySlides" src="images/ghernan6.jpg" alt="ghernan6" width="300">
		<img class="mySlides" src="images/cwright.jpg" alt="cwright" width="300">
		
		<button class="w3-button" onclick="plusDivs(-1)">&#10094; Prev</button>
		<button class="w3-button" onclick="plusDivs(1)">Next &#10095;</button>

		<article>
				<p>Welcome to the homepage of assignment 02 for the Phoenix team. We are pleased to introduce the team members below!</p>

			<h2>Louis Fusilli – Information Architect</h2>
			<p>Louis is a senior at the UR, ready to graduate with a business degree. Although he had always planned on majoring in business, he decided after a semester in Italy to pursue a minor in Italian, and also a cluster in computer science due to his interest in web design. Louis is proud to be a Rochester native, coming from nearby Penfield. He also has a younger brother and sister.</p>

			<h2>German Hernandez – Designer</h2>
			<p>German originally entered the University of Rochester as an engineering major, due to his talents in mathematics and art. I took PSY 101 my first semester, as he was very interested in pursuing psychology as a minor. His mother is Colombian and his father is Dominican. Living in a diverse neighborhood of the most diverse borough of New York City, he felt far from alienated for being a child of immigrant parents and for having parents who struggled with English.</p>

			<h2>Charlotte Wright – Coder</h2>
			<p>Charlotte is a Computer Science major and senior. She is the president of the University of Rochester Cinema Group. They show free movies every week and lots of other events. Check out the Cinema Group’s website: <a href="http://sa.rochester.edu/urcg/index">URCG</a>. Charlotte's from lower NY, an hour from NYC. She is the oldest of 4 but also the shortest.</p>

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
