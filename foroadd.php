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

  </nav>


   <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/materialize.min.css"></head>
               
<body>
  <center>
      <div class="container">
        <div id="cosa1" class="z-depth-1 grey lighten-4 row"  style="display: inline-block; padding: 32px 48px 0px 48px; border: 20px solid #EEE;  ">

<form class="col s12" method="post" action="mis.php">
  
    
        <div class="row">
        <div class="input-field col s12">
          <input type="text" id="titulo" name="titulo" />
          <label for="textarea1">Titulo</label>
        </div>
      </div>
   
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="descripcion" class="materialize-textarea"></textarea>
          <label for="textarea1">Contenido</label>
        </div>
      
<input type="submit" class="btn btn-primary" value="Crear Post" name="crear" />
   
      </div>
 
  </div>
    
        </form>
</div>
</div>
</center>
<style type="text/css">
  #textarea1 { 
    width: 500px;
}
  #titulo { 
    width: auto;
}
</style>











   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="js/materialize.min.js"></script>    
      <script type="text/javascript"></script>
 </body>

</html>

