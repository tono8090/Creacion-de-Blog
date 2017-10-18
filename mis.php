<?php
require 'db.php';
 
session_start();


// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Debes Iniciar Sesion antes de acceder!";
  header("location: error.php");    
}   
$email2= $_SESSION['email'];  
$descripcion= $mysqli->escape_string($_POST['descripcion']);
$titulo = $mysqli->escape_string($_POST['titulo']);



 
// Check if user with that email already exists
 $sql1 = "INSERT INTO comentarios (titulo, content, account) " 
            . "VALUES ('$titulo','$descripcion','$email2')";

    // Add user to the database
    if ( $mysqli->query($sql1) ){

        header("location: posts.php"); 

    }

    else {
        $_SESSION['message'] = 'No pudimos procesar tu informacion!';
        header("location: error.php");
    }


?>