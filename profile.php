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
        <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/materialize.min.css">
</head>
<style type="text/css"> 
footer {
  background-color: black;
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 70px;
  color: white;
}
.nav{
  background-color: black;
}
#email { 
    width: auto;
}
.h1{
    color: white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
html {
  min-height: 100%;
  position: relative;
}
body{ 
  margin: 0;
  margin-bottom: 40px;
       background-size: 100px 100px;
       background-size: 100% 100%;
background-repeat : no-repeat; 
background-attachment : fixed; 

} 
</style>

</html>

<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Debes Iniciar Sesion antes de acceder!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
 
  <title>Bienvenido <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body >



                 



                 <div align="left" class="card-content" >
                  <div class="row">                    
                      <div class="col s3 offset-s1">                        
                       <h4 class="card-title grey-text text-darken-4">Bienvenido:</h4>                        
                    </div>
                    <div class="col s3 offset-s1">                        
                        <h4 class="card-title grey-text text-darken-4"><?php echo $first_name.' '.$last_name; ?></h4>
                        <p class="medium-small grey-text">Usuario</p>                        
                    </div>

                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4"><?= $email ?></h4>
                        <p class="medium-small grey-text">Cuenta</p>                        
                    </div>
              
                  </div>
                </div>



   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="js/materialize.min.js"></script>    
      <script type="text/javascript"></script>

</body>
<footer style="background-color: black" class="page-footer">
      <div class="footer-copyright">
        <div class="container">
        © 2017-2017 Emilio, All rights reserved.
        <a class="grey-text text-lighten-4 right" href="https://github.com/tono8090/Creacion-de-Blog/blob/gh-pages/README.md">Repositorio Github</a>
        </div>
      </div>
    </footer>
</html>
