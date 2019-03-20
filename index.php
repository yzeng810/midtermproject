<?php $title = 'World\'s Best Resorts'; ?>
<?php $style = 'css/home.css'; ?>
<?php $top = 'css/top.css'; ?>
<?php $css = 'sss/sss.css'; ?>
<?php $h1 = 'World\'s Best Resorts'; ?>
<?php include "inc/top.php"; ?>	
<?php include "inc/nav.php"; ?>

<main>
	
	<section class="slideshow-container">
		<section class="mySlides fade">
			<img src="images/discover1.jpg" alt="discover1">
			<section class="text">DISCOVER YOUR NEXT DESTINATION</section>
		</section>
		<section class="mySlides fade">
			<img src="images/discover2.jpg" alt="sea">
			<section class="text">THE SEA BREEZE</section>
		</section>
		<section class="mySlides fade">
			<img src="images/cultural.jpg" alt="cultural">
			<section class="text">CULTURAL INSPIRATION</section>
		</section>
		<section class="mySlides fade">
			<img src="images/jungle.jpg" alt="jungle">
			<section class="text">JUNGLE ADVENTURE</section>
		</section>
		<section class="mySlides fade">
			<img src="images/winter.jpg" alt="winter">
			<section class="text">WINTER WONDERLAND</section>
		</section>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</section>
	<br>

	<section style="text-align:center" class="dottogether">
 		<span class="dot" onclick="currentSlide(1)"></span> 
  		<span class="dot" onclick="currentSlide(2)"></span> 
  		<span class="dot" onclick="currentSlide(3)"></span> 
  		<span class="dot" onclick="currentSlide(4)"></span>
  		<span class="dot" onclick="currentSlide(5)"></span>
	</section>

	<section class="excerpt">
		
		<section class="resort1">
			<img src="images/hotel1.jpg" alt="hotel1">
			<section class="innerexcerpt">
			<h2>Spring Escape to Morroco</h2>
			<p>Undiscover Marrakech, experience the wonder of Marrakech, the red city, from Amenjena peaceful garden retreat. Within easy reach of the Unesco-protected medina of Marrakech, Amanjena offers the perfect vantage point from which to explore all the city has to offer. Alone or with a guide, visit the museums, and the Place Jemaa El Fna, one of Morocco’s busiest squares and bustling day and night with entertainers and street food.</p>
			<sub>AMANJENA</sub><br>
			<sub>Marrakech, Morroco</sub><br>
			<section class="discoverlink">
				<a href="Amanjena.php">Discover more</a>
			</section>
			</section>
		</section>

		<section class="resort2">
			<img src="images/hotel2.jpg" alt="hotel2">
			<section class="innerexcerpt">
			<h2>Cultural Beijing</h2>
			<p>A region rich in culture, history and natural beauty, China is home to ancient civilisations and a plethora of UNESCO World Heritage Sites, and offers the intriguing juxtaposition of contemporary urban metropolises with ancient monuments. Enjoy a cultural itinerary of guided tours and Chinese traditions, including a tea ceremony and a picnic at the Summer Palace, with a stay of three nights or more.</p>
			<sub>AMAN SUMMER PALACE</sub><br>
			<sub>Beijing, China</sub><br>
			<section class="discoverlink">
				<a href="AmanSummerPalace.php">Discover more</a>
			</section>
			</section>
		</section>

		<section class="signupbutton">
			<a href="Amandari.php">Discover Your Next Destination Now</a>
		</section>
	
	</section>

</main>

</div>

<?php include "inc/bottom.php"; ?>

<?php include "inc/js.php"; ?>

<script src="sss/sss.js"></script>
<script>
$('.slider').sss();
</script>

</body>
</html>
