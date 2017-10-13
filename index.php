<?php 
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head> 
  <title>Sign-Up/Login Form</title>
 <nav style="background: transparent;" ><div  class="container-wide"><div class="row"><div class="col s12 m3" ><a href="/" class=>

</a></div><div class="col s12 m9"><div class="right"><ul><li><a href="/#features">Features</a></li><li><a href="/team">Our Team</a></li><li><a href="https://app.closeheat.com/users/sign_in" class="modal-trigger btn nav-sign-up waves-effect waves-light">Registrar</a></li></ul></div></div></div></div></nav>


      </ul>
    </div>
  </nav>
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/materialize.min.css">
</head>

<style type="text/css">
  input{
    width: auto !important;
  }
</style>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="./css/style.css " type="text/css"  >
  <title>Sign-Up/Login Form</title>
</head>
<style type="text/css"> 
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
#cosa{
    color: white;
    background-color: black;
        height: 700px;
    width: 50%;
}
body{ 

       background-size: 50px 100px;
       background-size: 100% 100%;
background-repeat : no-repeat; 
background-attachment : fixed; 

} 
</style>

<body  background="fondo2.jpg">
 
 <div style="align-content: center;" id="cosa">
        <h1 style="color: white">Ingresar</h1>
          <form action="index.php" method="post" autocomplete="off"> 
            <label>
                <p>Email</p>
            </label>
            <input id="email" type="email" required autocomplete="off" name="email"/>
            <label>
                <p>Contraseña</p>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          <button class="btn btn-primary" name="login" />Iniciar Sesion</button>
          </form>


          <h1>Registrate Gratis</h1>
          
          <form action="index.php" method="post" autocomplete="off">
              <label>
                  <p>Nombre</p>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
              <label>
                  <p> Apellido </p>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
 
                      <div class="row">

            <label>
                <p>Email</p>  
            </label>
            <input type="email"required autocomplete="off" name='email' />
            <label>
                <p>Contraseña</p> 
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          <button type="submit" class="btn btn-primary" name="register" />Registrarse</button>
          </form></div>
 

   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="js/materialize.min.js"></script>     

</body>

</html>