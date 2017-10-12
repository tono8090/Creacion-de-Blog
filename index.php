<?php 
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>

</head>

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
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
</head>

<?php 

?>
<body background="fondo.png">
        
          <h1>Bienvenido de vuelta!</h1>
          
          <form action="index.php" method="post" autocomplete="off"> 
            <label>
                <p>Email</p>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
            <label>
                <p>Contraseña</p>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          <button class="button button-block" name="login" />Iniciar Sesion</button>
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
 

 
            <label>
                <p>Email</p>  
            </label>
            <input type="email"required autocomplete="off" name='email' />
            <label>
                <p>Contraseña</p> 
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          <button type="submit" class="button button-block" name="register" />Registrarse</button>
          </form>

 
   
      
 
    <h1>Blogs Disponibles!</h1>
</body>
</html>
<?php 
require 'db2.php';
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