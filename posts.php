

<!DOCTYPE html>
<html>
 <head>

 	  <ul id="profileopt"  class="dropdown-content">
 
 <li><a href="profile.php">Perfil</a></li>
 <li><a href="foroadd.php">Nuevo Post</a></li>                
 <li class="divider"></li>
 <li><a href="logout.php">Cerrar Sesión</a></li>           
</ul>
<ul  class="right">
   <a href="index2.php"><button id="bot" class='btn btn-primary'/>Registrarse</button></a>
</div>
<li ><a id="pro" class="dropdown-button grey-text text-darken-1"  href="#!" data-constrainwidth="false" data-beloworigin="true" data-activates="profileopt"><img style="height:60px;" class="circle" src="perfil.jpg"></a></li>
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
require 'db.php';
session_start();
$log='';
if ( isset($_SESSION['logged_in']) ) {
  $log=1;
$_SESSION['log'] =1;
}
else{
$_SESSION['log'] =0;
  $log=0;
}

$contenido2 = $mysqli->query("SELECT id, titulo, content, account FROM comentarios");

$rows=$contenido2-> num_rows;
$_SESSION['token'] =0;
$rows1=$contenido2-> num_rows;
while( $row1[] = mysqli_fetch_assoc( $contenido2 ) );

for ($i = 0; $i < $rows1; $i++) {



    echo "<br><br>
    <div class='row'>
        <div class='col s12 m6' >
          <div class='card grey darken-3' class='left'>
            <div class='card-content white-text'>
              <form  method='post' action='post3.php'>
              <span  class='card-title'>".$row1[$i]['titulo']."</span>".'by: '.$row1[$i]['account']."  <p><input type='text' style='display: none;' name='id' id='cosa".$i."' value=".$row1[$i]['id']."></p>       </div>
            <div class='card-action'>
              <button class='btn btn-primary' type='submit'>Ir al Post</button>
            </form>
            </div>
          </div>
        </div>
      </div> ";  
    }

?>
</button>

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
<footer    style="background-color: black" class="page-footer">
      <div class="footer-copyright">
        <div class="container">
        © 2017-2017 Emilio, All rights reserved.
        <a class="grey-text text-lighten-4 right" href="https://github.com/tono8090/Creacion-de-Blog/blob/gh-pages/README.md">Repositorio Github</a>
        </div>
      </div>
    </footer>
<script type="text/javascript">
 
  var logged=<?php echo  json_encode($log); ?> ;
    console.log(logged);

  if (logged <= 0 ) {
  document.getElementById('pro').style.display= 'none';
}
else{
  document.getElementById('bot').style.display= 'none';
}
</script>
</html>
