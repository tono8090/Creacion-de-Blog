<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="form">
          <h1>Gracias por su visita</h1>
              
          <p><?= 'Usted a Cerrado Sesion!'; ?></p>
          
          <a href="index.php"><button class="button button-block"/>Inicio</button></a>

    </div>
</body>
</html>
