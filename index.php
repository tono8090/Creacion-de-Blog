<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
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
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Registrate</a></li>
        <li class="tab active"><a href="#login">Inicia Sesion</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Bienvenido de vuelta!</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contrase�a<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          
          
          <button class="button button-block" name="login" />Iniciar Sesion</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Registrate Gratis</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Apellido<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email <span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Contrase�a<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Registrarse</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
<?php 
require 'db2.php';
 
  
 $contenido = $mysqli1->query("SELECT titulo FROM comentarios");
 $contenido1 = $mysqli1->query("SELECT account FROM comentarios");
$row = array();
$row2 = array();
$row3 = array();
$rows1=$contenido-> num_rows;
$strings = array();
$account=array();
$comprar='';
while( $row[] = mysqli_fetch_assoc( $contenido ) );
while( $row1[] = mysqli_fetch_assoc( $contenido1 ) );

 
for ($i = 0; $i < $rows1; $i++) {
  
echo "<p><a href='post.php'>".$row[$i]['titulo']."</a></p>".'by: '.$row1[$i]['account'] ;}
?>
 
