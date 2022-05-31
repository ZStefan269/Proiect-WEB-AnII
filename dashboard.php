<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if ($_SESSION["is_logged_in"] ==false ) {
    header("Location: ./home.php");
    exit();
}
?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="./app.css" />
    </head>

    <body>

        <?php
        require_once "./header.php";
    
        $server_name = "localhost";
        $user = "root";
        $pass = "";
        $db = "proiectweb";
        $conn = new mysqli($server_name, $user, $pass, $db);
        $sql = "SELECT * FROM contacts";
        $data = $conn->query($sql);
        while ($row = $data->fetch_assoc()) {
            echo "<p>
            $row[name] <br>
            $row[email] <br>
            $row[message] <br>
            </p> ";

        }
        ?>

            <form action="./logout.php" method="post">
                <input type="submit" name="submit" value="Logout">
            </form>

            <?php
        require_once "./footer.php";
    ?>

    </body>

</html>