<?php 
session_start();
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Debes Iniciar Sesion antes de acceder!";
  header("location: error.php"); 
}
require 'db.php';
$id=$_SESSION['idcom'];
$contenido2 = $mysqli->query("SELECT  id, titulo, content FROM comentarios WHERE id = $id ");
$con = $mysqli->query("SELECT  identidad, comentario, cuenta FROM comms WHERE identidad = $id ");

$rows1=$con-> num_rows;
 $ro1= mysqli_fetch_row( $contenido2 ) ;

echo $ro1[1]."<p>".$ro1[2]."</p>";

while( $ro2= mysqli_fetch_array( $con ) ){
echo "<h3>"."<p>".$ro2['comentario']."</p>"."comentado por: ".$ro2['cuenta']."</h3>";
}
?>
<!DOCTYPE html>
<html>
            <form method="post" action='post2.php'>
            <input type="text" name='comment' value=" " />
            <button type="submmit">Comentar</button> 
    </form>
          <a href="logout.php"><button class="button button-block" name="logout"/>Cerrar Sesion</button></a>

          <a href="posts.php"><button class="button button-block" name="Inicio"/>Inicio</button></a>
        <a href="profile.php"><button class="button button-block" name="Inicio"/>perfil</button></a>

</html>
