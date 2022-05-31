<?php
session_start();

$server_name = "localhost";
$user = "root";
$pass = "";
$db = "proiectweb";
$conn = new mysqli($server_name, $user, $pass, $db);

   


  $sql3=" INSERT  INTO chosen_project( `email`, `proiect`, `grupa`) 
  VALUES ('$_SESSION[email]','$_SESSION[proiect]','$_SESSION[grupa]') "  ;
 $conn->query($sql3);

if($conn)

 {$error[]="Proiect ales";
  header("Location: ./home.php?". http_build_query($error));

exit;}

else {$error[]="Something went wrong";
  header("Location: ./home.php?". http_build_query($error));
  exit;}




?>