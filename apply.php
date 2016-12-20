<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crezo-Apply</title>
	<link href="styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"> 
	<script type="text/JavaScript" src="js/sha512.js"></script> 
	<script type="text/JavaScript" src="js/forms.js"></script>
	</head>
<body>
	<?php  
		include "nav.php";
	?>
	
	<?php
include_once ("db_connect.php");
include_once ("register.inc.php");
include_once ("function.php");

# in your PHP code:
ini_set('display_errors', '0');     # don't show any errors...
error_reporting(E_ALL | E_STRICT);  # ...but do log them

?>

        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        
    <section class="applyintro">	
		<div class="applyinfo"> 
			<h1>Apply</h1>
			<p>Become a Part of the Crezo Team</p>
		</div>
	</section>  
	<section class="applyheader">
	<p>Fill out the form and apply to become a part of the CREZO team!</p> 
	</section> 
    <section class"applysection"> 
        <form class="applyform" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars();?>" 
                >
            <input type='text' name='firstName' id='firstName' placeholder='First name' />
            <input type='text' name='lastName' id='lastName' placeholder='Last name' />
            <input type="email" name="Semail" id="email" placeholder='Email' />
            <input type="tel" name="phone" id="phone" placeholder='Phone' />
            <input type="url" name="linkedin" id="linkedin" placeholder='Linkedin' />
			<p>SELECT CV</p>
            <input type="file" name="cv" id="cv" />
            <textarea name="summary" id="summary" placeholder='Summary'c/></textarea>
            <textarea name="skills" id="skills" placeholder='Skills' /></textarea>
			<p>SELECT IMAGE</p>
            <input type="file" name="image" id="image" />
            <input type="url" name="website" id="website" placeholder='Website' />

           

            <p>Uddannelse sted</p>
                    <select name="instname">
                        <option value = "">---Select---</option>
                        <?php   
                    $stmt = $mysqli->prepare("SELECT instId,instname FROM institutions");
                    $stmt->execute();
                    $stmt->bind_result($instId,$instname);
                    while ($stmt->fetch()){
                        echo "<option value='".$instId."'>". $instname ."</option>";
                        }
                    $stmt->close();
                        ?>
                </select> 


            <p>Uddannelse</p>
                    <select name="profname">
                        <option value = "">---Select---</option>
                        <?php
                    $stmt = $mysqli->prepare("SELECT profId,profname FROM profession");
                    $stmt->execute();
                    $stmt->bind_result($profId,$profname);
                    while ($stmt->fetch()){
                        echo "<option value='".$profId."'>". $profname ."</option>";
                        }
                    $stmt->close();

                    ?>
              </select>  
              
              <input class="" id="submit-student" type="submit" name="addstudent" value="Register"/> 
			</section>
             
              <?php 

              if(isset($_POST['addstudent'])){

            $Fname = $_POST['firstName'];
            $Lname = $_POST['lastName'];
            $Semail = $_POST['Semail'];
            $phone = $_POST['phone'];
            $linkedin = $_POST['linkedin'];
            $cv = $_FILES['cv']['name'];
            $summary = $_POST['summary'];
            $skills = $_POST['skills'];
            $image = $_FILES['image']['name'];
            $URL = $_POST['website'];
            $instid = $_POST['instId'];
            $profid = $_POST['profId'];



      

            // $update .= $mysqli->query("SELECT idStudents,$instid FROM students,institutions ORDER BY idStudents DESC");
            // $update .= $mysqli->query("SELECT idStudents,$profid FROM students,institutions ORDER BY idStudents DESC");

  $update = $mysqli-> query ("INSERT INTO students (firstName, lastName, Semail, phone, linkedin, cv, summary, skills, image, website) VALUES ('$Fname', '$Lname', '$Semail', '$phone', '$linkedin', '$cv', '$summary', '$skills', '$image', '$URL')");


  // $update = "SELECT idStudents FROM students ORDER BY idStudents DESC LIMIT 1"; 
  /**$sql1 = ("INSERT INTO students_has_profession SELECT idStudents, $profid FROM students, profession order by idStudents DESC limit 1"); 
   $sql2 = ("INSERT INTO students_has_institutions SELECT idStudents, $instid FROM students, institutions order by idStudents DESC limit 1");


                   $result = FALSE;
                    if (mysql_query('BEGIN')) {
                    if (mysql_query($sql1) &&
                        mysql_query($sql2))
                        $result = mysql_query('COMMIT'); // both queries looked OK, save
                    else
                        mysql_query('ROLLBACK'); // problems with queries, no changes
                }   **/            
  
               if($update){
                        echo '<p>New subject added to database!</p>';      
                       } else {
                        echo '<p>Ooooops - Something went wrong</p>';        
                     }
                 } 
       

                   if(isset($_FILES['cv'])){
                          $errors= array();
                          $file_name = $_FILES['cv']['name'];
                          $file_size = $_FILES['cv']['size'];
                          $file_tmp = $_FILES['cv']['tmp_name'];
                          $file_type= $_FILES['cv']['type'];
                          $file_ext=strtolower(end(explode('.',$_FILES['cv']['name'])));
                          
                          $expensions= array("pdf");

                          if(in_array($file_ext,$expensions)=== false){
                             $errors[]="extension not allowed, please choose a PDF file.";
                          }
                          
                          if($file_size > 8097152){
                             $errors[]='File size must be excately 8 MB';
                          }
                          
                          if(empty($errors)==true){
                             move_uploaded_file($file_tmp,"cv/".$file_name);
                          }else{
                             print_r($errors);
                          }
                      }

                   if(isset($_FILES ['image'])){
                          $errors= array();
                          $file_name = $_FILES['image']['name'];
                          $file_size = $_FILES['image']['size'];
                          $file_tmp = $_FILES['image']['tmp_name'];
                          $file_type= $_FILES['image']['type'];
                          $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
                          
                          $expensions= array("jpeg","jpg","png");
                          
                          if(in_array($file_ext,$expensions)=== false){
                             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                          }
                          
                          if($file_size > 4097152){
                             $errors[]='File size must be excately 4 MB';
                          }
                            
                          if(empty($errors)==true){
                             move_uploaded_file($file_tmp,"uploads/".$file_name);
                             echo "Success";
                          }else{
                             print_r($errors);
                          }
                       }

                    mysqli_close($mysqli);
                    ?>   

            <br>

            

        </form>
        
        <script src="js/nav.js"></script>
	
	<!--Footer Start-->
	<?php
	include "footer.php";
	?>
</body>
</html>


