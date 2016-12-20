
<?php 
include_once ("db_connect.php");
include_once ("function.php");

$query = ("SELECT * FROM blog ORDER by bid desc limit 10");
$result = $mysqli->query($query);
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crezo-Blog</title>
	<link href="styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="icon" href="img/logo/favicon.ico"> 
</head>
<body>
	<?php  
	include "nav.php";
	?>


	<section class="blogpageintro">	
		<div class="blogintro">
			<h1>Blog</h1>
			<p>This is the CREZO blog</p>
		</div>
	</section>

	
	<?php

	if($result){

	while($data = $result->fetch_assoc()){    

	echo'<main class="blogsection">';
		echo'<article class="blogpost">';
			echo'<header class="postintro">';
				echo'<span class="author">'.$data['firstName'] . ' ' . $data['lastName']. '</span><br>';
				echo'<time class"data">'. $data['bdate'] .'</time>';
				echo '<h2>'. $data['btilte'] . '</h2>';
				echo '<p>' . substr($data['bpost'], 0, 100).'...' . '</p>';
				echo '<button class="accordion">Read me</button>';
					echo '<div class="panel">';
				echo'<p class="bloginfo">'. $data['bpost'] .'</p>';
					echo'</div>';
				echo'<div class="socialmedia">';
					echo'<p>Share this post</p>';
					echo'<img src="img/social_icons/facebook.svg" alt="facebook" width="25" height="25">';
					echo'<img src="img/social_icons/linkedin.svg" alt="linkedin" width="25" height="25">';
				echo'</div>';
			echo'</header>';
			echo'<div class="blogimage">';
				echo '<img src="blogpics/'.$data['bpic'].'" height="250px" width="400px" alt="'.$data['bPicAlt'].'">';
			echo'</div>';
		echo'</article>';
	echo'</main>';
	}
 }


?>
      	<script>
      var acc = document.getElementsByClassName("accordion");
      var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
	        }
	    }
  		</script>  
  		
  		<script src="js/nav.js"></script>

	<navigation class="blognavigation">
		<button class="desc_sort">Newer Posts</button>
		<button class="asc_sort">Older Posts</button>
	</navigation>


<!--Footer Start-->
	<?php
	include "footer.php";
	?>
	

</body>
</html>
