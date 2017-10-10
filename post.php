<?php 
session_start();
require 'db2.php';
$id = $_POST['it'];
echo $id;
 $contenido = $mysqli1->query("SELECT titulo FROM comentarios");
 $contenido1 = $mysqli1->query("SELECT id FROM comentarios");
$contenido2 = $mysqli1->query("SELECT  titulo, content FROM comentarios");
$row = array();
$row1= array();
$rows1=$contenido-> num_rows;
$rows1=$contenido2-> num_rows;
while( $row[] = mysqli_fetch_assoc( $contenido ) );
while( $row1[] = mysqli_fetch_assoc( $contenido2 ) );
$id2=(string)($id);
print_r($row1['5']);

?>
         <p> <a href="logout.php"><button class="button button-block" name="logout"/>Cerrar Sesion</button></a></p>

          <p><a href="posts.php"><button class="button button-block" name="Inicio"/>Inicio</button></a></p>
          <p><a href="profile.php"><button class="button button-block" name="Inicio"/>perfil</button></a></p>
