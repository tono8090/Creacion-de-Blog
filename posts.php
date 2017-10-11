<?php 
require 'db2.php';
session_start();
 $contenido = $mysqli1->query("SELECT titulo FROM comentarios");
 $contenido1 = $mysqli1->query("SELECT id FROM comentarios");
$contenido2 = $mysqli1->query("SELECT id, titulo, content, account FROM comentarios");
$row = array();
$row2 = array();
$row3 = array();
$v='';
$rows1=$contenido-> num_rows;
$rows1=$contenido2-> num_rows;
$strings = array();
$account=array();
$comprar='';
while( $row[] = mysqli_fetch_assoc( $contenido ) );
while( $row1[] = mysqli_fetch_assoc( $contenido2 ) );
$_SESSION['av']=array(); 
for ($i = 0; $i < $rows1; $i++) {
$enviar="<p><a  href='captcha.php'> ".$row[$i]['titulo']."</a></p>".'by: '.$row1[$i]['account'] ;
    echo $enviar."  <p>copiar el siguiente codigo para poder acceder al foro:<p>"." "."(".$row1[$i]['id'].")";  
    }
?>
<!DOCTYPE html>
<html>
 
 
              <p><a href="logout.php"><button class="button button-block" name="logout"/>Cerrar Sesion</button></a></p>
              <p><a href="profile.php"><button class="button button-block" name="logout"/>Perfil</button></a></p>
   
?>
</html>
 