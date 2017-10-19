<?php
session_start();
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Debes Iniciar Sesion antes de acceder!";
  header("location: error.php"); 
}
require 'db.php';


$_SESSION['token']=1;
$email=$_SESSION['email'];
$id=$_SESSION['idcom'];		
$com=$_POST['comment'];
$res=$mysqli->query("INSERT INTO comms (identidad,comentario, cuenta) " 
            . "VALUES ('$id','$com','$email')");
$log=$_SESSION['log'];
if ($log<=0){
	header("Location:error.php");
}
else{
   header("Location:post3.php");
   }
   exit;
?>