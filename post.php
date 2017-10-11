<?php 
session_start();
require 'db2.php';
$id = $_POST['it'];
 
 $contenido = $mysqli1->query("SELECT titulo FROM comentarios");
 $contenido1 = $mysqli1->query("SELECT id FROM comentarios");
$contenido2 = $mysqli1->query("SELECT  id, titulo, content FROM comentarios WHERE id = $id ");
$ro = array();
$ro1= array();
$rows1=$contenido-> num_rows;
$rows1=$contenido2-> num_rows;
while( $ro[] = mysqli_fetch_assoc( $contenido ) );
 $ro1= mysqli_fetch_row( $contenido2 ) ;
echo $ro1[1]."<p>".$ro1[2]."</p>";
/*$id3=$id + 1;
$id2="";
for ($i = 1; $i < $id3; $i++) {
     $id2=$i;
 }

echo $ro1[$id2]['id'];
echo $id2;
 */

?>
         <p> <a href="logout.php"><button class="button button-block" name="logout"/>Cerrar Sesion</button></a></p>

          <p><a href="posts.php"><button class="button button-block" name="Inicio"/>Inicio</button></a></p>
          <p><a href="profile.php"><button class="button button-block" name="Inicio"/>perfil</button></a></p>
