<?php



 if (isset($_POST["submit"])) {
    $errors = [];
    if (!isset($_POST["Nume"]) || $_POST["Nume"] == "")
        $errors["name"] = "NUMELE ESTE OBLIGATORIU";
        if (!isset($_POST["prenume"]) || $_POST["prenume"] == "")
        $errors["Prenume"] = "PRENUMELE ESTE OBLIGATORIU";
    if (!isset($_POST["email"]) || $_POST["email"] == "")
        $errors["email"] = "Email ESTE OBLIGATORIU";
    if (!isset($_POST["password"]) || $_POST["password"] == "")
        $errors["password"] = "PAROLA ESTE OBLIGATORIU";
        if (!isset($_POST["password2"]) || $_POST["password2"] == "" || $_POST["password2"]!= $_POST["password"])
        $errors["password"] = " CONFIRMARE PAROLA ESTE OBLIGATORIU";


    if (count($errors) != 0) {
        header("Location: ./contact.php?". http_build_query($errors));
        exit;
    }
    
    $server_name = "localhost";
    $user = "root";
    $pass = "";
    $db = "proiectweb";
    $conn = new mysqli($server_name, $user, $pass, $db);
    if ($conn -> connect_errno) {
        $errors["error"] = "Sorry, we could not process your request at this time. Please try again later.";
        header("Location: ./contact.php?". http_build_query($errors));
        exit;
    }
    $sql="SELECT* FROM students Where `email`='$_POST[email]'  "  ;
    $data=$conn->query($sql);
    $abc= mysqli_num_rows($data);
    if($abc>0)
    {    $errors["cont"] = " EXISTA DEJA UN CONT CU EMAILUL RESPECTIV";
         header("Location: ./contact.php?". http_build_query($errors));
        exit;}

    $data2 = [
        "nume" => htmlspecialchars($_POST["Nume"]),
        "prenume" => htmlspecialchars($_POST["prenume"]),
        "email" => htmlspecialchars($_POST["email"]),
        "password" => hash("sha256",$_POST["Password"]),
        "grupa" => htmlspecialchars($_POST["grupa"])
    ];   

    $sql1 = "INSERT INTO `students`(`Nume`,`Prenume`,`email`,`password`,`grupa`)
        VALUES('$data2[nume]','$data2[prenume]','$data2[email]','$data2[password]','$data2[grupa]')";

    $conn->query($sql1);

    if ($conn->errno) {
        $errors["error"] = "Sorry, we could not process your request at this time. Please try again later.";
        header("Location: ./contact.php?". http_build_query($errors));
        exit;
    }

    $errors["success"] = "Mesajul a fost trimis cu succes!";
    header("Location: ./contact.php?". http_build_query($errors));
    exit;

 }
 header("Location: ./admin-login.php");
 exit;



