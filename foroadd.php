<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Debes Iniciar Sesion antes de acceder!";
  header("location: error.php");    
}    

?>
<!DOCTYPE html>
<html>
                <a href="logout.php"><button class="button button-block" name="logout"/>Cerrar Sesion</button></a>
        <a href="profile.php"><button class="button button-block" name="profile"/>Perfil</button></a>
    <body>
<form method="post" action="mis.php">
    <p>Titulo: <input type="text" name="titulo" /></p>
    <p>description: <input type="textarea" name="descripcion" cols="1000" rows="1000" style="WIDTH: 400px; HEIGHT: 200px" size=32/></p>
    <input type="submit" value="Crear Post" name="crear" />
   
        </form>
 </body>

</html>

