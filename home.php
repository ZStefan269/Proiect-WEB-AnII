<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./app.css" />
</head>

<body>

  
    <?php
        require_once "./header.php"
    ?>
   
  <?php session_start();
  
  
  if($_SESSION["is_logged_in"] ==false)
   {header("Location: ./admin-login.php");
   exit;}   
     ?>

        <?php
            require_once "./footer.php" ?>
            <br><br><br>
            <p style="width:400px; padding-left:130px; margin:0; font-size:xx-large;color:white">Proiecte propuse</p>
            <br>
    <table class="bara"  style="align-item:center">
        <thead style="background-color: blue" >
        </thead>
        <tbody style="background-color:white">  
   <?php 
   $server_name = "localhost";
   $user = "root";
  $pass = "";
  $db = "proiectweb";
  $conn = new mysqli($server_name, $user, $pass, $db);
  
     
  
  
    $sql=" SELECT * FROM projects " ;
   $data = mysqli_query($conn,$sql); 
   
  
   while ($row = $data->fetch_assoc()) {
    $grupa=$_SESSION["grupa"];
  
      $_SESSION["proiect"]=$row["name"]; ?>
       <tr > <td >     <form action="./alege.php  " method="post" >
                 <?php  echo " $row[id]. $row[name]";  ?>

   </td> <td><?php    $numar=2-cautare(); ?>
    <input style="width:0" type="hidden" name="nume_proiect" value=" <?php  echo" $row[name] "  ?>">

   <input  style="background-color: <?php  if($numar>0)  echo"rgb(29, 197, 26);";
    else echo" rgb(236, 105, 81);"; ?>
   
   width:100% !important; height:100% !important;" type="submit"  name="btn"  value=" <?php  echo "$numar";?>">   </form>
    
   
     </td></tr><?php  }?>

    </tbody>
    </table>

    
 
           
</body>
<?php 
  function cautare (){
    
    $server_name = "localhost";
       $user = "root";
  $pass = "";
  $db = "proiectweb";
  $conn = new mysqli($server_name, $user, $pass, $db);
    $sql2="SELECT * FROM `chosen_project` where ( (`proiect`='$_SESSION[proiect]'or `proiect`='  $_SESSION[proiect]') and `grupa`='$_SESSION[grupa]'  )";
    $result= mysqli_query($conn,$sql2); 
    $abc= mysqli_num_rows($result);
    return $abc;

  }
?>
</html>