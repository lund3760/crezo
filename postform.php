<?php 
// connecting to a MySQL server using the mysqli method (i for improved) 

include_once "db_connect.php";
include_once "function.php";


// 2. Establishing the connection using a mysqli object


// 3. Connection check 

// if($mysqli->connect_error){
// 	die($mysqli->connect_error);
// } else {
// 	echo 'Successful connection to SQL server!';
// }; 

ini_set('display_errors', '0');     # don't show any errors...
error_reporting(E_ALL | E_STRICT);  # ...but do log them


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
        
</head>
	<body>
		<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>">    	
  
	  		  Image Upload
            <br> 
          <input id="bpic" type="file" name="bpic" />
            <br>
          Image text
            <br>          
          <input type="text" id="bPicAlt" name="bPicAlt"/>
            <br>
          Author Name
          <br>
          <input type="text" name="firstName" placeholder="First name">
            <br>
          <input type="text" name="lastName" placeholder="Last name">
            <br>
          Post title
            <br>
          <input text="text" id="btilte" name="btilte" required>
            <br>
          <textarea rows="20" cols="60" id="bpost" placeholder="Write your post here..." class="" name="bpost" required></textarea>
            <br>
          Image Text
            <br>
            Date
             <input id="bdate" data-format="YYYY-MM-DD" data-template="YYYY MMM D" name="bdate" type="date" placeholder="YYYY-MM-DD">
                    <script>
                    $(function(){
                        $('#bdate').combodate();    
                    });
                    </script>
            <br>       
          Upload Post 
          <input id="submit-upload" type="submit" name="addPost" value="Add a new post"/>


		</form>	
        

        <?php 
			if(isset($_POST['addPost'])){		
			// grabbing user input 			

			$title = $_POST['btilte'];
			$pic = $_FILES['bpic']['name'];
			$post = $_POST['bpost'];
            $PicAlt = $_POST['bPicAlt'];
            $Afirst = $_POST['firstName'];
            $Alast = $_POST['lastName'];
            $bdate = $_POST['bdate'];


			// formulate SQL query, inserting values into the table

$update = $mysqli->query("INSERT INTO creatersfolder_.blog (btilte, bpost, bpic, bPicAlt, firstName, lastName, bdate) VALUES ('$title', '$post', '$pic', '$PicAlt', '$Afirst', '$Alast', '$bdate')");


   if(isset($_FILES ['bpic'])){
               $errors= array();
               $file_name = $_FILES['bpic']['name'];
               $file_size = $_FILES['bpic']['size'];
               $file_tmp = $_FILES['bpic']['tmp_name'];
               $file_type= $_FILES['bpic']['type'];
               $file_ext=strtolower(end(explode('.',$_FILES['bpic']['name'])));
               
               $expensions= array("jpeg","jpg","png");
               
               if(in_array($file_ext,$expensions)=== false){
                  $errors[]="extension not allowed, please choose a JPEG or PNG file.";
               }
               
               if($file_size > 2097152){
                  $errors[]='File size must be excately 2 MB';
               }
                 
               if(empty($errors)==true){
                  move_uploaded_file($file_tmp,"blogpics/".$file_name);
                  echo "Success";
               }else{
                  print_r($errors);
              }
            }  
          }
# in your PHP code:
ini_set('display_errors', '0');     # don't show any errors...
error_reporting(E_ALL | E_STRICT);  # ...but do log them

// close connection 
			mysqli_close($mysqli);	
		    ?>    
	</body>
</html>