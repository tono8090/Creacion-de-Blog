<?php 
session_start();
require 'db2.php';
$_SESSION['idcom'] = $_POST['it'];
$id=$_SESSION['idcom'];
$contenido2 = $mysqli1->query("SELECT  id, titulo, content FROM comentarios WHERE id = $id ");
$ro = array();
$ro1= array();
$rows1=$contenido2-> num_rows;
 $ro1= mysqli_fetch_row( $contenido2 ) ;
echo $ro1[1]."<p>".$ro1[2]."</p>";
?>
<!DOCTYPE html>
<html>
            <form method="post" action='post2.php'>
             
            <button type="submmit">Ir a la Discusion</button> 
    </form>
          <a href="logout.php"><button class="button button-block" name="logout"/>Cerrar Sesion</button></a>

          <a href="posts.php"><button class="button button-block" name="Inicio"/>Inicio</button></a>
        <a href="profile.php"><button class="button button-block" name="Inicio"/>perfil</button></a>

</html>