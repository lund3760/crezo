<?php 

include_once ("db_connect.php");
include_once ("function.php");



?>
<!doctype html>
<html>
	<head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="css/styles.css"> 
	</head>    
	<body>    
    	<nav>
        	<div class=""><img src="img/logo.svg" alt=""/></div>
		  	<div class=""><button href="postform.php">CREATE POST</button></div> 
        </nav> 
        <div class="">
    
        </div> 
        <div class="">
        	<h1>RECENT POSTS</h1>
            <hr>
        </div>
        
        
        <?php 

//  Connection check

// if($mysqli->connect_error) {
// 	die($mysqli->connect_error);
// } else {
// 	echo 'hurra';	
// };

// formulating sql query

$data = $mysqli->query("SELECT * FROM creatersfolder_.blog");

// pack data & retrive data
?>
<script>
  
  $(".clickme").click(function() {
     $(".hidden").show();
  });
</script>   


<?php
 
while($result = $data->fetch_assoc()){
echo '<ul>';
  
  
  echo '<div class="master">';
    echo '<div class="premiere-color">' . '</div>';
    echo '<h2>' . $result['title'] . '</h2>';
    echo '<div class="imagereplace">' . '</div>';
    echo '<p>' . $result['category'] . ' | ' . $result['firstname'] . ' ' . $result['lastname'] . '</p>';
    
    
    
    echo '<button class="clickme">Read more</button>';
    echo '<div class="postmaster">';
      echo '<p class="hidden" hidden>' . $result['post'] . '</p>';
    echo '</div>';
  echo '</div>'; // Master div
    
    
  
  echo '<hr>';
}




  echo '<div class="item">';
      echo '<button href="#" class="read_more">Read More</button>';
      echo '<span class="more_text">' . $result['post'] . '</span>';
      //echo '<p>' '</p>';
      
    echo '</div>';

?>
        
        
	</body>
</html>
