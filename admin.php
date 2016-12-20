<?php
include_once "db_connect.php";
include_once "function.php";
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
    
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <form action="process_login.php" method="post" name="login_form">                      
            Email: <input type="email" name="email" />
            Password: <input type="password" name="PWD" id="PWD"/>
            <input type="submit" value="Login" onclick="formhash(this.form, this.form.password);" /> 
        </form>
 
<?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['email']) . '.</p>';
 
            echo '<p>Do you want to change user? <a href="logout.php">Log out</a>.</p>';
        } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                }
?>      
    </body>
</html>