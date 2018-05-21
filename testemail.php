<?php
 
ini_set('display_errors', 1);
 
error_reporting(E_ALL);
 
$from = "apololordelooliveira@gmail.com";
 
$to = "apolovictor_dm@hotmail.com";
 
$subject = "Verificando o correio do PHP";
 
$message = "O correio do PHP funciona bem";
 
$headers = "De:". $from;
 
mail($to, $subject, $message, $headers);
 
header("Location: ../successRegistration.php");
 
?>