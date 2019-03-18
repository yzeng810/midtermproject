<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "yzeng810@outlook.com"; // use YOUR email for both lines 12 and 13
$emailTo = "yzeng810@outlook.com";
$subject = "World's Best Resorts Newsletter Sign Up";

// for the following lines of code, grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY...

// these are from the text INPUT fields...
$firstname = Trim(stripslashes($_POST['firstname'])); 
$lastname = Trim(stripslashes($_POST['lastname'])); 
$email= Trim(stripslashes($_POST['email'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
$type1 = $_POST['type1'];  
$type2 = $_POST['type2'];
$type3 = $_POST['type3'];
$type4 = $_POST['type4'];
$type5 = $_POST['type5'];
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$time = $_POST['time']; 
// notice: no matter how many radio buttons, there's only one answer

// this is from the TEXTAREA field...
$opinions = Trim(stripslashes($_POST['opinions'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "First Name: \n"; //...a label
$body .= $firstname;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Email: \n"; //...a label
$body .= $email;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Last Name: \n"; //...a label
$body .= $lastname;	  //...a variable
$body .= "\n\n";			  //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
$body .= "What type of newsletter do you prefer to recieve: \n"; 	 	// a heading for your checkbox section

if (isset($type1)) {		// a checkbox variable
	$body .= $type1. "\n";	// the same checkbox variable
}
if (isset($type2)) {		// a checkbox variable
	$body .= $type2. "\n";	// the same checkbox variable
}
if (isset($type3)) {		// a checkbox variable
	$body .= $type3. "\n";	// the same checkbox variable
}
if (isset($type4)) {		// a checkbox variable
	$body .= $type4. "\n";	// the same checkbox variable
}
if (isset($type5)) {		// a checkbox variable
	$body .= $type5. "\n";	// the same checkbox variable
}
$body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
$body .= "What time of a day do you prefer to recieve newsletters: \n";		// a heading for your radio button section
$body .= $time;			// the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "Anything you want to let us know: \n";		// a heading for your text area
$body .= $opinions;			// the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML 
	 webpage with a customized message 
	 for the user
	 ********************************** -->

<?php $title = 'Thank you for subscription'; ?>
<?php $style = 'css/thankyoup.css'; ?>
<?php $top = 'css/top.css'; ?>
<?php $css = 'sss/sss.css'; ?>
<?php $h1 = 'World\'s Best Resorts'; ?>
<?php include "inc/top.php"; ?>
<?php include "inc/nav.php"; ?>

	<main class="full-width">
		<h2>Thank you for subscription, <?php echo $firstname; ?> !</h2>
  		<p>Go back to <a href="contact.php">the sign up page</a>.</p>
	</main>
</div><!--.container-->

<?php include "inc/bottom.php"; ?>

<?php include "inc/scripts.inc"; ?>

</body>

</html>