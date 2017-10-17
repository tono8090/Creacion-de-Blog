<!DOCTYPE html>
<html>
 <head>

 	  <ul id="profileopt"  class="dropdown-content">
 <li><a href="posts.php">Inicio</a></li>  
 <li><a href="profile.php">Perfil</a></li>
 <li><a href="foroadd.php">Nuevo Post</a></li>                
 <li class="divider"></li>
 <li><a href="logout.php">Cerrar Sesión</a></li>           
</ul>
<ul class="right">
<li><a class="dropdown-button grey-text text-darken-1"  href="#!" data-constrainwidth="false" data-beloworigin="true" data-activates="profileopt"><img style="height:60px;" class="circle" src="perfil.jpg"></a></li>
</ul>

   <nav  class="z-depth-0" style="background-color: black" ><div  class="container-wide"><div class="row"><div class="col s12 m3" >
 <img src="logo1.png" class="col s12 m3"  width="auto" height="auto">
<center> <div class="row"><h4 class="col m6" >Inicio</h4></div></center>
 

  </nav>

		<meta name="viewport" content="width=device-width, initial-scale=1"> 
 	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/materialize.min.css">
 </head>
 <body>
 	   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="js/materialize.min.js"></script>    
      <script type="text/javascript"></script>
 </body>
   

 


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



    echo "<div class='row'>
        <div class='col s12 m6'>
          <div class='card grey darken-3'>
            <div class='card-content white-text'>
              <span class='card-title'>".$row[$i]['titulo']."</span>".'by: '.$row1[$i]['account']."  <p>copiar el siguiente codigo para poder acceder al foro:<p>"." "."(".$row1[$i]['id'].")       </div>
            <div class='card-action'>
              <a href='captcha.php'>Ir al Post</a>
            
            </div>
          </div>
        </div>
      </div> ";  
    }

?>
<style type="text/css">
	footer {
  background-color: black;
  position: absolute;
  bottom: 1;
  width: 100%;
  height: 70px;
  color: white;
}
</style>
<footer style="background-color: black" class="page-footer">
      <div class="footer-copyright">
        <div class="container">
        © 2017-2017 Emilio, All rights reserved.
        <a class="grey-text text-lighten-4 right" href="https://github.com/tono8090/Creacion-de-Blog/blob/gh-pages/README.md">Repositorio Github</a>
        </div>
      </div>
    </footer>

</html>
