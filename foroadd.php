<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else{
    
}
 
?>
<!DOCTYPE html>
<html>
    <body>
            <a href="logout.php"><button class="button button-block" name="logout"/>Cerrar Sesion</button></a>
        <a href="profile.php"><button class="button button-block" name="profile"/>Perfil</button></a>
<form method="post" action="">
    <p>Titulo: <input type="text" name="cat_name" /></p>
    <p>description: <input type="text" name="cat_description" style="WIDTH: 400px; HEIGHT: 200px" size=32/></p>
    <input type="submit" value="Add category" />


        
    </body>
        </form>

</html>

