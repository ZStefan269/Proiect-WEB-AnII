<?php


session_start();
if (isset($_POST["submit"])) {
    $errors = [];
    if (!isset($_POST["email"]) || $_POST["email"] == "")
        $errors["email"] = "Email ESTE OBLIGATORIU";
    if (!isset($_POST["password"]) || $_POST["password"] == "")
        $errors["password"] = "PAROLA ESTE OBLIGATORIU";}
        else{header("Location: ./admin-login.php");
            exit();}

        if (count($errors) != 0) {
            header("Location: ./admin-login.php?". http_build_query($errors));
            exit;
        }
    
$server_name = "localhost";
$user = "root";
$pass = "";
$db = "proiectweb";
$conn = new mysqli($server_name, $user, $pass, $db);
$email=$_POST["email"];
echo "<br><br><br>";
echo $_POST["password"];
$b=hash ("sha256",$_POST[`password`]);
$sql="SELECT * FROM students Where `email`='$email' and `password`='$b' "  ;
$data = mysqli_query($conn,$sql);
$a=mysqli_num_rows($data);
while($row = $data->fetch_assoc()){
$_SESSION["nume"]=$row["Nume"];
$_SESSION["prenume"]=$row["Prenume"];
$_SESSION["is_logged_in"]=false;
$_SESSION["email"]=$row["email"];
$_SESSION["grupa"]=$row["grupa"];   
$_SESSION["proiect"]='';

}
    
     if($a)
      {
       
         $_SESSION["is_logged_in"] = true;

          
         header("Location: ./home.php");
         exit();
     }
     header("Location: ./admin-login.php");
     exit();
    
 
