<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./app.css" />
</head>
<body>
  
  <?php session_start();


 

require_once "./header.php";
   $server_name = "localhost";
   $user = "root";
$pass = "";
$db = "proiectweb";
$conn = new mysqli($server_name, $user, $pass, $db);

   
$sql2="SELECT * FROM chosen_project WHERE (`email`='$_SESSION[email]' and `grupa`='$_SESSION[grupa]')";
   $data = mysqli_query($conn,$sql2); 
   if(mysqli_num_rows( $data)>0)
      { $_SESSION["proiect"]=$_POST["nume_proiect"];
         header("Location: ./home.php"  );
         exit;
     }   
   ?>

<p style="font-size: xx-large; text-align:center; padding-top: 100px;color: red;"> Sunteti sigur ca doriti sa alegeti  proiectul  ,,<?php  echo"$_POST[nume_proiect] " ;?>''?</p>

<form  style="display: inline-block;padding-left:40%" action="./alegere-proiect.php" method="post" >


<?php  $_SESSION["proiect"]=$_POST["nume_proiect"] ;
?>

                
<input style="width:150px ; height:30px;" type="submit" name="continue" value="Da" >

</form>

<form style="display: inline-block;" action="./home.php" method="post">
<input  style="width:150px ; height: 30px; " type="submit" name="update" value="Nu" >

</form>


  
</body>
</html>