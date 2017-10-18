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
<center> <div class="row"><h4 class="col m6" >Post</h4></div></center>
 

  </nav>
 	


		   
        <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/materialize.min.css">
</head>


<?php 
session_start();
require 'db.php';
$_SESSION['idcom'] = $_POST['id'];
$id=$_SESSION['idcom'];
$contenido2 = $mysqli->query("SELECT  id, titulo, content FROM comentarios WHERE id = $id ");
$ro = array();
$ro1= array();
$rows1=$contenido2-> num_rows;
 $ro1= mysqli_fetch_row( $contenido2 ) ;
echo "<center>
<div class='row'>
        <div class='col s24 m12'>
          <div  style='width: auto;' class='card blue-grey darken-1'>
            <div class='card-content white-text'>
              <span class='card-title'>".$ro1[1]."</span><p>
        </div>
            <div class='card-action'>
            <p>".$ro1[2]."
            </div>
            </div>
            </div>
          </div>
        </div>
   
      
     
        </center>";
?>
<body>
	<style type="text/css">
		footer {
  background-color: black;
  bottom: 10;
  width: 100%;
 
  color: white;
     clear: both;
    position: absolute;

}

	</style>
    


<center>
    <form method="post"  action='post2.php'>
             
            <button class="btn" class="right" type="submmit">Ir a la Discusion</button> 
    </form>
         
</center>
   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="js/materialize.min.js"></script>    
      <script type="text/javascript"></script>


</body>

</html>
