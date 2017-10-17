<?php 
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head> 
  <title>Sign-Up/Login Form</title>
   <nav style="background: transparent;" class="z-depth-0" ><div  class="container-wide"><div class="row"><div class="col s12 m3" >
 <img src="logo1.png" class="col s12 m3"  width="auto" height="auto">


     </div>

     <div class="col s12 m9" ><div class="right"><ul><li><a href="posts.php">Inicio</a></li><li><button type="submit" class="btn btn-primary"  onclick="mostrar()" />Registrarse</button></li></ul></div></div></div></div></nav>

      </ul>
    </div>
  </nav>
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/materialize.min.css">
</head>

<style type="text/css">
      body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }



    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    } 
  input{
    width: auto !important;
  }
</style>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { 

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { 
        
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

<body  background="fondo2.jpg">


    <center>
      <div class="container">
        <div id="cosa1" class="z-depth-1 grey lighten-4 row"  style="display: inline-block; padding: 32px 48px 0px 48px; border: 20px solid #EEE;  ">
              <h1>Ingresar</h1>
          <form   class="col s12" action="index.php" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                
                <input id="email" style="color: black" type="email" required autocomplete="off" name="email"/>
                <label style="color: black" for='email'>Enter your email</label>
               </div> 
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type="password" required autocomplete="off" name="password"/>
                <label for='password'>Enter your password</label>
              </div>

            </div>

            <br />
            <center>
              <div class='row'>
                  <button class="btn btn-primary" name="login" />Iniciar Sesion</button>  
              </div>
            </center>
          </form>
        </div>
      </div>
  </main>   




    <center >
      <div class="container" >
        <div id="cosa" class="z-depth-1 grey lighten-4 row"  style="display: inline-block; padding: 32px 48px 0px 48px; border: 40px solid #EEE;  ">

          <h1 style="color: black">Registrate</h1>
          
          <form action="index.php" method="post" autocomplete="off">
             <div class='row'>
              <div class='input-field col s12'>
              <input type="text" style="color: black" required autocomplete="off" name='firstname' />
              <label>Nombre</label>
              </div>
            </div>


              <div class='row'>
              <div class='input-field col s12'>    
              <input type="text"required style="color: black" autocomplete="off" name='lastname' />
                <label> Apellido </label>
              </div>
            </div>
                     
              <div class='row'>
              <div class='input-field col s12'>
            <input type="email"required style="color: black" autocomplete="off" name='email' />
            <label> Email  </label>
          </div>
        </div>
          
              <div class='row'>
              <div class='input-field col s12'>
           <input type="password"required autocomplete="off" style="color: black" name='password'/>
            <label>Contraseña</label>
          </div>
        </div>
            
          <button type="submit" class="btn btn-primary" name="register" />Registrarse</button>
          <a href="index.php">¿ya tienes cuenta?</a>
          </form></div></div>
</div>
</div>
</center>









 



   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="js/materialize.min.js"></script>    
      <script type="text/javascript">
 document.getElementById('cosa').style.display = 'none';       
        function mostrar(){
 document.getElementById('cosa1').style.display = 'none'; 
document.getElementById('cosa').style.display = 'block';

}
</script> 

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