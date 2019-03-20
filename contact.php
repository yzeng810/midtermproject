<?php $title = 'Sign Up for Newsletter'; ?>
<?php $style = 'css/form.css'; ?>
<?php $top = 'css/top.css'; ?>
<?php $css = 'sss/sss.css'; ?>
<?php $h1 = 'World\'s Best Resorts'; ?>
<?php include "inc/top.php"; ?>
<?php include "inc/nav.php"; ?>

	<form action="form-processor.php" class="full-width" method="post">
		<h2 class="title">Sign up for newsletters</h2>
			<label for="firstname">First Name: </label><br>
			<input type="text" name="firstname" id="firstname"><br>
			<label for="lastname">Last Name: </label><br>
			<input type="text" name="lastname" id="lastname"><br>
			<label for="email">Your Email:</label><br>
			<input type="text" name="email" id="email"><br>
			<br>
			<fieldset>
				<legend>Preferences</legend>
				<section class="innerbox1">
				<h2>What types of newsletter do you prefer to recieve</h2>
				<input type="checkbox" name="type1" id="newaddin" value="Newly Added Resorts"><label for="newaddin"> Newly Added Resorts</label><br> 
				<input type="checkbox" name="type2" id="seasonal" value="Seasonal Recommendations"><label for="seasonal"> Seasonal Recommendations</label><br>
				<input type="checkbox" name="type3" id="promotions" value="Exclusive Pacakges and Promotions"><label for="promotions"> Exclusive Packages and Promotions</label><br>
				<input type="checkbox" name="type4" id="events" value="Speical Events"><label for="events"> Speical Events</label><br>
				<input type="checkbox" name="type5" id="news" value="General News"><label for="news"> General News</label><br>
				</section>
				<section class="innerbox2">
				<h2>What time of a day do you prefer to recieve newsletters</h2>
				<input type="radio" name="time" id="earlymorning" value="Early Morning"><label for="earlymorning"> Early Morning</label><br>
				<input type="radio" name="time" id="morning" value="Morning"><label for="morning"> Morning</label><br>
				<input type="radio" name="time" id="afternoon" value="Afternoon"><label for="afternoon"> Afternoon</label><br>
				<input type="radio" name="time" id="evening" value="Evening"><label for="evening"> Evening</label><br>
				</section>
			</fieldset>
			<br>
			<section class="opinions">
			<label for="opinions" class="opinions1">Anything you want to let us know</label><br>
			</section>
			<textarea name="opinions" id="opinions" placeholder="Your voice matters"></textarea>
			<br>
			<input type="submit" value="submit" class="submit">
	</form>

</div>

<?php include "inc/bottom.php"; ?>

<?php include "inc/scripts.inc"; ?>

</body>

</html>