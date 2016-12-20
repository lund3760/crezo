<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crezo</title>
	<link href="styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="icon" href="img/logo/favicon.ico">
</head>

<body>
<!--Header Section with Navigation-->
	<header class="mainheader" role="banner">
<!--Navigation with 5 menu items-->
	
		<nav role="navigation" class="mainnav">
			<ul class="topnav" id="myTopnav">
				<li><a href="index.php" title="Home">HOME</a></li>
				<li><a href="students.php" title="Students">STUDENTS</a></li>
				<li><a href="blog.php" title="Blog">BLOG</a></li>
				<li><a href="apply.php" title="Apply">APPLY</a></li>
				<li><a href="contact.php" title="Contact">CONTACT</a></li>
				<li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
			</ul>
		</nav>
	
	<!--Logo and Hero Image-->
	<section class="heroimage">
		<a class="logo" href="index.php"><span>CREZO</span></a>
	</section>
	
<!--Main Content of the site-->
	<main class="main" role="main">
<!--Introduction section-->
		<section class="intro">
			<header class="introheader" role="banner">
			<article class="introcontent" role="article">
				<h2>What is CREZO?</h2>
				<p>CREZO is a consultant company that connects talent with experience,<br> helping entrepreneurs finding the help they need to advance their business</p>
			</article>
			</header>	
<!--Icons describing the company-->
			<section class="introicons">
<!--Icon 1-->
				<div id="chaticon">
					<img alt="Services" src="img/icons/crezoservices.svg" width="100" height="100">
					<p>Services</p>
				</div>
<!--Icon 2-->
				<div id="charticon">
					<img alt="Growth" src="img/icons/crezogrowth.svg" width="100" height="100">
					<p>Growth</p>
				</div>
<!--Icon 3-->
				<div id="toolicon">
					<img alt="Teamwork" src="img/icons/crezoteamwork.svg" width="100" height="100">
					<p>Teamwork</p>
				</div>
			</section>
		</section> <!--Intro Section End-->
<!--Meet the Team Section-->
		<section class="meettheteam">
		<h2>Meet The Team</h2>	
			<section class="teamsections">
<!--Marketing section-->
				<div id="marketing">
					<img src="img/therese.jpg" alt="marketing" width="175" height="175">
					<h3>Therese</h3>
					<p>Awesome person number 1</p>
				</div>
<!--Finance Section-->
				<div id="finance">
					<img src="img/veronica.jpg" alt="finance" width="175" height="175">
					<h3>Veronica</h3>
					<p>Awesome person number 2</p>
				</div>
<!--Multimedia Section-->
				<div id="multimedia">
					<img src="img/lujza.jpg" alt="multimedia" width="175" height="175">
					<h3>Lujza</h3>
					<p>Awesome person number 3</p>
				</div>
			</section>
		</section><!--End Team Section-->
	</main>
<!--Testemonials section start-->
	<aside class="testemonials" role="complementary">
		<div class="teste"></div>
		<div class="quote"><blockquote><p> The help given to us by CREZO was an essential part of launching our business, and it greatly enhanced our chances of future success. Anyone just starting out, would greatly benefit from the help provided by the CREZO team  </p><cite>- Some awesome person</cite></blockquote></div>
		<div class="monial"></div>
	</aside><!--Testemonials section end-->
<!--Newsletter Section Start-->
	<aside class="newsletter" role="complementary">
<!--Newsletter Intro-->
		<header>
				<h2>Newsletter</h2>
				<p>Sign up for our awesome newsletter to stay up to date with all the new stuff we are doing</p>
		</header>
<!--Newsletter Sign up-->
		<section class="signup">
			<form>
				<input type="email" name="email" placeholder="Your email">
				<button role="button" type="submit" name="submit">Sign Up</button>
			</form>	
		</section> 
	</aside><!--Newsletter End-->

<!--Footer Start-->
	<?php
	include "footer.php";
	?>
	
		<script src="js/nav.js"></script>
		
</body>
</html>
