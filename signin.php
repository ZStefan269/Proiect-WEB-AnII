<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" cont  ent="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./app.css" />
    <link rel="stylesheet" href="./signin.css" />
    <title>Register</title>
</head>
<body>

    <?php
    require_once "./header.php";
    ?>

<div class="text">
    <form  action="processor.php" method="post">
        <h1>Sign Up</h1>

        <div>
            <label for="username">Nume:</label>
            <div>
                <input type="text" name="Nume" id="Nume" placeholder="Nume">
            </div>  
        </div>
        <div>
            <label for="username">Prenume:</label>
            <div>
                <input type="text" name="prenume" id="Prenume" placeholder="Prenume">
            </div>  
        </div>
        <div>
            <label for="username">grupa:</label>
            <div>
                <input type="text" name="grupa" id="grupa" placeholder="grupa">
            </div>  
        </div>
        <div>
            <label for="email">Email:</label>
            <div>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div>
            <label for="password">Password:</label>
            <div>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <div>
                <input type="password" name="password2" id="password2" placeholder="Password Again">
            </div>
        </div>
        <input class="backgroundbutton text" type="submit" name="submit" >
        <footer>Already a member? <a href="admin-login.php">Login here</a></footer>
    </form>
</div>
</body>
</html>