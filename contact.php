<!doctype html>
<html>
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CREZO - Contact</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
    	<link href="styles.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link rel="icon" href="img/logo/favicon.ico">
    </head>

<body>
<!--Header and Navigation Area-->
	<?php  
		include "nav.php";
	?>
	
	<section class="contactpageintro">	
		<div class="contactintro"> 
			<h1>Contact Us</h1>
			<p>Feel free to contact us!</p>
		</div>
	</section>
	<main class="maincontact">
		<section class="email">
			<img src="img/icons/email-icon.png" alt="emailicon" height="75" width="100">		
			<h2>Write us an email</h2>
			<p>crezo@crezo.com</p>
		</section>
		<section class="phone">
			<img src="img/icons/phone-icon(1).png" alt="phoneicon" height="100" width="125">
			<h2>Call us</h2>
			<p>00 00 00 00</p>
		</section>
	</main>
<!--Footer Start-->
	<?php
	include "footer.php";
	?>

	<script src="js/nav.js"></script>

</body>
</html>