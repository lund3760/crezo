<?php 
include_once ("db_connect.php");
include_once ("function.php");

$query = ("SELECT * FROM creatersfolder_.students ORDER by idstudents desc");
$result = $mysqli->query($query);

?>


<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crezo-Students</title>
	<link href="styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="icon" href="img/logo/favicon.ico">
</head>
<body>
	<?php  
		include "nav.php";
	?>
	<section class="studentpageintro">	
		<div class="studentintro"> 
			<h1>Students</h1>
			<p>This is a page with students his is a page with students</p>
		</div>
	</section>
	
	<main class="studentprofiles" role="main">
		
		<header class="studentheader" role="banner">
		<h2>Specialization</h2>
			<section class="studentnavigation">
				<button>Multimedia</button>
				<button>Finance</button>
				<button>Marketing</button>
				<button>Web-Development</button>
			</section>
		</header>
	<section class="profiles">
<?php
	while($data = $result->fetch_assoc()){    


		
	echo		'<figure class="student">';
	echo			'<img src="uploads/'.$data['image'].'" class="studentpicture" width="200px" height="200px" alt="studentinformation" >';
	echo			'<figcaption class="specialization">IT Master</figcaption>';
	echo			'<figcaption class="studentname">'. $data['firstName'] . ' ' . $data['lastName'] .'</figcaption>';
	echo		'</figure>';
			
	
		}
	
	?>
	    </section>
	</main>		
		
	<?php
	include "footer.php";
	?>
	
	<script src="js/nav.js"></script>
	
</body>
</html>
	





